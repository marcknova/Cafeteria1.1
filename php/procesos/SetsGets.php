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

	public function Operaciones()
    {
        switch ($this->opcion) {
            case '1':
                $result = getCantidad() * 20;
                return  $result;
                break;
            case '2':
                 $result = getCantidad()* 10;
                return  $result;
                break;
            case '3':
                 $result = getCantidad() * 80;
                return  $result;
                break;
            case '4':
                 $result =getCantidad()* 60;
                return  $result;
                break;
            default:
                break;
        }
    }
	
	/*
	public function impresion(){
		return $this->$result;
	}*/
}
