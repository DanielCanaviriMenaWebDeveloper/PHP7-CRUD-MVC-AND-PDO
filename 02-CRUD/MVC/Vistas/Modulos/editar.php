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
		
		<input type="text" placeholder="Nombre" name="nombreE" required>

		<input type="text" placeholder="Apellido" name="apellidoE" required>

		<input type="email" placeholder="Email" name="emailE" required>

		<input type="text" placeholder="Puesto" name="puestoE" required>

		<input type="text" placeholder="Salario" name="salarioE" required>

		<input type="submit" value="Registrar">

	</form>

	<?php 

		$editar = new EmpleadosC();

		$editar -> EditarEmpleadosC();

	 ?>