<?php 
session_start();

		$conexion = mysqli_connect("localhost", "root", "");
		mysqli_select_db($conexion, "tienda");
		
		$usuario = $_POST["user"];
		$contrasena = $_POST["pass"];
		
		$_SESSION["usuario"] = $usuario;

		$consulta = "SELECT * FROM administrador where usuario = '$usuario' and contrasena = '$contrasena'";
		$resultado = mysqli_query($conexion, $consulta);

		$entrar = mysqli_num_rows($resultado);

		if ($entrar) {
			include 'admin.php';
		}else{
			include "login.php";
			?>
			<h2 class="bad">Error de autenticacion</h2>
			<?php
		}
		mysqli_free_result($resultado);
		mysqli_close($conexion);
?>