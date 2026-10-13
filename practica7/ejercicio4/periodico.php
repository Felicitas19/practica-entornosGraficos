<?php
// Si recibe una selección de titular por POST, crea o actualiza la cookie
if (isset($_POST['titular'])) {
    $titularSeleccionado = $_POST['titular'];
    setcookie("titular", $titularSeleccionado, time() + (3600 * 24 * 30));
} elseif (isset($_COOKIE['titular'])) {
    // Si no se envió formulario pero la cookie existe, recuperamos su valor
    $titularSeleccionado = $_COOKIE['titular'];
} else {
    // Primera vez: no hay cookie ni envío
    $titularSeleccionado = "todos";
}
?>
<!DOCTYPE html>
<html>
<head><title>Periódico Digital</title></head>
<body>
  <h1>Periódico Noticias Del Día</h1>
  
  <h3>Configurar Preferencias de Titulares:</h3>
  <form action="periodico.php" method="POST">
    <input type="radio" name="titular" value="politica" <?php if($titularSeleccionado=="politica") echo "checked"; ?>> Noticia Política<br>
    <input type="radio" name="titular" value="economica" <?php if($titularSeleccionado=="economica") echo "checked"; ?>> Noticia Económica<br>
    <input type="radio" name="titular" value="deportiva" <?php if($titularSeleccionado=="deportiva") echo "checked"; ?>> Noticia Deportiva<br>
    <input type="submit" value="Guardar Preferencia">
  </form>
  <hr>

  <h2>Titulares Destacados:</h2>
  <?php
  if ($titularSeleccionado == "politica" || $titularSeleccionado == "todos") {
      echo "<div style='background:#eee; padding:10px; margin:5px;'>
              <h3>Noticia Política</h3>
              <p>Se debaten nuevas leyes en el Congreso Nacional.</p>
            </div>";
  }
  if ($titularSeleccionado == "economica" || $titularSeleccionado == "todos") {
      echo "<div style='background:#e0f7fa; padding:10px; margin:5px;'>
              <h3>Noticia Económica</h3>
              <p>Los mercados financieros registran un importante crecimiento este trimestre.</p>
            </div>";
  }
  if ($titularSeleccionado == "deportiva" || $titularSeleccionado == "todos") {
      echo "<div style='background:#e8f5e9; padding:10px; margin:5px;'>
              <h3>Noticia Deportiva</h3>
              <p>La selección nacional consigue su pase a la final del torneo internacional.</p>
            </div>";
  }
  ?>

  <br>
  <a href="borrar_cookie.php">Restablecer preferencia (Borrar Cookie)</a>
</body>
</html>