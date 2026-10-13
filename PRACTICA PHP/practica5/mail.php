<?php
$destinatario = "destinatario@dominio.com";
$asunto = "Prueba de correo HTML";

// Cabeceras para formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: Remitente <remitente@dominio.com>\r\n";

$cuerpo = '
<html>
<head><title>Envio de mail</title></head>
<body>
    <h1>¡Hola!</h1>
    <p><b>Este es un correo electrónico con formato HTML</b> enviado desde PHP.</p>
</body>
</html>
';

if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "Correo enviado con éxito.";
} else {
    echo "Error al enviar el correo.";
}
?>