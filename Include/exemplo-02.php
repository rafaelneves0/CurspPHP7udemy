<?php
//tenta funcionar mesmo que não exista;
include "inc/exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;

//não funciona se não existir
require "inc/exemplo-01.php";

$resultado2 = somar(10, 30);

echo $resultado2;

//evita que de erros
require_once "inc/exemplo-01.php";




?>