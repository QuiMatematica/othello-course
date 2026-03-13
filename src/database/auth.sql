-- =============================================================
-- AUTH DATABASE SETUP
-- Fase 1: Preparazione del database per registrazione, login,
-- logout, cambio password e recupero password
-- =============================================================
-- Compatibile con MySQL 5.7+ / MariaDB 10.3+
-- Charset: utf8mb4 (supporta emoji e caratteri unicode completi)
-- =============================================================


-- -------------------------------------------------------------
-- 1. TABELLA PRINCIPALE: users
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
    `id`                INT UNSIGNED    NOT NULL AUTO_INCREMENT,
    `username`          VARCHAR(50)     NOT NULL,
    `email`             VARCHAR(255)    NOT NULL,
    `password_hash`     VARCHAR(255)    NOT NULL,          -- bcrypt hash (max ~72 chars, ma 255 per sicurezza futura)

    -- Verifica email
    `is_verified`       TINYINT(1)      NOT NULL DEFAULT 0,
    `verify_token`      VARCHAR(64)     NULL DEFAULT NULL, -- token SHA-256 hex (64 chars), NULL dopo verifica

    -- Stato account
    `is_active`         TINYINT(1)      NOT NULL DEFAULT 1, -- 0 = account disabilitato da admin

    -- Protezione brute-force
    `failed_attempts`   TINYINT         NOT NULL DEFAULT 0,
    `locked_until`      DATETIME        NULL DEFAULT NULL,  -- NULL = non bloccato

    -- Audit
    `last_login`        DATETIME        NULL DEFAULT NULL,
    `created_at`        DATETIME        NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at`        DATETIME        NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),
    UNIQUE KEY `uq_users_email`    (`email`),
    UNIQUE KEY `uq_users_username` (`username`),
    KEY `idx_users_verify_token`   (`verify_token`)         -- per lookup rapido alla verifica email
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;


-- -------------------------------------------------------------
-- 2. TABELLA: password_reset_tokens
--    Gestisce il recupero password via link email.
--    Il token RAW viene inviato per email; in DB si salva
--    solo l'hash SHA-256 (mai il valore in chiaro).
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
    `id`            INT UNSIGNED    NOT NULL AUTO_INCREMENT,
    `user_id`       INT UNSIGNED    NOT NULL,
    `token_hash`    VARCHAR(64)     NOT NULL,   -- SHA-256 hex del token raw (32 byte → 64 hex chars)
    `expires_at`    DATETIME        NOT NULL,   -- tipicamente: NOW() + 1 ora
    `used`          TINYINT(1)      NOT NULL DEFAULT 0,
    `created_at`    DATETIME        NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),
    UNIQUE KEY `uq_prt_token_hash` (`token_hash`),
    KEY `idx_prt_user_id`          (`user_id`),
    CONSTRAINT `fk_prt_user`
        FOREIGN KEY (`user_id`)
        REFERENCES `users` (`id`)
        ON DELETE CASCADE              -- se l'utente viene eliminato, i token vengono rimossi
        ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;


-- -------------------------------------------------------------
-- 3. TABELLA: user_sessions (opzionale ma consigliata per PWA)
--    Permette di invalidare singole sessioni (es. "disconnetti
--    da tutti i dispositivi") senza distruggere la sessione PHP.
--    Usa questa se hai bisogno di sessioni multi-device.
-- -------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_sessions` (
    `id`            INT UNSIGNED    NOT NULL AUTO_INCREMENT,
    `user_id`       INT UNSIGNED    NOT NULL,
    `session_token` VARCHAR(64)     NOT NULL,   -- token opaco, SHA-256 hex
    `user_agent`    VARCHAR(512)    NULL DEFAULT NULL,
    `ip_address`    VARCHAR(45)     NULL DEFAULT NULL,  -- IPv4 o IPv6
    `expires_at`    DATETIME        NOT NULL,
    `created_at`    DATETIME        NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (`id`),
    UNIQUE KEY `uq_us_session_token` (`session_token`),
    KEY `idx_us_user_id`             (`user_id`),
    CONSTRAINT `fk_us_user`
        FOREIGN KEY (`user_id`)
        REFERENCES `users` (`id`)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;


-- =============================================================
-- MANUTENZIONE: eventi schedulati per pulizia automatica
-- (richiede EVENT SCHEDULER abilitato su MySQL)
-- Su SiteGround piani shared: usa un cron job PHP in alternativa
-- =============================================================

-- Pulizia token reset scaduti (ogni giorno a mezzanotte)
-- DELIMITER //
-- CREATE EVENT IF NOT EXISTS `evt_cleanup_reset_tokens`
--     ON SCHEDULE EVERY 1 DAY
--     STARTS (TIMESTAMP(CURRENT_DATE) + INTERVAL 0 HOUR)
--     DO
--     BEGIN
--         DELETE FROM `password_reset_tokens`
--         WHERE `expires_at` < NOW() OR `used` = 1;
--     END //
-- DELIMITER ;

-- Pulizia sessioni scadute (ogni giorno)
-- DELIMITER //
-- CREATE EVENT IF NOT EXISTS `evt_cleanup_sessions`
--     ON SCHEDULE EVERY 1 DAY
--     STARTS (TIMESTAMP(CURRENT_DATE) + INTERVAL 1 HOUR)
--     DO
--     BEGIN
--         DELETE FROM `user_sessions`
--         WHERE `expires_at` < NOW();
--     END //
-- DELIMITER ;


-- =============================================================
-- QUERY DI VERIFICA (esegui dopo la creazione per controllare)
-- =============================================================

-- Verifica struttura tabelle
-- SHOW TABLES;
-- DESCRIBE users;
-- DESCRIBE password_reset_tokens;
-- DESCRIBE user_sessions;

-- Verifica indici
-- SHOW INDEX FROM users;
-- SHOW INDEX FROM password_reset_tokens;
-- SHOW INDEX FROM user_sessions;