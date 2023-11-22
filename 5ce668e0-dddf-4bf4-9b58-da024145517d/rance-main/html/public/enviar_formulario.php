<?php
    // Recoge los datos del formulario
    $nombre = $_POST["introducir_nombre"];
    $email = $_POST["introducir_email"];
    $telefono = $_POST["introducir_telefono"];
    $asunto = $_POST["introducir_asunto"];
    $mensaje = $_POST["introducir_mensaje"];

    $header = 'From: ' .$introducir_email. " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion(). " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";


    // Configura el destinatario del correo electrónico
    $destinatario = "nikocisneros74@gmail.com";
    $asunto = 'Asunto del mensaje';

    // Crea el cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Teléfono: $telefono\n";
    $cuerpo .= "Asunto: $asunto\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    // Envía el correo electrónico
    mail($destinatario, $asunto, utf8_decode($cuerpo), $header);

    // Puedes redirigir al usuario a una página de confirmación
    header("Location: confirmacion.html");
    exit;
?>
