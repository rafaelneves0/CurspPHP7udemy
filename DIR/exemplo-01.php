<?php 

$name = "images";

if(!is_dir($name)){

	mkdir($name);

	echo $name." Criado com sucesso!";

}

else{

	rmdir($name);
	echo "Ja existe o Diretorio: ".$name;
	echo "<br/>";
	echo "Diretorio ".$name."Removido";
}


 ?>