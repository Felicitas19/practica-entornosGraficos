<?php
session_start(); // Retoma la sesión activa [3, 8]

if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])) {
    echo "<h2>Datos Almacenados en la Sesión:</h2>";
    echo "Usuario: " . $_SESSION['usuario'] . "<br>";
    echo "Clave: " . $_SESSION['clave'] . "<br>";
} else {
    echo "No hay una sesión activa con datos registrados.";
}
?>