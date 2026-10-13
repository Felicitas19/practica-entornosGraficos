<?php
if (!isset($_POST['submit'])) {
    // Si no se envió, mostrar el formulario
?>
    <form action="" method="post">
        <fieldset>
            <p><label>Nombre: <input type="text" name="nombre" required /></label></p>
            <p><label>Email: <input type="text" name="email" required /></label></p>
            <p>Comentario:</p>
            <p><textarea name="texto" cols="30" rows="5" required></textarea></p>
            <input type="submit" name="submit" value="Enviar"/>
        </fieldset>
    </form>
<?php
} else {
    // Si se envió, procesar los datos
    $fecha = date("d-m-Y");
    $hora = date("H:i:s");
    $destino = "danyelisabet@gmail.com";
    $asunto = "Consulta desde la web";
    $desde = "From: " . $_POST['email'];

    $comentario = "Nombre: " . $_POST['nombre'] . "\n" .
                  "Email: " . $_POST['email'] . "\n" .
                  "Consulta: " . $_POST['texto'] . "\n" .
                  "Enviado: $fecha a las $hora";

    mail($destino, $asunto, $comentario, $desde);
    echo "Su consulta ha sido enviada con éxito.";
}
?>
```[cite: 4, 66, 79]

---

### 3. `ej3recomendacion.php` (Ejercicio 3: Recomendar a un amigo)
Aquí borramos el texto de Markdown que tenías copiado por error y dejamos el formulario limpio (apuntando a un archivo que procese o a sí mismo)[cite: 79]:
```php
<?php
if (!isset($_POST['submit'])) {
?>
    <form action="" method="post">
        <fieldset>
            <p><label>Tu Nombre: <input type="text" name="remitente_nombre" required /></label></p>
            <p><label>Tu Email: <input type="text" name="remitente_email" required /></label></p>
            <p><label>Email del Amigo: <input type="text" name="amigo_email" required /></label></p>
            <input type="submit" name="submit" value="Recomendar"/>
        </fieldset>
    </form>
<?php
} else {
    $amigo = $_POST['amigo_email'];
    $nombre = $_POST['remitente_nombre'];
    $email = $_POST['remitente_email'];

    $asunto = "¡Te recomiendo este sitio!";
    $headers = "From: $nombre <$email>\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    $cuerpo = "<p>Hola! Tu amigo <b>$nombre</b> te recomienda visitar nuestra página web.</p>";

    mail($amigo, $asunto, $cuerpo, $headers);
    echo "¡Recomendación enviada con éxito a tu amigo!";
}
?>
```[cite: 79]

---

### 4. `ej4pagsvisitadas.php` (Ejercicio 4: Contador de páginas con sesiones)
Para las sesiones, asegurate de iniciar `session_start()` **antes** de cualquier línea de código HTML[cite: 71, 79]:
```php
<?php
session_start();

if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
}
?>
<html>
<body>
    <?php
    echo "Has visitado " . $_SESSION["contador"] . " páginas en esta sesión.";
    ?>
    <br><br>
    <a href="ej4pagsvisitadas.php">Recargar / Visitar otra página</a>
</body>
</html>
```[cite: 72, 74, 79]