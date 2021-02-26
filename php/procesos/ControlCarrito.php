<?php

include_once("SetsGets.php");
$opcion = $_POST['Opcion'];
$cantidad = $_POST['cantidad'];
// $opcion2 = $_POST['Opcion2'];
// $cantidad2 = $_POST['cantidad2'];
$objOperacion = new bean();

$objOperacion->setCantidad($cantidad);
$objOperacion->setOperador($opcion);
// $objOperacion->setCantidad2($cantidad2);
// $objOperacion->setOperador2($opcion2);
//$objOperacion->Operaciones();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ba47731c0d.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="colornavC">
            <div class="contenedor">
                <div class="barra">
                    <p>LOGO</p>
                    <nav>
                        <a href="../index.html">Inicio</a>
                        
                        <a href="../productos.html">Productos</a>
                        <a href=""><i class="fas fa-cart-arrow-down"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="contenedor">
            <div class="factura">
                <h2>Factura</h2>
                <?php
                echo ($objOperacion->Operaciones()) ;
                ?>
            </div>
        </div>
    </section>
</body>

</html>