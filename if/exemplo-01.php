<?php

$qualASuaIdade= 15;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;




if ($qualASuaIdade <= $idadeCrianca){
	echo "Criança";
} else if ($qualASuaIdade <= $idadeMaior) {
	echo "Jovem";
} else if ($qualASuaIdade <= $idadeMelhor) {
 echo "adulto";
} else {
	echo "idoso";
}


//

echo "<BR/>";

echo ($qualASuaIdade< $idadeMaior)?"Menor de idade":"Maior de idade";
?>