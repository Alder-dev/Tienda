<?php

	$nombre = $_POST["nombre"];
	$documento = $_POST["documento"];
	$direccion = $_POST["direccion"];
	$telefono = $_POST["telefono"];

		$conexion = mysqli_connect("localhost", "root", "");
		mysqli_select_db($conexion, "tienda");

		$insertar = "INSERT INTO domicilio(nombre, documento, direccion, telefono) VALUES('$nombre', '$documento', '$direccion', '$telefono')";
		$resultado = mysqli_query($conexion, $insertar);

		if ($resultado==true) {
			header("location: mostrarCarrito.php");
			echo "<h4> Datos enviados</h4>";

		}else{
			echo "Hubo un error al enviar";

		}
		

?>