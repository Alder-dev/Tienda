<?php
session_start();

if(isset($_POST['btnAccion'])){

	switch ($_POST['btnAccion']) {
		case 'agregar':
			
			if (is_numeric($_POST['id'])) {
				$ID = ($_POST['id']);

			}else{
				break;

			}if (is_string($_POST['nombre'])) {
				$NOMBRE = ($_POST['nombre']);

			}else{
				break;

			}if (is_string($_POST['precio'])) {
				$PRECIO = ($_POST['precio']);

			}else{
				break;

			}if (is_numeric($_POST['cantidad'])) {
				$CANTIDAD = ($_POST['cantidad']);
			}else{
				break;
			}

			if (!isset($_SESSION['CARRITO'])) {
				$producto=array(
					'ID'=>$ID,
					'NOMBRE'=>$NOMBRE,
					'PRECIO'=>$PRECIO,
					'CANTIDAD'=>$CANTIDAD,
				);
				$_SESSION['CARRITO'][0]=$producto;
			}else{
				$idProductos=array_column($_SESSION['CARRITO'], "ID");
				if (in_array($ID, $idProductos)) { ?>
				<div class="alert alert-success">El producto ya existe en el carrito</div>
				<?php }else{

				$numeroProductos=count($_SESSION['CARRITO']);
				$producto=array(
					'ID'=>$ID,
					'NOMBRE'=>$NOMBRE,
					'PRECIO'=>$PRECIO,
					'CANTIDAD'=>$CANTIDAD,
				);
				$_SESSION['CARRITO'][$numeroProductos]=$producto;
				}
			}


		break;

		case 'Eliminar':
			if (is_numeric($_POST['id'])) {
				$ID = ($_POST['id']);

				foreach ($_SESSION['CARRITO'] as $indice => $producto) {
					if ($producto['ID']==$ID) {
						unset($_SESSION['CARRITO'][$indice]);
					}
					
				}

			}
			
		break;
	}

}

?>