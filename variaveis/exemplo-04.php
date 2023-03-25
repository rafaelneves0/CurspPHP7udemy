<?php


$nome = (int)$_GET["a"];

var_dump($nome);

/*
localhost/variaveis/exemplo-04.php?a=123&b=456

Ira retornar no var_dump
*/
echo "<br/>";echo "<br/>";
//pega o IP do usuario que esta acessando o sistema
$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

//entr os [] o comando precisa ser em capslook 
echo "<br/>";echo "<br/>";

$ip2 = $_SERVER["SCRIPT_NAME"];

echo $ip2;



?>