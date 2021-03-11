<?php
  include_once "../BD/conexion.php";

$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];
if (!empty($nombre) && !empty($contraseña)) {
    if ($nombre == 'RIAS' && $contraseña == '123456') {
        header('Location: ../../index.html');
    }else{
        header('Location: ../sesion.html');
    }
}else {
    header('Location: ../sesion.html');
}

$objeConexion = new Conexion();
$bd = $objeConexion->connect();
//          $sql = "INSERT INTO logi(id_Usuario, Usuario, email, contraseña) VALUES(?,?,?,?)";          
//          $result = $bd->prepare($sql);
//          $result->execute(['48','marco','marck.nova@gmail.com','hola1234']); 

$sql = "SELECT * FROM logi ORDER BY id_Usuario ASC";
$result1 = $bd->query($sql);
foreach($result1 as $data){
   echo $data['id_Usuario'];
   echo $data['Usuario'];
   echo $data['email'];
   echo $data['contraseña'];
}