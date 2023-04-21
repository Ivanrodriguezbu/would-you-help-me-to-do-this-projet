<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Define los datos del destinatario del correo electrónico
    $to = 'contacto@example.com';
    $subject = 'Mensaje de Contacto';

    // Obtiene los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Crea el cuerpo del correo electrónico
    $body = "Nombre: " . $name . "\r\n";
    $body .= "Email: " . $email . "\r\n";
    $body .= "Mensaje: " . $message . "\r\n";

    // Define los encabezados del correo electrónico
    $headers = 'From: ' . $email . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    // Envía el correo electrónico
    if (mail($to, $subject, $body, $headers)) {
        // Si se envió el correo electrónico, muestra un mensaje de éxito
        echo '<p class="success">¡Gracias por contactarnos! Te responderemos a la brevedad.</p>';
    } else {
        // Si no se envió el correo electrónico, muestra un mensaje de error
        echo '<p class="error">Lo sentimos, pero no se pudo enviar tu mensaje. Por favor, intenta de nuevo más tarde.</p>';
    }
}
