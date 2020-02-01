<?php 

	function bienvenida() {
		echo 'Bienvenido al curso de PHP';
	}

	bienvenida();

	echo '<br>';

	function saludar($saludo) {
		echo $saludo;
	}

	saludar('Hola buenos dias');

	echo '<br>';

	function retornar_mensaje($mensaje) {
		return $mensaje;
	}

	echo retornar_mensaje('Este es un mensaje retornado');
 ?>