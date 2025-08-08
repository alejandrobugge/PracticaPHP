<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    if (!$email) {
        echo "Email inválido.";
        exit;
    }

    $asunto = "Mail de prueba de $nombre";
    $cabeceras = "From: $email";

    if (mail($email, $asunto, $mensaje, $cabeceras)) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Acceso no válido.";
}
?>
