<?php

setcookie("titular", "", time() - 3600);
header("Location: periodico.php");
exit();
?>