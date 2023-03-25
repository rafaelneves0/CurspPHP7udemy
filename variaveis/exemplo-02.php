<?php


$anoNascimento = 1990;



//variavel com numero no nome
$nome1= "Rafael";
$sobrenome= "Neves";
// o ponto entre as variaves concatena
$nomeCompleto = $nome1 . " " . $sobrenome;

/* variavel com _*/
$_nome="Joao";

echo $nomeCompleto;

echo "<br/>";

//limpa a variavel
//unset($nome1);

if(isset($nome1)){

	echo $nome1;

}else{
	echo "Esta sem nome";
}



?>