<?php 

try{
$conexion = new PDO('mysql:host=localhost;dbname=example', 'root', '');
$conexion->exec('set names utf8');
}catch(Exception $e){
    echo 'error en la conexion';
}