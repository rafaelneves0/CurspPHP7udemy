<?php 

//utilizar o ctrl + U no navegador.

$json = '[{"nome":"Rafael","idade":"29"},{"nome":"Allan","idade":"19"}]';
$data = json_decode($json, true);
var_dump($data);
 ?>




