<?php 

class Pessoa{

	public $nome; //atributo

	public function falar(){ // Metodo

		return "Meu nome é: ".$this->nome;

	}

}

$rafael = new pessoa();
$rafael->nome = "Rafael Allan";
echo $rafael->falar();



 ?>