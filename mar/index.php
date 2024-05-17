<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conversión de monedas</title>

	<link rel="stylesheet" href="style.css">

</head>

<body>
	<div class="form">
		<h1>Página de conversión de monedas</h1>

		<form action="convercion.php" method="POST">
			<label for="name">Ingrese su nombre:</label><br>
			<input type="text" name="nombre" class="input"><br><br>

			<label for="moneda_a_convertir">Ingresa la cantidad a convertir (MXN):</label><br>
			<input type="number" name="cant" class="input"><br><br>

			<label>Seleccione el pais a comvertir</label> <br><br>

			<div class="radio-group">
				<input class="radio-input" name="tipo" id="radio1" value="Reales Brasileño" type="radio">
				<label class="radio-label" for="radio1">
					<span class="radio-inner-circle"></span>
					Brasil
				</label>

				<input class="radio-input" name="tipo" id="radio2" value="Boliviano" type="radio">
				<label class="radio-label" for="radio2">
					<span class="radio-inner-circle"></span>
					Bolivia
				</label>

				<input class="radio-input" name="tipo" id="radio3" value="Dolar Beliceño" type="radio">
				<label class="radio-label" for="radio3">
					<span class="radio-inner-circle"></span>
					Belice
				</label>

				<input class="radio-input" name="tipo" id="radio4" value="Euro" type="radio">
				<label class="radio-label" for="radio4">
					<span class="radio-inner-circle"></span>
					Belgica
				</label>
			</div>

			<button type="Submit" class="fancy" href="#">
				<span class="top-key"></span>
				<span class="text">Calcular</span>
				<span class="bottom-key-1"></span>
				<span class="bottom-key-2"></span>
			</button>
		</form>
	</div>
</body>

</html>
