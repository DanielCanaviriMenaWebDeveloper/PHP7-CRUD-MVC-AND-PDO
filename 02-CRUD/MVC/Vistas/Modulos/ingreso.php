	
	<br>

	<h1>INGRESAR</h1>

	<form method="POST">
					
		<input type="text" placeholder="Usuario" name="usuarioI" required>

		<input type="password" placeholder="Contraseña" name="claveI" required>

		<input type="submit" value="Ingresar">

	</form>

	<?php 

		$ingreso = new AdminC();

		$ingreso -> IngresoC();

	 ?>