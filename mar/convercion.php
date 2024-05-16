<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina con valor convertido</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
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

            if (isset($_POST['tipo']) & isset($_POST['cant'])) {
                $dinero = $_POST['cant'];

                switch ($_POST['tipo']) {
                    case 'Reales Bracileños':
                        echo " <h1>Reales Bracileños</h1> <br><br> La cantidad de $$dinero MXN son: " . blr($dinero) . ' BLR.';
                        break;
                    case 'Boliviano':
                        echo "<h1>Bolivanos</h1> <br><br> La cantidad de $$dinero MXN son: " . bob($dinero) . ' BOB.';
                        break;
                    case 'Dolar Beliceño':
                        echo "<h1>Dolar Beliseño</h1> <br><br> La cantidad de $$dinero MXN son: " . bzd($dinero) . ' BZD.';
                        break;
                    case 'Euros':
                        echo "<h1>Euros</h1> <br><br> La cantidad de $$dinero MXN son: " . eur($dinero) . ' EUR.';
                        break;
                }
            } else {
                echo "<h1>Ingresa una opcion</h1> <br><br>";
            }


            ?>
        </div>
    </center>

</body>

</html>