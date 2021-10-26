<?php
$conexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexion, "tienda");
if(isset($_REQUEST['id']))
{
$indice = $_GET['id'];

$aprobar = "DELETE FROM domicilio WHERE id = $indice";

mysqli_query($conexion, $aprobar);

header("Location: mostrarDomicilio.php");
}
?>