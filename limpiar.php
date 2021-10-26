<?php
$tab_contacto = "buzon_contacto";
$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion, "tienda");

$eliminar = "TRUNCATE TABLE buzon_contacto";

mysqli_query($conexion, $eliminar);

header("Location: buzon.php");
?>

