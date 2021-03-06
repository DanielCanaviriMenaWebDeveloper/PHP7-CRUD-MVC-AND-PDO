<?php 
	
	class EmpleadosC {

		// Metodo para registro de Empleados

		public function RegistrarEmpleadosC() {

			if(isset($_POST["nombreR"])) {

				$datosC = array(
					"nombre" => $_POST["nombreR"],
					"apellido" => $_POST["apellidoR"],
					"email" => $_POST["emailR"],
					"puesto" => $_POST["puestoR"],
					"salario" => $_POST["salarioR"]
				);

				$tablaBD = "empleados";

				$respuesta = EmpleadosM::RegistrarEmpleadosM($datosC, $tablaBD);

				if ($respuesta == "Bien") {

					header("location:index.php?ruta=empleados");

				} else {

					echo "Error al ingresar el registro";
				}
			} 	
		}

		// Metodo para mostrar los empleados

		public function MostrarEmpleadosC() {

			$tablaBD = "empleados";

			$respuesta = EmpleadosM::MostrarEmpleadosM($tablaBD);

			foreach ($respuesta as $key => $value) {
				
				echo '
						<tr>
							<td>'.$value["nombre"].'</td>
							<td>'.$value["apellido"].'</td>
							<td>'.$value["email"].'</td>
							<td>'.$value["puesto"].'</td>
							<td>'.$value["salario"].'</td>
							<td>
								<a href="index.php?ruta=editar&id='.$value["id"].'">
									<button>Editar</button>
								</a>
							</td>

							<td>
								<a href="index.php?ruta=empleados&idB='.$value["id"].'">
									<button>Borrar</button>
								</a>
							</td>
						</tr>
					 ';
			}

		}

		// Metodo para editar los empleados

		public function EditarEmpleadosC() {

			$datosC = $_GET["id"];

			$tablaBD = "empleados";

			$respuesta = EmpleadosM::EditarEmpleadosM($datosC, $tablaBD);

			echo '

				<input type="hidden"  value="'.$respuesta["id"].'" name="idE">

				<input type="text" placeholder="Nombre" value="'.$respuesta["nombre"].'" name="nombreE" required>

				<input type="text" placeholder="Apellido" value="'.$respuesta["apellido"].'" name="apellidoE" required>

				<input type="email" placeholder="Email" value="'.$respuesta["email"].'" name="emailE" required>

				<input type="text" placeholder="Puesto" value="'.$respuesta["puesto"].'" name="puestoE" required>

				<input type="text" placeholder="Salario" value="'.$respuesta["salario"].'" name="salarioE" required>

				<input type="submit" value="Actualizar">

				';
			
		}

		// Metodo para actualizar empleados

		public function ActualizarEmpleadosC () {

			if(isset($_POST["nombreE"])) {

				$datosC = array (

					"id" => $_POST["idE"],
					"nombre" => $_POST["nombreE"],
					"apellido" => $_POST["apellidoE"],
					"email" => $_POST["emailE"],
					"puesto" => $_POST["puestoE"],
					"salario" => $_POST["salarioE"],

				);

				$tablaBD = "empleados";

				$respuesta = EmpleadosM::ActualizarEmpleadosM($datosC, $tablaBD);

				if ($respuesta == "Bien") {

					header("location:index.php?ruta=empleados");

				} else {

					echo "Error al actualizar el registro";
				}
			}

		}

		// Metodo para eliminar empleados

		public function BorrarEmpleadosC () {

			if(isset($_GET["idB"])) {

				$datosC = $_GET["idB"];

				$tablaBD = "empleados";

				$respuesta = EmpleadosM::BorrarEmpleadosM($datosC, $tablaBD); 

				if ($respuesta == "Bien") {

					header("location:index.php?ruta=empleados");

				} else {

					echo "Error al eliminar el registro";
				}

			}
		}

	}

 ?>