<?php 
	
	// Forma de usar las propiedades de un objeto en una función 

	$color1 = (object)[
		"remera" => "rojo", 
		"gorra" => "azul"
	];

	$color2 = (object)[
		"remera" => "negra", 
		"gorra" => "blanca"
	];

	function Ropa($color) {
		echo "<p>Ropa - Remera: $color->remera Gorra: $color->gorra</p>";
	}

	// Uso de una función con argumentos de tipo objeto
	
	Ropa($color1);

	Ropa($color2);

 ?>