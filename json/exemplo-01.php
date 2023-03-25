<?php 

//utilizar o ctrl + U no navegador.

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Rafael',
	'idade'=>'29'
));

array_push($pessoas, array(
	'nome'=>'Allan',
	'idade'=>'19'
));

echo json_encode($pessoas);


 ?>