<?php
// Se establece la conexión con el servidor y se selecciona la base de datos 'Capitales'
$link = mysqli_connect("localhost", "root", "") or die("Error al conectar con la base de datos");
mysqli_select_db($link, "Capitales") or die("Error al seleccionar la base de datos");
?>