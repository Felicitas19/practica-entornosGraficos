<?php
include("[se quitó el vínculo sospechoso]");

$vSql = "SELECT * FROM Ciudades";
$vResultado = mysqli_query($link, $vSql);
?>
<!DOCTYPE html>
<html>
<head><title>Listado de Ciudades</title></head>
<body>
  <h2>Listado Completo de Ciudades</h2>
  <table border="1">
    <tr>
      <th>ID</th><th>Ciudad</th><th>País</th><th>Habitantes</th><th>Superficie (km²)</th><th>Metro</th>
    </tr>
    <?php while ($fila = mysqli_fetch_array($vResultado)) { ?>
    <tr>
      <td><?php echo $fila['id']; ?></td>
      <td><?php echo $fila['ciudad']; ?></td>
      <td><?php echo $fila['pais']; ?></td>
      <td><?php echo $fila['habitantes']; ?></td>
      <td><?php echo $fila['superficie']; ?></td>
      <td><?php echo ($fila['tieneMetro'] == 1) ? 'Sí' : 'No'; ?></td>
    </tr>
    <?php } ?>
  </table>
  <p><a href="Menu.html">Volver al Menú</a></p>
</body>
</html>
<?php
mysqli_free_result($vResultado);
mysqli_close($link);
?>