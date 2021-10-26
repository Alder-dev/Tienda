<?php 
include 'config.php';
include 'carrito.php';

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Carrito</title>

<head>

	<title>Carrito - PC & Components</title>

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

	<center><h2>Carrito de compras</h2></center>

	<?php if (!empty($_SESSION['CARRITO'])) { ?>

	<table class="table table-striped">
		<tbody>
			<tr>
				<th width="40%">Descripcion</th>
				<th width="15%" class="text-center">Cantidad</th>
				<th width="20%" class="text-center">Precio</th>
				<th width="20%" class="text-center">Total</th>
				<th width="5%" class="text-center">--</th>
			</tr>
			<?php $total=0; ?>
			<?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>
			<tr>
				<td width="30%"><?php echo $producto['NOMBRE'] ?></td>
				<td width="15%" class="text-center"><?php echo $producto['CANTIDAD'] ?></td>
				<td width="25%" class="text-center"><?php echo $producto['PRECIO'] ?></td>
				<td width="30%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
				<td width="5%">
					<form action="" method="POST">
						<input type="hidden" name="id" value="<?php echo $producto['ID']; ?>">
						<button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Eliminar</button>
					</form>
				</td>
			</tr>
			<?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
			<?php } ?>
			<tr>
				<td colspan="3" align="right"><h5>TOTAL</h5></td>
				<td align="right"><h5>$<?php echo number_format($total,2); ?></h5></td>
				<td></td>
			</tr>
		</tbody>
	</table>

<?php }else{ ?>
<div class="alert alert-success">
	Carrito vacio

</div>
<?php } ?>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
		Datos de domicilio >>
	</button>
	<hr>
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			Conformar Pago >>
		</button>
	<hr>

	<div class="collapse" id="collapseExample">
		<div>
			<a class="bton bton-primary" href="https://www.paypal.com/" role="button">
				PayPal
			</a>
			<hr>
			<button type="button" class="bton bton-primary" data-toggle="modal" data-target="#exampleModalCard">
				Visa o MasterCard >>
			</button>
		</div>
	</div>
	

	<div class="modal fade" id="exampleModalCard" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Datos de domicilio</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="confirmar.php" method="POST">
						<div class="form-group">
							<input type="text" class="form-control" name="numero" placeholder="Numero de tarjeta" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="exp" placeholder="MM/AA" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="cvv" placeholder="CVV" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="postalCod" placeholder="Codigo postal" required>
						</div>
						<div class="modal-footer">
					<input type="submit" value="Ok" name="Ok" class="btn btn-secondary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Datos de domicilio</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="domicilio.php" method="POST">
						<div class="form-group">
							<input type="text" class="form-control" name="nombre" placeholder="Nombres" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="documento" placeholder="Documento" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="direccion" placeholder="Direccion" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
						</div>
						<div class="modal-footer">
				    	<input type="submit" class="btn btn-secondary" value="Ok" name="Ok">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>