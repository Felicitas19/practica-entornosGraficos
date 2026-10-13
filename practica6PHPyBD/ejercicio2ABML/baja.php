<?php
include("[se quitó el vínculo sospechoso]");
$vId = $_POST['id'];

$vSql = "SELECT * FROM Ciudades WHERE id = '$vId'";
$vResultado = mysqli_query($link, $vSql);

if (mysqli_num_rows($vResultado) == 0) {
    echo "Ciudad inexistente en la base de datos.<br>";
} else {
    $vSqlDelete = "DELETE FROM Ciudades WHERE id = '$vId'";
    mysqli_query($link, $vSqlDelete) or die(mysqli_error($link));
    echo "La ciudad fue eliminada correctamente.<br>";
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>
<a href="Menu.html">Volver al Menú</a>