<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conversión de monedas</title>

	<link rel="stylesheet" href="style.css">

</head>

<body>

	<center>
		<div class="form">
			<h1>Página de conversión de monedas</h1>

			<form action="convercion.php" method="POST">
				<label for="moneda_a_convertir">Ingresa la cantidad a convertir (MXN):</label><br>
				<input type="number" name="cant"><br><br>

				<label for="tipo">Brasil</label><br>
				<input type="radio" name="tipo" value="Reales Bracileños">Reales Bracileños<br><br>

				<label for="tipo">Bolivia</label><br>
				<input type="radio" name="tipo" value="Boliviano">Boliviano<br><br>

				<label for="tipo">Belice</label><br>
				<input type="radio" name="tipo" value="Dolar Beliceño">Dolar Beliceño<br><br>

				<label for="tipo">Bélgica</label><br>
				<input type="radio" name="tipo" value="Euros">Euros<br><br>

				<button type="submit">Calcular</button>
			</form>
		</div>
	</center>
</body>

</html>