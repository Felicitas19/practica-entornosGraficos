<?php
// Si se envía el formulario, guardamos el nombre ingresado en la cookie
if (isset($_POST['usuario'])) {
    $nombreUsuario = $_POST['usuario'];
    setcookie("ultimo_usuario", $nombreUsuario, time() + (3600 * 24 * 30));
} elseif (isset($_COOKIE['ultimo_usuario'])) {
    // Si ya existe la cookie, recuperamos el valor
    $nombreUsuario = $_COOKIE['ultimo_usuario'];
} else {
    $nombreUsuario = "";
}
?>
<!DOCTYPE html>
<html>
<head><title>Recordar Usuario</title></head>
<body>
  <form action="usuario.php" method="POST">
    <label>Ingrese Nombre de Usuario:</label>
    <input type="text" name="usuario" value="<?php echo $nombreUsuario; ?>" required>
    <input type="submit" value="Recordar Usuario">
  </form>
</body>
</html>