<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["message" => "Compila tutti i campi correttamente."]);
        exit;
    }

    $recipient = "claudio@quimatematica.it";
    $subject = "Nuovo messaggio dal modulo di contatto";
    $email_content = "Nome: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Messaggio:\n$message\n";

    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        echo json_encode(["message" => "Messaggio inviato con successo!"]);
    } else {
        http_response_code(500);
        echo json_encode(["message" => "C'è stato un errore nell'invio del messaggio."]);
    }
} else {
    http_response_code(403);
    echo json_encode(["message" => "Accesso non autorizzato."]);
}
?>
