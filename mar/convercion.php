<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina con valor convertido</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">

        <?php
        function blr($dinero)
        {
            return ($dinero / 3.25);
        }

        function bob($dinero)
        {
            return ($dinero / 2.38);
        }

        function bzd($dinero)
        {
            return ($dinero / 8.21);
        }

        function eur($dinero)
        {
            return ($dinero / 18.15);
        }

        //bandera, imagen de la moneda, nombre, nombre de la moneda

        if (isset($_POST['tipo']) && isset($_POST['cant']) && isset($_POST['nombre'])) {
            $dinero = $_POST['cant'];
            $name = $_POST['nombre'];

            switch ($_POST['tipo']) {
                case 'Reales Brasileños':
                    echo " <h1>Reales Bracileños</h1> <br><br>Bienvenido $name <br> 
                            La cantidad de $$dinero MXN son: " . blr($dinero) . ' BLR.';
                    echo '<img src="/recursos/img/brasil.jpg" alt="Bandera de Brasil">';
                    echo '<img src="/recursos/img/brasil_mon.jpg" alt="Moneda brasileña">';
                    break;
                case 'Boliviano':
                    echo "<h1>Bolivanos</h1> <br><br>Bienvenido $name <br> La 
                            cantidad de $$dinero MXN son: " . bob($dinero) . ' BOB.';
                    echo '<img src="/recursos/img/bol.jpg" alt="Bandera de Bolivia">';
                    echo '<img src="/recursos/img/bol_mon.jpg" alt="Moneda de bolivia">';
                    break;
                case 'Dolar Beliceño':
                    echo "<h1>Dolar Beliseño</h1> <br><br>Bienvenido $name <br> La 
                            cantidad de $$dinero MXN son: " . bzd($dinero) . ' BZD.';
                    echo '<img src="/recursos/img/belice.png" alt="Bandera de Belice">';
                    echo '<img src="/recursos/img/belice_mon.png" alt="Moneda beliceña">';
                    break;
                case 'Euros':
                    echo "<h1>Euros</h1> <br><br>Bienvenido $name <br> La cantidad de
                            $$dinero MXN son: " . eur($dinero) . ' EUR.';
                    echo '<img src="/recursos/img/bel.jpg" alt="Bandera de Belgica">';
                    echo '<img src="/recursos/img/euro.jpg" alt="Bandera de">';
                    break;
            }
        } else {
            echo "<h1>Ingresa una opcion</h1> <br><br>";
        }


        ?>
    </div>

</body>

</html>