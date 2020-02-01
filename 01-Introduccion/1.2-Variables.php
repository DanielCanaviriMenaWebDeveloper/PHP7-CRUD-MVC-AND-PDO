<?php 

	// Como se define una variable

	# Variable de tipo número

	$numero = 10; 

	var_dump($numero);

	echo '<br>';

	// Como mostrar una variable

	echo $numero;

	echo '<br>';

	// Como mostrar una variable y una cadena de texto

	echo 'Este es un número '.$numero;

	echo '<br>';

	# Variable tipo texto 

	$texto = 'Esto es una cadena de texto';

	echo 'Mi cadena: '.$texto; 

	echo '<br>';

	# Variable de tipo boolean

	$boolean1 = true;

	# En php true se muestra por pantalla como el valor igual a 1

	echo 'Esta es una variable booleana con valor igual a true : '.$boolean1;

	echo '<br>';

	# En php false se muestra por pantalla como el valor igual a vacio  

	$boolean2 = false;

	echo 'Esta es una variable booleana con valor igual a false : '.$boolean2;

	echo '<br>';

	# Variables de tipo arreglo 

	$arreglo = array(1,2,3,4,5,6,7,8,9,0);

	print_r($arreglo);

	echo '<br>';

	for($i=0; $i<count($arreglo); $i++) {
		echo $arreglo[$i];
		echo '<br>';
	}

	# Variables de tipo arreglo con propiedades o conocidos como arreglos asociativos

	$arreglo2 = array(
		'propiedad1' => 'valor1',
		'propiedad2' => 'valor2',
		'propiedad3' => 'valor3'
	);

	echo '<pre>';
	print_r($arreglo2);
	echo '<pre>';

	echo '<br>';

	echo $arreglo2['propiedad1'];

	echo '<br>';

	foreach ($arreglo2 as $key => $value) {
		echo "Llave: ".$key." Valor: ".$value;
		echo '<br>';
	}

	# Variable de tipo Objeto

	$objeto = (object)[
		"propiedad1" => "valor1",
		"propiedad2" => "valor2",
		"propiedad3" => "valor3"
	];

	echo $objeto->propiedad1;

	echo '<br>';

	foreach ($objeto as $key => $value) {
		echo "Llave: ".$key." Valor: ".$value;
		echo '<br>';
	}

 ?>