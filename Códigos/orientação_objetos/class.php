<?php 

class Pessoa{

	public $nome;

	public function falar(){

		return "O meu nome é ". $this->nome;
	}
}

$natalia = new Pessoa();
$natalia-> nome = "Natália Mattos";
echo $natalia->falar();

 ?>