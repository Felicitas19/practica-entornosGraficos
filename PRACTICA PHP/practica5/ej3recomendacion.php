<?php
$amigo_email = $_POST['amigo_email'];
$remitente_nombre = $_POST['remitente_nombre'];
$remitente_email = $_POST['remitente_email'];

$asunto = "¡Te recomiendo este sitio web!";
$headers = "From: $remitente_nombre <$remitente_email>\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$cuerpo = "
<html>
<body>
    <p>¡Hola! Tu amigo <b>$remitente_nombre</b> te recomienda visitar nuestro sitio web.</p>
</body>
</html>
";

if (mail($amigo_email, $asunto, $cuerpo, $headers)) {
    echo "¡Gracias $remitente_nombre! La recomendación ha sido enviada con éxito a tu amigo.";
} else {
    echo "Hubo un error al enviar la recomendación.";
}
?>
```[cite: 79]

---

¿Querés que te pase ahora el **Ejercicio 4** separado de la misma manera?