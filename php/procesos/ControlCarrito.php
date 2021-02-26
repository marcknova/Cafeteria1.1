<?php

include_once("Operacion.php");

$objOperacion = new Operacion();

$cantidad = $_POST['cantidad'];

$objOperacion = $objOperacion ->Precio($cantidad);

var_dump ($objOperacion);

?>