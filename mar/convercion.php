<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina con valor convertido</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .forms {
            background-color: #e5e5e5;
            margin-top: 100px;
            margin-left: 400px;
            width: 580px;
            height: 500px;
            padding-top: 50px;
            padding-right: 50px;
            padding-left: 100px;
            border: 5px solid black;
            border-radius: 40px;
        }
    </style>

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

        if (isset($_POST['tipo']) && isset($_POST['cant']) && isset($_POST['nombre'])) {
            $dinero = floatval($_POST['cant']);
            $name = $_POST['nombre'];

            switch ($_POST['tipo']) {
                case 'Reales Brasileño':
                    echo '<div style="display: flex; ">
                    <h1>Brasil - Real Bracileño </h1>
                    <img src="recursos/img/brasil.png" alt="Bandera de Bélgica" style="margin-left: 10px; height: 50px; padding-top: 20px;">
                    </div> <br><br>' .
                        '<div style="display: flex; ">' .
                        "<br>Bienvenido $name <br> La cantidad de $$dinero MXN son: $" . brl($dinero) . ' BRL.' .
                        '<img src="recursos/img/brasil_mon.jpg" alt="Bandera de Brasil" style="margin-left: 10px; height: 50px; padding-top: 30px;"> <br>
                    </div> <br><br>' . 'Este país se encuentra en el continente Americano.';
                    break;
                case 'Boliviano':
                    echo '<div style="display: flex; ">
                    <h1>Bolivia - Boliviano</h1>
                    <img src="recursos/img/bol.png" alt="Bandera de Bélgica" style="margin-left: 10px; height: 50px; padding-top: 20px;">
                    </div> <br><br>' .
                        '<div style="display: flex; ">' .
                        "<br>Bienvenido $name <br> La cantidad de $$dinero MXN son: $" . bob($dinero) . ' BOB.' .
                        '<img src="recursos/img/bol_mon.png" alt="Bandera de Bolivia" style="margin-left: 10px; height: 50px; padding-top: 30px;"> <br>
                    </div> <br><br>' . 'Este país se encuentra en el continente Americano.';
                    break;
                case 'Dolar Beliceño':
                    echo '<div style="display: flex; ">
                    <h1>Belice - Dolar Beliceño</h1>
                    <img src="recursos/img/belice.png" alt="Bandera de Belice" style="margin-left: 10px; height: 50px; padding-top: 20px;">
                    </div> <br><br>' .
                        '<div style="display: flex; ">' .
                        "<br>Bienvenido $name <br> La cantidad de $$dinero MXN son: $" . bzd($dinero) . ' BZD.' .
                        '<img src="recursos/img/belice_mon.png" alt="Bandera de Bélice" style="margin-left: 10px; height: 50px; padding-top: 30px;"> <br>
                    </div> <br><br>' . 'Este país se encuentra en el continente Americano.';
                    break;
                case 'Euro':
                    echo '<div style="display: flex; ">
                    <h1>Bélgica - Euros </h1>
                    <img src="recursos/img/bel.jpg" alt="Bandera de Bélgica" style="margin-left: 10px; height: 50px; padding-top: 20px;">
                    </div> <br><br>' .
                        '<div style="display: flex; ">' .
                        "<br>Bienvenido $name <br> La cantidad de $$dinero MXN son: €" . eur($dinero) . ' EUR.' .
                        '<img src="recursos/img/euro.png" alt="Bandera de Bélgica" style="margin-left: 10px; height: 50px; padding-top: 30px;"> <br>
                    </div> <br><br>' . 'Este país se encuentra en el continente Europeo.';
                    break;
                default:
                    echo "<h1>Ingresa una opción válida</h1> <br><br>";
                    break;
            }
        } else {
            echo "<br><br><br><br><br><h1>Ingresa una opción</h1> <br><br><br><br>";
        }
        ?> <br><br><br>
        <form action="index.php">
            <button type="Submit" class="fancy" href="index.php">
                <span class="top-key"></span>
                <span class="text">Regresar</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
            </button>
        </form>

    </div>

</body>

</html>