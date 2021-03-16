     <?php
include_once "SetsGets.php";
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];

$objOperacion = new bean();

if (!empty($nombre) && !empty($contraseña)) {
    $objOperacion->setUsuario($nombre);
    $objOperacion->setContraseña($contraseña);
    header('Location: ../sesion.html');

}else{
    header('Location: ../registro.html');
}
?>