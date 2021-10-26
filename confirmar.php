<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,
		shrink-to-fit=no">

<head>

	<title>Tienda - PC & Components</title>

	<link rel="icon" type="image/ico" href="images/image1.ico" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/font.css">


</head>

<body>

	<div class="social-bar">
		<a href="https://www.facebook.com/alderxd.99" class="icon icon-facebook2"></a>
		<a href="https://www.instagram.com/alder_andres" class="icon icon-instagram"></a>
		<a href="https://api.whatsapp.com/send?phone=+573146968966" class="icon icon-whatsapp"></a>
		<a href="https://t.me/AlderAP09" class="icon icon-telegram"></a>
	</div>

	<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firstNavbar" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="firstNavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="mostrarCarrito.php"> <b>🛒Ver Carrito(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); ?>)</b> </a></li>
				<li class="nav-item"><a class="nav-link" href="index.php"> <b>🏪Tienda</b> </a></li>
				<li class="nav-item"><a class="nav-link" href="contacto.php"> <b>☎️Contacto</b> </a></li>
				<li class="nav-item"><a class="nav-link" href="login.php"> <b>Administrador</b> </a></li>
			</ul>
		</div>
	</nav>
<?php
include 'carrito.php';

	$numero = $_POST["numero"];
	$exp = $_POST["exp"];
	$CVV = $_POST["cvv"];
	$postal = $_POST["postalCod"];

		$conexion = mysqli_connect("localhost", "root", "");
		mysqli_select_db($conexion, "tienda");

		$insertar = "INSERT INTO datos_pago(numero, exp, CVV, postal) VALUES('$numero', '$exp', '$CVV', '$postal')";
		$resultado = mysqli_query($conexion, $insertar);

		if ($resultado==true) {
			echo "<h4><center>Pago aceptado</center></h4>";
			session_destroy();

		}else{
			echo "Hubo un error al enviar";
		}		

?>
