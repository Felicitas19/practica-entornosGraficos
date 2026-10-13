<?php
// Verificamos si la cookie 'contador' ya existe
if (isset($_COOKIE['contador'])) {
    // Si existe, se incrementa el valor actual en 1
    $visitas = $_COOKIE['contador'] + 1;
    $mensaje = "Gracias por visitarnos nuevamente. Esta es tu visita N° " . $visitas;
} else {
    // Si no existe, es la primera visita del usuario
    $visitas = 1;
    $mensaje = "¡Bienvenido a nuestra página por primera vez!";
}

// Actualizamos o creamos la cookie con una duración de 1 año
setcookie("contador", $visitas, time() + (3600 * 24 * 365));
?>
<!DOCTYPE html>
<html>
<head><title>Contador de Visitas</title></head>
<body>
  <h2><?php echo $mensaje; ?></h2>
</body>
</html>