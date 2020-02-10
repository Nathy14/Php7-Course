<?php  

interface Veiculo{

	public function acelarar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}

//qualquer Automovel implementa a interface Veiculo, só que, ninguém pode apenas instanciar um Automovel, é necessario informar que tipo de Automovel ele será.
abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){
		echo "O veiculo acelerou até" . $velocidade . " km/h";
	}
	public function freiar($velocidade){
		echo "O veiculo freiou até" . $velocidade . " km/h";
	}

	public function trocarMarcha($marcha){
		echo "O veiculo engatou a marcha" . $marcha;
	}
	
}

class DelRey extends Automovel{
	public function empurrar(){
		echo "O carro quebrou bora empurrar";
	}
}

$carro =  new DelRey();
$carro->acelerar(200);
?>