// src/auth/auth.js
// Modulo JS per chiamare gli endpoint di autenticazione
// Da importare nei tuoi componenti con: import { login, logout, ... } from './auth/auth.js'

const BASE_URL = `${window.location.protocol}//${window.location.host}/api/auth`;

// Opzioni comuni a tutte le chiamate
const defaultOptions = {
    credentials: 'include',                     // indispensabile per inviare/ricevere cookie cross-origin
    headers: { 'Content-Type': 'application/json' },
};

// Helper interno: esegue fetch e lancia un errore se la risposta non è ok
async function apiFetch(path, options = {}) {
    const res = await fetch(`${BASE_URL}${path}`, {
        ...defaultOptions,
        ...options,
        headers: { ...defaultOptions.headers, ...(options.headers ?? {}) },
    });

    const data = await res.json();

    if (!res.ok) {
        // Lancia un errore con il messaggio restituito dal server
        const err = new Error(data.error ?? 'Errore sconosciuto');
        err.status = res.status;
        err.data   = data;
        throw err;
    }

    return data;
}

// ---------------------------------------------------------------
// Registrazione
// ---------------------------------------------------------------
// Ritorna: { success: true, message: "..." }
// Lancia:  Error con .message dal server (es. "Email già in uso")
export async function register({ username, email, password }) {
    return apiFetch('/register.php', {
        method: 'POST',
        body: JSON.stringify({ username, email, password }),
    });
}

// ---------------------------------------------------------------
// Verifica email (chiamata dalla pagina di atterraggio del link)
// ---------------------------------------------------------------
// token: stringa dalla query string ?token=...
export async function verifyEmail(token) {
    return apiFetch(`/verify-email.php?token=${encodeURIComponent(token)}`);
}

// ---------------------------------------------------------------
// Login
// ---------------------------------------------------------------
// Ritorna: { success: true, user: { id, username, email } }
export async function login({ email, password }) {
    return apiFetch('/login.php', {
        method: 'POST',
        body: JSON.stringify({ email, password }),
    });
}

// ---------------------------------------------------------------
// Logout
// ---------------------------------------------------------------
export async function logout() {
    return apiFetch('/logout.php', { method: 'POST' });
}

// ---------------------------------------------------------------
// Utente corrente (controlla se la sessione è attiva)
// ---------------------------------------------------------------
// Ritorna: { success: true, user: { id, username, email } }
// Lancia Error con status 401 se non autenticato
export async function getMe() {
    return apiFetch('/me.php');
}

// ---------------------------------------------------------------
// Cambio password
// ---------------------------------------------------------------
export async function changePassword({ currentPassword, newPassword }) {
    return apiFetch('/change-password.php', {
        method: 'POST',
        body: JSON.stringify({
            current_password: currentPassword,
            new_password:     newPassword,
        }),
    });
}

// ---------------------------------------------------------------
// Recupero password — step 1: richiede il link via email
// ---------------------------------------------------------------
export async function forgotPassword({ email }) {
    return apiFetch('/forgot-password.php', {
        method: 'POST',
        body: JSON.stringify({ email }),
    });
}

// ---------------------------------------------------------------
// Recupero password — step 2: imposta la nuova password
// ---------------------------------------------------------------
// token: stringa dalla query string ?token=... del link nell'email
export async function resetPassword({ token, newPassword }) {
    return apiFetch('/reset-password.php', {
        method: 'POST',
        body: JSON.stringify({ token, new_password: newPassword }),
    });
}

// ---------------------------------------------------------------
// Helper: inizializza l'app verificando la sessione
// Uso consigliato nell'entry point della PWA:
//
//   import { initAuth } from './auth/auth.js';
//   const user = await initAuth();
//   if (user) { /* mostra app */ } else { /* mostra login */ }
// ---------------------------------------------------------------
export async function initAuth() {
    try {
        const { user } = await getMe();
        return user;
    } catch {
        return null;    // sessione scaduta o non autenticato
    }
}
