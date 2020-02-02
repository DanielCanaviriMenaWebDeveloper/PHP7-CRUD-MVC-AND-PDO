<?php 

	session_start();

	# Preguntamos si el valor de la variable de session es igual a false
	if(!$_SESSION["ingreso"]) {

		header("location:index.php?ruta=ingreso");

		exit();
		
	}

?>

	<br>
	<h1>EDITAR UN EMPLEADO</h1>

	<form method="post">
		
		

		<?php 

			$editar = new EmpleadosC();

			$editar -> EditarEmpleadosC();

			$actualizar = new EmpleadosC();

			$actualizar -> ActualizarEmpleadosC();

	 	?>

	</form>

	