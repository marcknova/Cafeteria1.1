<?php

include_once("Operacio.php");
$objOperacion = new Operacion();

$cantidad = $_POST['cantidad'];

$objOperacion = $objOperacion ->Precio($Cantidad);

var_dump ($objOperacion);

?>