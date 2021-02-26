<?php
class bean{

	private $sCantidad="";
	
	
	function setCantidad($valor){
		$this->sCantidad = $valor;
	}
	function getCantidad(){
		return $this->sCantidad;
	}
	

	
	function __construct($sCant){
		$this->sCantidad = $sCant;
		
	}
}
?>