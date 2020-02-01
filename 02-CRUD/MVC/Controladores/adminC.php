<?php 

	class AdminC {

		public function IngresoC() {

			# Verificamos si existe datos en el campo de nombre usuarioI

			if(isset($_POST["usuarioI"])) {

				# Almacenamos en un array el usuario y contraseña ingresados

				$datosC = array( 
					"usuario" => $_POST["usuarioI"],
					"clave" => $_POST["claveI"] 
				);

				# Variable que almacena el nombre de la tabla llamada aniministradores de nuextra BD

				$tablaBD = "administradores";

				# Solicitamos al modelo una respuesta enviandole el array y el nombre de la tabla 

				$respuesta = AdminM::IngresoM($datosC, $tablaBD); 

				# Compramos si los datos de la BD y datos ingresados en los campos de ingreso son iguales

				if ( $respuesta['usuario'] == $_POST["usuarioI"] && $respuesta['clave'] == $_POST["claveI"]) {

					# Creamos una variable de Seción 

					session_start();

					$_SESSION["ingreso"] = true;

					header("location:index.php?ruta=empleados");

				} else {

					echo "ERROR AL INGRESAR";

				}
			}
		}
	}

 ?>