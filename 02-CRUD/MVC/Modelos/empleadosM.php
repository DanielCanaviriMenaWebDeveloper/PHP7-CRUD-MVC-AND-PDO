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

	}

 ?>