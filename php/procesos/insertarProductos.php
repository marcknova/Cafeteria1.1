
<?php
include_once '../BD/cone.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Datos = json_decode($_POST['Datos'],true);
    var_dump($Datos);
    $ins = $conexion->prepare("INSERT INTO inventario(NProducto, CantidadComprada, Precio, Total) VALUES (:NProducto, :CantidadComprada , :Precio, :Total)");

    $ins->bindParam(":NProducto", $Datos["Nombre"], PDO::PARAM_STR);
    $ins->bindParam(":CantidadComprada", $Datos["cantidad"], PDO::PARAM_INT);
    $ins->bindParam(":Precio", $Datos["Precio"], PDO::PARAM_INT);
    $ins->bindParam(":Total", $Datos["Total"], PDO::PARAM_INT);
    if($ins->execute()){
        header('location: ControlCarrito.php');
    }else{
        header('location: index..php');
    }

}
