<?php


class bean
{

    public $sCantidad;
    public $opcion;
    public $error;
    public $usuario;
    public $contraseña;
    
    public function setUsuario($valor){
        $this->usuario = $valor;
    }
    public function getUsuario(){
        $this->usuario;
    }
    public function setContraseña($valor){
        $this->contraseña = $valor;
    }
    public function getContraseña(){
        $this->contraseña;
    }
    public function setCantidad($valor)
    {
        $this->sCantidad = $valor;
    }
    public function getCantidad()
    {
        return $this->sCantidad;
    }
    public function setOperador($valor)
    {
        $this->opcion = $valor;
    }
    public function getOperador()
    {
        return $this->opcion;
    }
    public function setError($valor)
    {
        $this->error = $valor;
    }
    public function getError()
    {
        return $this->error;
    }
    
    // public function setCantidad2($valor)
    // {
    //     $this->sCantidad2 = $valor;
    // }
    // public function getCantidad2()
    // {
    //     return $this->sCantidad2;
    // }
    // public function setOperador2($valor)
    // {
    //     $this->opcion2 = $valor;
    // }
    // public function getOperador2()
    // {
    //     return $this->opcion2;
    // }
/*
public function sesion(){
    if (!empty($nombre) && !empty($contraseña)) {

        if ($nombre == $objOperacion->getUsuario($nombre) && $contraseña == $objOperacion->getContraseña($contraseña)) {
    
            header('Location: ../../index.html');
        }
    } else {
        header('Location: ../sesion.html');
    }
}*/
    public function Nombre()
    {
        switch ($this->opcion) {
            case '1':
                $N = "Café Latte";
                $result = $N;
                return $result;
                break;
            case '2':
                $N = "Chocolate Caliente";
                $result = $N;
                return $result;
                break;
            case '3':
                $N = "Vanilla Latte";
                $result = $N;
                return $result;
                break;
            case '4':
                $N = "Helado Café Mocha";
                $result = $N;
                return $result;
                break;
            default:
                break;
        }
    }

    public function Operaciones()
    {
        switch ($this->opcion) {
            case '1':
                $result = $this->getCantidad() * 20;
                return $result;
                break;
            case '2':
                $result = $this->getCantidad() * 10;
                return $result;
                break;
            case '3':
                $result = $this->getCantidad() * 80;
                return $result;
                break;
            case '4':
                $result = $this->getCantidad()* 60;
                return $result;
                break;
            default:
                break;
        }
    }
    /*
public function Cantidad()
    {
        switch ($this->opcion) {
            case '1':
                $result = $this->sCantidad;
                return $result;
                break;
            case '2':
                $result = $this->sCantidad;
                return $result;
                break;
            case '3':
                $result = $this->sCantidad;
                return $result;
                break;
            case '4':
                $result = $this->sCantidad;
                return $result;
                break;
            default:
                break;
        }
    }
*/
    public function Precio()
    {
        switch ($this->opcion) {
            case '1':
                $result = 20;
                return $result;
                break;
            case '2':
                $result = 10;
                return $result;
                break;
            case '3':
                $result = 80;
                return $result;
                break;
            case '4':
                $result = 60;
                return $result;
                break;
            default:
                break;
        }
    }    
         
           

    // public function Operaciones2 () {
    //     switch ($this->opcion22) {
    //         case '1':
    //             $result2 = $this->sCantidad2 * 40;
    //             return  $result2;
    //             break;
    //         case '2':
    //              $result2 = $this->sCantidad2 * 50;
    //             return  $result2;
    //             break;
    //         case '3':
    //              $result2 = $this->sCantidad2 * 90;
    //             return  $result2;
    //             break;
    //         case '4':
    //              $result2 = $this->sCantidad2 * 70;
    //             return  $result2;
    //             break;
    //         default:
    //             break;
    //     }
    // }

    // public function suma ($a , $b) {

    //     return $suma = $a + $b;
    // }
    /*
public function impresion(){
return $this->$result;
}*/
}
/*
public function __construct($sCantidad,$opcion){
    $this->$sCantidad=$sCantidad;
    $this->$opcion=$opcion;

}
*/


?>