<?php 
include 'config.php';
include 'carrito.php';

?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Contacto</title>

<head>

	<title>Contacto - PC & Components</title>

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

<center><h2>Contacto</h2></center>

<hr>

<h5>Deje su mensaje</h5>
	<center><div class="modal-body">
	<form action ="enviadoContacto.php" method="POST">
		<div class="form-group">
			<input type="text" class="formulario" name="nameh" placeholder="Nombres" required>
		</div>
		<div class="form-group">
			<input type="text" class="formulario" name="apellidoh" placeholder="Apellidos" required>
		</div>
		<div class="form-group">
			<input type="email" class="formulario" name="emailh" placeholder="Email" required>
		</div>
		<div class="form-group">
			<textarea type="text" class="formulario" name="mensajeh" placeholder="Mensaje" required></textarea>
		</div>
		<div class="modal-footer">
		<input type="submit" class="btn btn-secondary" name="enviar" value="Enviar">
		<a class="bton bton-primary" href="login.php" role="button"> Ver Buzon</a>
	    </div>
	</form>
	</div>
</center>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>
</html>