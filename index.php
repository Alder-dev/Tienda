<?php 
include 'config.php';
include 'conexion.php';
include 'carrito.php';

?>

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
	<center>
		<h1>Shop</h1>
	</center>
	<hr>
		<div class="listado col-12">
			<h1 id="list">Lista de Procesadores</h1>
			</div>
			<br>
			<div class="row">
			<?php
			$sentencia=$pdo->prepare("SELECT * FROM `procesador`");
			$sentencia->execute();
			$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
			?>
			<?php
			foreach ($listaProductos as $producto) { ?>
				<div class="col-sm-3">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title text-center">
							<img id="img_obs" src="<?php echo $producto['imagen']; ?>" height="200" title="<?php echo $producto['nombre']; ?>" data-toggle="popover" data-content="<?php echo $producto['descripcion']; ?>" data-trigger="hover">
							</h5>
							<p class="card-text"><label id="name"><b><?php echo $producto['nombre']; ?></b></label><br>
								Precio: $<?php echo $producto['precio']; ?></p>
							</p>
						<form action="" method="POST">
							<input type="hidden" name="id" id="id" value="<?php echo $producto['ID']; ?>">
							<input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['nombre']; ?>">
							<input type="hidden" name="precio" id="precio" value="<?php echo $producto['precio']; ?>">
							<input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">

							<center><button name="btnAccion" type="submit" value="agregar" data-toggle="modal" data-target="#exampleModal3" class="btn btn-primary">Añadir al Carrito</button></center>
						</form>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>

			<hr>

			<div class="listado col-12">
			<h1 id="list">Lista de Tarjetas graficas</h1>
			</div>
			<br>
			<div class="row">
			<?php
			$sentencia=$pdo->prepare("SELECT * FROM `gpus`");
			$sentencia->execute();
			$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
			?>
			<?php
			foreach ($listaProductos as $producto) { ?>
				<div class="col-sm-3">
					<div class="card">
						<div class="card-body">
						<h5 class="card-title text-center">
							<img id="img_obs" src="<?php echo $producto['imagen'];; ?>" height="100" title="<?php echo $producto['nombre'];; ?>" data-toggle="popover" data-content="<?php echo $producto['descripcion'];; ?>" data-trigger="hover">
						</h5>
						<p class="card-text"><label id="name"><b><?php echo $producto['nombre']; ?></b></label><br>
							Precio: $<?php echo $producto['precio']; ?></p>
						</p>
						<form action="" method="POST">
							<input type="hidden" name="id" id="id" value="<?php echo $producto['ID']; ?>">
							<input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['nombre']; ?>">
							<input type="hidden" name="precio" id="precio" value="<?php echo $producto['precio']; ?>">
							<input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">

							<center><button name="btnAccion" type="submit" value="agregar" data-toggle="modal" data-target="#exampleModal3" class="btn btn-primary">Añadir al Carrito</button></center>
						</form>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>

			<hr>

			<div class="listado col-12">
			<h1 id="list">Lista de Tarjetas Board</h1>
			</div>
			<br>
			<div class="row">
			<?php
			$sentencia=$pdo->prepare("SELECT * FROM `board`");
			$sentencia->execute();
			$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
			?>
			<?php
			foreach ($listaProductos as $producto) { ?>
				<div class="col-sm-3">
					<div class="card">
						<div class="card-body">
						<h5 class="card-title text-center">
							<img id="img_obs" src="<?php echo $producto['imagen']; ?>" height="150" title="<?php echo $producto['nombre']; ?>" data-toggle="popover" data-content="<?php echo $producto['descripcion']; ?>" data-trigger="hover">
						</h5>
						<p class="card-text"><label id="name"><b><?php echo $producto['nombre']; ?></b></label><br>
							Precio: $<?php echo $producto['precio']; ?></p>
						</p>
						<p class="card-text text-right">
						</p>
						<form action="" method="POST">
							<input type="hidden" name="id" id="id" value="<?php echo $producto['ID']; ?>">
							<input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['nombre']; ?>">
							<input type="hidden" name="precio" id="precio" value="<?php echo $producto['precio']; ?>">
							<input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">

							<center><button name="btnAccion" type="submit" value="agregar" data-toggle="modal" data-target="#exampleModal3" class="btn btn-primary">Añadir al Carrito</button></center>
						</form>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>

			<hr>

			<div class="listado col-12">
			<h1 id="list">Lista de Chasis</h1>
			</div>
			<br>
			<div class="row">
			<?php
			$sentencia=$pdo->prepare("SELECT * FROM `chasis`");
			$sentencia->execute();
			$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
			?>
			<?php
			foreach ($listaProductos as $producto) { ?>
				<div class="col-sm-3">
					<div class="card">
						<div class="card-body">
						<h5 class="card-title text-center">
							<img id="img_obs" src="<?php echo $producto['imagen']; ?>" height="150" title="<?php echo $producto['nombre']; ?>" data-toggle="popover" data-content="<?php echo $producto['descripcion']; ?>" data-trigger="hover">
						</h5>
						<p class="card-text"><label id="name"><b><?php echo $producto['nombre']; ?></b></label><br>
							Precio: $<?php echo $producto['precio']; ?></p>
						</p>
						<p class="card-text text-right">
						</p>
						<form action="" method="POST">
							<input type="hidden" name="id" id="id" value="<?php echo $producto['ID']; ?>">
							<input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['nombre']; ?>">
							<input type="hidden" name="precio" id="precio" value="<?php echo $producto['precio']; ?>">
							<input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">

							<center><button name="btnAccion" type="submit" value="agregar" data-toggle="modal" data-target="#exampleModal3" class="btn btn-primary">Añadir al Carrito</button></center>
						</form>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>

			<hr>

			<div class="listado col-12">
			<h1 id="list">Lista de Memorias RAM</h1>
			</div>
			<br>
			<div class="row">
			<?php
			$sentencia=$pdo->prepare("SELECT * FROM `ram`");
			$sentencia->execute();
			$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
			?>
			<?php
			foreach ($listaProductos as $producto) { ?>
				<div class="col-sm-3">
					<div class="card">
						<div class="card-body">
						<h5 class="card-title text-center">
							<img id="img_obs" src="<?php echo $producto['imagen']; ?>" height="170" title="<?php echo $producto['nombre']; ?>" data-toggle="popover" data-content="<?php echo $producto['descripcion']; ?>" data-trigger="hover">
						</h5>
						<p class="card-text"><label id="name"><b><?php echo $producto['nombre']; ?></b></label><br>
							Precio: $<?php echo $producto['precio']; ?></p>
						</p>
						<p class="card-text text-right">
						</p>
						<form action="" method="POST">
							<input type="hidden" name="id" id="id" value="<?php echo $producto['ID']; ?>">
							<input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['nombre']; ?>">
							<input type="hidden" name="precio" id="precio" value="<?php echo $producto['precio']; ?>">
							<input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">

							<center><button name="btnAccion" type="submit" value="agregar" data-toggle="modal" data-target="#exampleModal3" class="btn btn-primary">Añadir al Carrito</button></center>
						</form>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>

			<hr>

			<div class="listado col-12">
			<h1 id="list">Lista de Discos de almacenamiento</h1>
			</div>
			<br>
			<div class="row">
			<?php
			$sentencia=$pdo->prepare("SELECT * FROM `discos`");
			$sentencia->execute();
			$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
			?>
			<?php
			foreach ($listaProductos as $producto) { ?>
				<div class="col-sm-3">
					<div class="card">
						<div class="card-body">
						<h5 class="card-title text-center">
							<img id="img_obs" src="<?php echo $producto['imagen']; ?>" height="70" title="<?php echo $producto['nombre']; ?>" data-toggle="popover" data-content="<?php echo $producto['descripcion']; ?>" data-trigger="hover">
						</h5>
						<p class="card-text"><label id="name"><b><?php echo $producto['nombre']; ?></b></label><br>
							Precio: $<?php echo $producto['precio']; ?></p>
						</p>
						<p class="card-text text-right">
						</p>
						<form action="" method="POST">
							<input type="hidden" name="id" id="id" value="<?php echo $producto['ID']; ?>">
							<input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['nombre']; ?>">
							<input type="hidden" name="precio" id="precio" value="<?php echo $producto['precio']; ?>">
							<input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">

							<center><button name="btnAccion" type="submit" value="agregar" data-toggle="modal" data-target="#exampleModal3" class="btn btn-primary">Añadir al Carrito</button></center>
						</form>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>

			<hr>

			<div class="listado col-12">
			<h1 id="list">Lista de Celulares</h1>
			</div>
			<br>
			<div class="row">
			<?php
			$sentencia=$pdo->prepare("SELECT * FROM `celulares`");
			$sentencia->execute();
			$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC); 
			?>
			<?php
			foreach ($listaProductos as $producto) { ?>
				<div class="col-sm-3">
					<div class="card">
						<div class="card-body">
						<h5 class="card-title text-center">
							<img id="img_obs" src="<?php echo $producto['imagen']; ?>" height="180" title="<?php echo $producto['nombre']; ?>" data-toggle="popover" data-content="<?php echo $producto['descripcion']; ?>" data-trigger="hover">
						</h5>
						<p class="card-text"><label id="name"><b><?php echo $producto['nombre']; ?></b></label><br>
							Precio: $<?php echo $producto['precio']; ?></p>
						</p>
						<p class="card-text text-right">
						</p>
						<form action="" method="POST">
							<input type="hidden" name="id" id="id" value="<?php echo $producto['ID']; ?>">
							<input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['nombre']; ?>">
							<input type="hidden" name="precio" id="precio" value="<?php echo $producto['precio']; ?>">
							<input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">

							<center><button name="btnAccion" type="submit" value="agregar" data-toggle="modal" data-target="#exampleModal3" class="btn btn-primary">Añadir al Carrito</button></center>
						</form>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>

			<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
				aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Contacto de
								Clientes</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="alert alert-primary alert-dismissible fade show
									text-left" role="alert">
								<strong>Info!</strong> Si tienes alguna pregunta no dudes
								en contactarnos. Estaremos atentos a responder cualquier
								inquietud que tengas.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<textarea class="form-control" id="campo" aria-label="With
									textarea"></textarea>
						</div>

					</div>
				</div>
			</div>

			<div class="modal fade col-12" id="exampleModal3" tabindex="-1" role="dialog"
				aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content col-12">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Confirmar</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<center>
							<div>
								<img id="img_detalle" src="images/image14.png" height="150">
							</div>
							<div>
								<p>
									<i class="ico fa fa-check-square-o"></i>Añadido al carrito
								</p>
							</div>
						</center>

					</div>
				</div>
			</div>


			<div class="inst">
				<div id="cont" class="container col-12">
					<div class="row">
						<div class="col-sm-12 text-center">
							<hr>
							<h2 id="titulo"><b>¿Cómo Comprar en PC & Components?</b></h2>
						</div>
						<div class="col-sm-4 text-center">
							<img id="img_inst" src="images/image14.png" height="100">
							<p id="mensajito"><b>1. Elige el articulo a Comprar</b><br>Confirma
								agregando al carrito.
							</p>
						</div>
						<div class="col-sm-4 text-center">
							<img id="img_inst" src="images/image135.jpg" height="100">
							<p id="mensajito">2. Define tu forma de pago
							</p>
						</div>
						<div class="col-sm-4 text-center">
							<img id="img_inst" src="images/image136.jpg" height="110">
							<p id="mensajito">3. Nosotros te lo enviamos a tu casa
								gratis
							</p>
						</div>
					</div>
				</div>

			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
			integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
			crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
			integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
			crossorigin="anonymous"></script>
		<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
		
	<script>
	$(function () {
	  $('[data-toggle="popover"]').popover()
	}) </script>
<footer>&copy; 2020 Pc & Components</footer>
</body>
</html>