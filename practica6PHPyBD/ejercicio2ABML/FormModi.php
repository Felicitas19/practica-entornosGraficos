<?php
include("[se quitó el vínculo sospechoso]");
$vId = $_POST['id'];

$vSql = "SELECT * FROM Ciudades WHERE id = '$vId'";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
$fila = mysqli_fetch_array($vResultado);

if (mysqli_num_rows($vResultado) == 0) {
    echo "Ciudad inexistente.<br><a href='FormModiIni.html'>Volver</a>";
} else {
?>
  <form action="Modi.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
    Ciudad: <input type="text" name="ciudad" value="<?php echo $fila['ciudad']; ?>"><br>
    País: <input type="text" name="pais" value="<?php echo $fila['pais']; ?>"><br>
    Habitantes: <input type="number" name="habitantes" value="<?php echo $fila['habitantes']; ?>"><br>
    Superficie: <input type="number" step="0.01" name="superficie" value="<?php echo $fila['superficie']; ?>"><br>
    Metro: 
    <select name="tieneMetro">
      <option value="1" <?php if($fila['tieneMetro']==1) echo 'selected'; ?>>Sí</option>
      <option value="0" <?php if($fila['tieneMetro']==0) echo 'selected'; ?>>No</option>
    </select><br>
    <input type="submit" value="Guardar Cambios">
  </form>
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>