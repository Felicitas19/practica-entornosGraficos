<?php
include("[se quitó el vínculo sospechoso]");

$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vTieneMetro = $_POST['tieneMetro'];

// Verificamos si la ciudad ya existe en la base de datos
$vSql = "SELECT COUNT(*) as canti FROM Ciudades WHERE ciudad = '$vCiudad' AND pais = '$vPais'";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
$vCant = mysqli_fetch_assoc($vResultado);

if ($vCant['canti'] != 0) {
    echo "La ciudad ya se encuentra registrada.<br>";
} else {
    // Si no existe, insertamos el nuevo registro
    $vSqlInsert = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro) 
                   VALUES ('$vCiudad', '$vPais', '$vHabitantes', '$vSuperficie', '$vTieneMetro')";
    mysqli_query($link, $vSqlInsert) or die(mysqli_error($link));
    echo "Ciudad registrada con éxito.<br>";
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>
<a href="Menu.html">Volver al Menú</a>