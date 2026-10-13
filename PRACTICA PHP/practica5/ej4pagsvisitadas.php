<?php
session_start(); // Inicializa o continúa la sesión (debe ir antes de cualquier etiqueta HTML)[cite: 70, 71, 74]

// Si el contador no está creado, se inicia en 1; de lo contrario, se incrementa[cite: 72, 74]
if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
} 
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contador - Página 1</title>
</head>
<body>
    <h2>Estás en la página principal (cuenta.php)</h2>
    <p>Has visitado <?php echo $_SESSION["contador"]; ?> páginas en esta sesión.</p>
    <br>
    <a href="cant_visitas.php">Ir a otra página (cant_visitas.php)</a>
</body>
</html>
```[cite: 74, 79]

---


```php
<?php
session_start(); // Retoma la sesión activa del usuario[cite: 70, 75]

// Incrementa también al visitar esta página para mantener el flujo de navegación
if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contador - Página 2</title>
</head>
<body>
    <h2>Estás en la segunda página (cant_visitas.php)</h2>
    <?php
    if (isset($_SESSION["contador"])) {
        echo "<p>Has visitado " . $_SESSION["contador"] . " páginas en total.</p>";
    } else {
        echo "<p>No hay registros de visitas en esta sesión.</p>";
    }
    ?>
    <br>
    <a href="cuenta.php">Volver a la página principal (cuenta.php)</a>
</body>
</html>
```[cite: 75, 79]