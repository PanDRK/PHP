<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina con valor convertido</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="forms">
        <?php
        function brl($dinero)
        {
            return ($dinero * 0.31);
        }

        function bob($dinero)
        {
            return ($dinero * 0.42);
        }

        function bzd($dinero)
        {
            return ($dinero * 0.12);
        }

        function eur($dinero)
        {
            return ($dinero * 0.055);
        }

        //bandera, imagen de la moneda, nombre, nombre de la moneda

        if (isset($_POST['tipo']) && isset($_POST['cant']) && isset($_POST['nombre'])) {
            $dinero = floatval($_POST['cant']);
            $name = $_POST['nombre'];

            switch ($_POST['tipo']) {
                case 'Reales Brasileño':

                    break;
                case 'Boliviano':

                    break;
                case 'Dolar Beliceño':

                    break;
                case 'Euro':
                    echo '<div style="display: flex; ">
                        <h1>Belgica - Euros </h1>
                        <img src="recursos/img/bel.jpg" alt="Bandera de Belgica" style="margin-left: 10px; height: 50px; padding-top: 20px;">
                        </div> <br><br>' .
                        '<div style="display: flex; ">' .
                        "<br>Bienvenido $name <br> La cantidad de $$dinero MXN son: €" . eur($dinero) . ' EUR.' .
                        '<img src="recursos/img/euro.png" alt="Bandera de Belgica" style="margin-left: 10px; height: 50px; padding-top: 30px;"> <br>
                        </div> <br><br>' . 'Este pais se encuentra en el continente Europeo.';
                    break;
            }
        } else {
            echo "<h1>Ingresa una opcion</h1> <br><br>";
        }
        ?>
    </div>
<!-- 
    echo '<div style="display: flex; ">
                        <h1 style="font-size: 30px;">Brasil - Reale Brasileño</h1>
                        <img src="recursos/img/brasil.png" alt="Bandera de Brasil" 
                        style="margin-left: 10px; height: 50px; padding-top: 20px;">
                        </div>' . "<br>Bienvenido $name <br> 
                        La cantidad de $$dinero MXN son: " . brl($dinero) . ' BRL.';

                    echo '<img src="recursos/img/bel.jpg" alt="Bandera de Belgica">';
echo '<div style="display: flex; ">
                        <h1>Bolivia - Boliviano</h1>
                        <img src="recursos/img/bol.png" alt="Bandera de Bolivia" 
                        style="margin-left: 10px; height: 50px; padding-top: 20px;">
                        </div>' . "<br>Bienvenido $name <br> La 
                        cantidad de $$dinero MXN son: " . bob($dinero) . ' BOB.';
                    echo '<img src="recursos/img/bel.jpg" alt="Bandera de Belgica">';
echo '<div style="display: flex; ">
                        <h1 style="font-size: 30px;">Belice - Dolar Bliceño</h1>
                        <img src="recursos/img/belice.png" alt="Bandera de Belice" 
                        style="margin-left: 10px; height: 70px; padding-top: 05px;">
                        </div>' . 
                        "<br>Bienvenido $name <br> La cantidad de $$dinero MXN son: " . bzd($dinero) . ' BZD.';
                    echo '<img src="recursos/img/bel.jpg" alt="Bandera de Belgica">'; -->

</body>

</html>
