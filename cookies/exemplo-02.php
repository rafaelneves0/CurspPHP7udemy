<?php 
//trabalhando como array 
if(isset($_COOKIE["NOME_DO_COOKIE"])){

	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"],true);

	echo $obj["Empresa"];
}
 ?>
<br><br><br><br><br><br><br><br>
<?php 
//trabalhando como Objeto
if(isset($_COOKIE["NOME_DO_COOKIE"])){

	$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

	echo $obj->Empresa;
}


 ?>