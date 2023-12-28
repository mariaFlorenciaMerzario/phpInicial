<?php
session_start();
if (empty($_SESSION["id"])) {
	header("location:login.php");
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark  navbar-expand-md navbar-light bg-light">
		<div class="text-white bg-success p-2">
			<?php
				echo $_SESSION["usuario"];	
			?>
		</div>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<div class="navbar-nav mr-auto">
				<div class="offset-md-1 mr-auto text-center"></div>
				<a class="nav-item nav-link text-justify active ml-3 hover-primary" href="#">Inicio</a>
				
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="controlador/controlador_cerrar_session.php">Salir</a>
			</div>
		</div>
	</nav>
	<?php
	
	echo "<h2 class='text-center my-4'>Accesos a los siguientes links:</h2>";
	foreach ($_SESSION["roles"] as $key => $value) {
	
		if($value[0] == "planificacion"){
			echo "<a class='mx-4' href='www.polaris.com'>Listado de Planificacion</a></br>";
		}
		if($value[0] == "compras"){
			echo "<a class='mx-4'href='www.polaris.com'>Listado de Compras</a></br>";
		}
		if($value[0] == "proveedores"){
			echo "<a class='mx-4' href='www.polaris.com'>Listado de Proveedores</a></br>";
		}
	}
	
	?>
</body>




	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>