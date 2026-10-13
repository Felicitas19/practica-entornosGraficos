<?php
session_start(); // Inicializa la sesión [3, 8]

$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['clave'] = $_POST['clave'];

echo "Variables de sesión guardadas con éxito.<br>";
echo "<a href='recuperar_sesion.php'>Ir a la tercera página para ver la sesión</a>";
?>