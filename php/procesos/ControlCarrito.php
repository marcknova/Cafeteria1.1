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
          title: 'AGREGUE UNA CANTIDAD A COMPRAR',
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
                        <a href="../index.html">Inicio</a>

                        <a href="../productos.html">Productos</a>
                        <a href=""><i class="fas fa-cart-arrow-down"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fact">
        <div class="factura">
            <h1>Coffe: Xpress</h1>
            <div class="gridFactura">
                <div class="barcode">
                    <div class="img">

                        <img src="img/como-preparar-cafe-colombiano-758887.jpg">

                    </div>
                </div>
                <div class="vendedor">
                    <div class="data">
                        <div>Vendedor</div>
                        <div>T.T</div>
                        <div>EmpCent</div>
                        <div>Operac</div>
                        <div>Fecha</div>
                        <div>Hora</div>
                        <div>EdPizn</div>
                        <div>T</div>
                    </div>
                    <div class="SeparadorIV"></div>
                    <div class="data">
                        <div>64008592</div>
                        <div>3</div>
                        <div>001014</div>
                        <div>752772</div>
                        <div>28/02/21</div>
                        <div>11:53</div>
                        <div>0106002</div>
                        <div>00</div>
                    </div>
                </div>
                <div class="codecontrol">
                    <p><b>Morning</b></p>
                    <p>Codigo de control : 9015D8F1C2</p>
                </div>
            </div>
            <div class="description">
                <div><i>Description</i></div>
                <div class="two"><i>Cantidad</i></div>
                <div class="three"><i>Importe</i></div>
            </div>
            <div class="SeparadorIV">
            </div>

            <div class="cantidadProd">
                <div><?php
echo ($objOperacion->Nombre());
?>
                </div>
                <div class="two">
                    <?php
echo ($objOperacion->Cantidad());
?>
                </div>
                <div class="three">
                    <p>$20.00</p>
                </div>
                <br>
            </div>
            <div>
                <p>Dpto:0091 Ref :091801043</p>
            </div>
            <div class="total">
                <div>
                    <h3>Total :</h3>
                </div>

                <div class="tot">
                    <?php
echo ($objOperacion->Operaciones());
?>
                </div>
            </div>
        </div>

        <div class="btns">
            <a href="../../index.html" class="btn-color btn">Regresar</a>
        </div>
        <script src="js/sweetalert2.js"></script>
</body>

</html>