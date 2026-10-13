<?php
include("[se quitó el vínculo sospechoso]");

$Cant_por_Pag = 3; // Muestra 3 ciudades por página
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$inicio = ($pagina - 1) * $Cant_por_Pag;

// 1. Obtener la cantidad total de registros
$vSqlTotal = "SELECT * FROM Ciudades";
$vResultadoTotal = mysqli_query($link, $vSqlTotal);
$total_registros = mysqli_num_rows($vResultadoTotal);
$total_paginas = ceil($total_registros / $Cant_por_Pag);

// 2. Consulta acotada con LIMIT
$vSql = "SELECT * FROM Ciudades LIMIT " . $inicio . "," . $Cant_por_Pag;
$vResultado = mysqli_query($link, $vSql);
?>
<!DOCTYPE html>
<html>
<head><title>Listado Paginado</title></head>
<body>
  <h2>Listado de Ciudades con Paginación</h2>
  <p>Página <?php echo $pagina; ?> de <?php echo $total_paginas; ?></p>
  
  <table border="1">
    <tr>
      <th>ID</th><th>Ciudad</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>Metro</th>
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

  <br>
  <div>
    <?php
    if ($total_paginas > 1) {
        for ($i = 1; $i <= $total_paginas; $i++) {
            if ($pagina == $i) {
                echo "<b>" . $i . "</b> ";
            } else {
                echo "<a href='Listado_pag.php?pagina=" . $i . "'>" . $i . "</a> ";
            }
        }
    }
    ?>
  </div>
  <p><a href="Menu.html">Volver al Menú</a></p>
</body>
</html>
<?php
mysqli_free_result($vResultado);
mysqli_close($link);
?>