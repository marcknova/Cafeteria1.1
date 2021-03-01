<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/ba47731c0d.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<?php

include_once "SetsGets.php";

$opcion = $_POST['Opcion'];
$cantidad = $_POST['cantidad'];
$objOperacion = new bean();
if (isset($_POST['cantidad'])) {
    if (empty($cantidad)) {
           echo "<script>
      Swal.fire({
          icon: 'error',
          title: 'AGREGUE UNA CANTIDA
          D A COMPRAR',
          text: 'Por favor!',
        })
      </script>";

        header('Location: ../../index.html');
        }else
          if (!is_numeric($cantidad)) {
            echo "<script>
Swal.fire({
  icon: 'error',
  title: 'Al parecer no es un numero',
  text: 'agregue una cantidad valida!',
  footer: '<a href>Why do I have this issue?</a>'
})
</script>";
            header('Location: ../../index.html');
    } else {
        // $opcion2 = $_POST['Opcion2'];
        // $cantidad2 = $_POST['cantidad2'];

        $objOperacion->setCantidad($cantidad);
        $objOperacion->setOperador($opcion);
// $objOperacion->setCantidad2($cantidad2);
        // $objOperacion->setOperador2($opcion2);
        //$objOperacion->Operaciones();
        echo "<script>
        Swal.fire(
          'Good job!',
          'Ordenado!',
          'success'
        )
        </script>";
    }
}
?>
<body>
    <header>
        <div class="colornavC">
            <div class="contenedor">
                <div class="barra">
                    <p>LOGO</p>
                    <nav>
                        <a href="../../index.html">Inicio</a>

                        <a href="../productos.html">Productos</a>
                        <a href=""><i class="fas fa-cart-arrow-down"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

  <div class="container-factura">
    <div class="cabecera">
        <h1>Coffe: Xpress</h1>
        <div class="iconCheck">
          <i class="far fa-eye"></i>
        </div>
      </div>
<div class="flex">
    <div class="containerleft">
      <div class="columna1">
          <h3><?php
          echo ($objOperacion->Nombre());
          ?></h3>
          <h6>TIPO : CAFE</h6>
      </div>
      <div class="columna2">
        <h2>Dpto: 21546008</h2>
      </div>
      <div class="columna3">
          <span>Cantidad: <b><?php
          echo ($objOperacion->Cantidad());
          ?></b> </span>
          <span class="space">Precio: <b>$20.00</b></span>
      </div>
      
    </div>

      <div class="containerright">
          <div class="number">
          <h3>156</h3>
          <h4>SEAT</h4>
          </div>
          <div class="barcode">
            <i class="fas fa-barcode"></i>
          </div>
      </div>

</div>  

    </div>
 
        <div class="btns">
            <a href="../../index.html" class="btn-color btn">Regresar</a>
        </div>


        <script src="js/sweetalert2.js"></script>
</body>

</html>

