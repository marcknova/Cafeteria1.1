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
$objOperacion = new bean();
if (isset($_POST['cantidad'])) {
    if (empty($cantidad)) {
        header('Location: ../../index.html');
        }else
          if (!is_numeric($cantidad)) {
            header('Location: ../../index.html');
    } else {
        $objOperacion->setCantidad($cantidad);
        $objOperacion->setOperador($opcion);
      
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
                       
                    </nav>
                </div>
            </div>
        </div>
    </header>

  <div class="container-factura">
    <div class="cabeceras">
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
        <h2>Precio : <?php
          echo ($objOperacion->Precio());
          ?></h2>
      </div>
      <div class="columna3">
          <span>Cantidad: <b><?php
          echo ($objOperacion->getCantidad());
          ?></b> </span>
          <span class="space">Total a pagar: <b><?php
          echo ($objOperacion->Operaciones());
          ?></b></span>
      </div>
      
    </div>

      <div class="containerright">
          <div class="number">
          <h3><?php 
         echo ($objOperacion->Operaciones())
        ?></h3>
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

