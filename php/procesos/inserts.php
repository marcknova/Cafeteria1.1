<?php

require_once ("../autoload/autoload.php");
class Inventario extends conexion
{
    private $NProducto;
    private $Cantidad;
    private $Precio;
    private $Total;
    private $conexion;
    public function __construct()
    {
        $this->conexion = new conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function InsertInventario(String $NProducto, int $Cantidad, float $Precio, float $Total)
    {
        $this->$NProducto = $NProducto;
        $this->$Cantidad = $Cantidad;
        $this->$Precio = $Precio;
        $this->$Total = $Total;
        $insert = $this->conexion->prepare(("INSERT INTO inventario(NProducto, CantidadComprada, Precio.Total) VALUES(?,?,?,?)"));
        $insert->bindParam('?',$this->$NProducto,PDO::PARAM_STR, 25);
        $insert->bindParam('?',$this->$Cantidad,PDO::PARAM_STR, 25);
        $insert->bindParam('?',$this->$Precio,PDO::PARAM_STR, 25);
        $insert->bindParam('?',$this->$Total,PDO::PARAM_STR, 25);
        $Ninsert = $insert->execute();
        $idinsert= $this->conexion->lastInsertId();
        return $idinsert;
    }

}
