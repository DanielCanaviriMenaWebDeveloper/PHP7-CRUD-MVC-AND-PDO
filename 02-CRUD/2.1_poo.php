<?php 
	class Coche {
		public $marca;
		public $color;
		public $placa;
		
		public function mostrar_coche() {
			echo "<p>Marca: $this->marca - Color: $this->color Placa: $this->placa.</p>";
		}
	}

	$coche1 = new Coche();
	$coche1->marca = "Toyota";
	$coche1->color = "Negro";
	$coche1->placa = "FG3456";
	$coche1->mostrar_coche();

	$coche2 = new Coche();
	$coche2->marca = "Nissan";
	$coche2->color = "Rojo";
	$coche2->placa = "AA5446";
	$coche2->mostrar_coche();

	$coche3 = new Coche();
	$coche3->marca = "Corolla";
	$coche3->color = "Azul";
	$coche3->placa = "DA5D46";
	$coche3->mostrar_coche();

 ?>