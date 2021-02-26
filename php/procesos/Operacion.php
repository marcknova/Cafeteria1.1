<?php

include_once "SetsGets.php";
$obj = new bean();

class Operacion
{

    public function Operaciones()
    {
        switch ($obj->getOperador()) {
            case '1':
                $result = $obj->getCantidad() * 20;
                return $result;
                break;
            case '2':
                $result = $obj->getCantidad() * 10;
                return $result;
                break;
            case '3':
                $result = $obj->getCantidad() * 80;
                return $result;
                break;
            case '4':
                $result = $obj->getCantidad() * 60;
                return $result;
                break;
            default:
                break;
        }
    }
    
}
