<?php 
	
	require_once "conexionBD.php";

	class EmpleadosM extends ConexionBD{

		// Registrar Empleados

		static public function RegistrarEmpleadosM($datosC, $tablaBD) {

			$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (nombre, apellido, email, puesto, salario) VALUES (:nombre, :apellido, :email, :puesto, :salario)");

			# Vinculando parametros

			$pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
			$pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
			$pdo -> bindParam(":email", $datosC["email"], PDO::PARAM_STR);
			$pdo -> bindParam(":puesto", $datosC["puesto"], PDO::PARAM_STR);
			$pdo -> bindParam(":salario", $datosC["salario"], PDO::PARAM_STR);

			# Preguntamos si se realizo la inserción correctamente

			if ($pdo -> execute()) {

				return "Bien";

			} else {

				return "Error";
			}

			# Cerramos la conexión

			$pdo -> close();

		}


		// Motrar Empleados

		static public function MostrarEmpleadosM($tablaBD) {

			$pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, apellido, email, puesto, salario FROM $tablaBD");

			$pdo -> execute();

			# Retorna todos los registros obtenidos en la consulta

			return $pdo -> fetchAll();

			$pdo -> close();

		}

		// Editar Empleados

		static public function EditarEmpleadosM($datosC, $tablaBD) {

			$pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, apellido, email, puesto, salario FROM $tablaBD  WHERE id = :id");

			$pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

			$pdo -> execute();

			# Retorna una sola fila 

			return $pdo -> fetch();

			$pdo -> close();

		}

		// Actualizar Empleados

		static public function ActualizarEmpleadosM($datosC, $tablaBD) {

			$pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET nombre = :nombre, apellido = :apellido, email = :email, puesto = :puesto, salario = :salario WHERE id = :id");

			$pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
			$pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
			$pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
			$pdo -> bindParam(":email", $datosC["email"], PDO::PARAM_STR);
			$pdo -> bindParam(":puesto", $datosC["puesto"], PDO::PARAM_STR);
			$pdo -> bindParam(":salario", $datosC["salario"], PDO::PARAM_STR);

			if ($pdo -> execute()) {

				return "Bien";

			} else {

				return "Error";
			}

			$pdo -> close();

		}

		// Borrar Empleados

		static public function BorrarEmpleadosM($datosC, $tablaBD) {

			$pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD  WHERE id = :id");

			$pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

			if ($pdo -> execute()) {

				return "Bien";

			} else {

				return "Error";
			}

			$pdo -> close();

		}

	}

 ?>