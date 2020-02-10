<?php  
//serve para integração de API's, trabalho em grupo com seus colegas de trabalho.
interface Veiculo{

	public function acelarar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}


class Civic implements Veiculo{

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

$carro = new Civic();
$carro -> trocarMarcha(1);
?>