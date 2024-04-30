<!DOCTYPE HTML>
<html lang="es-ES">

<head>
	<meta charset="UTF-8">
	<title>Suma de 2 numeros en PHP</title>
</head>

<body>
	<?php

	// Obtener los valores de los parámetros
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];

	// Realizar la suma
	$suma = $num1 + $num2;

	// Mostrar el resultado
	echo "La suma de $num1 y $num2 es: $suma";

	?>
</body>

</html>
