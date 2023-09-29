<?php
include_once "encabezado.php";
include_once "navbar.php";
include_once "funciones.php";
session_start();
if(empty($_SESSION['usuario'])) header("location: login.php");

$totales = [
	["nombre" => "Usuarios registrados", "total" => obtenerNumeroUsuarios(), "imagen" => "img/usuarios.png"],
	["nombre" => "Clientes registrados", "total" => obtenerNumeroClientes(), "imagen" => "img/clientes.png"],
];


?>

<div class="container">
	<div class="alert alert-info" role="alert">
		<h1>
			Hola, <?= $_SESSION['usuario']?>
		</h1>
	</div>
	<div class="card-deck row mb-2">
	<?php foreach($totales as $total){?>
		<div class="col-xs-12 col-sm-6 col-md-3" >
			<div class="card text-center">
				<div class="card-body">
					<img class="img-thumbnail" src="<?= $total['imagen']?>" alt="">
					<h4 class="card-title" >
						<?= $total['nombre']?>
					</h4>
					<h2><?= $total['total']?></h2>

				</div>

			</div>
		</div>
		<?php }?>
	</div>

</div>	
