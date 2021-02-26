<?php
class bean
{

    public $sCantidad;
    public $opcion;
    
	

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

	public function Operaciones()
    {
        switch ($this->opcion) {
            case '1':
                $result = $this->sCantidad * 20;
                return  $result;
                break;
            case '2':
                 $result = $this->sCantidad * 10;
                return  $result;
                break;
            case '3':
                 $result = $this->sCantidad * 80;
                return  $result;
                break;
            case '4':
                 $result = $this->sCantidad * 60;
                return  $result;
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
