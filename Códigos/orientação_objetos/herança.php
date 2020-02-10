<?php  

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}
}

class CPF extends Documento{

	public function validar():bool{
		$numeroCPF = $this->getNumero();
		//validação do CPF
		return true; 
	}
}

$doc = new CPF();
$doc = setNumero("112223344-66");
$doc->validação();
?>