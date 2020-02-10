<?php  

class Pessoa{

	public $nome = "Naty";
	protected $idade = 48; //quem acessa? metodos da classe e quem herda desta classe.
	private $senha = "123456"; //quem acessa? Apenas metodos da classe.


	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}
}

class Programador extends Pessoa{
	//extende todos atributos e metodos de Pessoa menos o que é private.


}

$objeto = new Programador();
$objeto->verDados();

?>