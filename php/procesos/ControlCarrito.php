<?php

include_once("SetsGets.php");
$opcion = $_POST['Opcion'];
$cantidad = $_POST['cantidad'];
$objOperacion = new bean();

$objOperacion->setCantidad($cantidad);
$objOperacion->setOperador($opcion);
//$objOperacion->Operaciones();
var_dump($objOperacion->Operaciones()) ;

?>