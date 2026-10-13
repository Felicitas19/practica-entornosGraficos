<?php
// Evaluamos si recibimos el estilo mediante un formulario POST
if (isset($_POST["estilo"])) {
    $estilo = $_POST["estilo"];
    // Guardamos la cookie con una validez de 90 días (60 seg * 60 min * 24 hs * 90 días)
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
} elseif (isset($_COOKIE["estilo"])) {
    // Si no viene por POST, verificamos si existe una cookie previamente almacenada
    $estilo = $_COOKIE["estilo"];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Selección de Estilos con Cookies</title>
  <?php
  // Si hay un estilo definido, incluimos dinámicamente la hoja de estilo CSS
  if (isset($estilo)) {
      echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';
  }
  ?>
</head>
<body>
  <h2>Ejemplo de uso de cookies en PHP para almacenar hojas de estilo CSS</h2>
  <form action="estilos.php" method="post">
    <label>Aquí puedes seleccionar el estilo (color de fondo) que deseas para la página:</label><br>
    <select name="estilo">
      <option value="verde">Verde</option>
      <option value="rosa">Rosa</option>
      <option value="negro">Negro</option>
    </select>
    <input type="submit" value="Actualizar el estilo">
  </form>
</body>
</html>
