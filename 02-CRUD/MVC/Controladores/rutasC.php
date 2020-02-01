<?php 

	class RutasControlador {

		public function Plantilla() {

			include "Vistas/plantilla.php";
		}

		public function Rutas() {

			# Si la variable ruta obtenida por el metodo GET viene con información entonces:

			if (isset($_GET['ruta'])) {

				# Obtenemos en una variable la ruta

				$rutas = $_GET['ruta'];
				
			} else {

				$rutas = 'index';
			}

			# Solicitamos una respuesta al modelo enviandole la ruta de la petición

			$respuesta = Modelo::RutasModelo($rutas);
			
		    include $respuesta;

		}
	}

?>
