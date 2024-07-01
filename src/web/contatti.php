<!DOCTYPE html>
<html lang="it">
<head>
    <?php
        if ($_SERVER['HTTP_HOST'] == 'othello.quimatematica.it') {
            include 'google-tag.php';
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti @ Corso interattivo di Othello</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Contattaci</h2>
        <form id="contactForm">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="message">Messaggio:</label>
                <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
        <div id="responseMessage" class="mt-3"></div>
    </div>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(event) {
                event.preventDefault();
                var formData = {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    message: $('#message').val()
                };
                $.ajax({
                    type: 'POST',
                    url: 'send_mail.php',
                    data: formData,
                    dataType: 'json',
                    encode: true,
                    success: function(response) {
                        $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                        $('#contactForm')[0].reset();
                    },
                    error: function(response) {
                        $('#responseMessage').html('<div class="alert alert-danger">C\'è stato un errore nell\'invio del messaggio. Riprova più tardi.</div>');
                    }
                });
            });
        });
    </script>
</body>
</html>
