<?php

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
