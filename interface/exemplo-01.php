<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($Marcha);

}

class Civic Implements Veiculo {

	public function acelerar($velocidade){

		echo "acelerou até ".$velocidade." km/h ";

	}

	public function frenar($velocidade){

		echo "e depois frenou até ".$velocidade." km/h.";	
		
	}

	public function trocarMarcha($trocarMarcha){

		echo "O veiculo engatou a ".$trocarMarcha." marcha, ";
		
	}

}

$carro = new Civic();


$carro->trocarMarcha(1);
$carro -> acelerar (10);
$carro -> frenar (0);

 ?>