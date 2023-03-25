<?php


$resultado = 10 + 3 / 2;

echo $resultado;

echo "<br/>";
echo "<br/>";

$resultado = (10 + 3) / 2;

echo $resultado;

echo "<br/>";
echo "<br/>";

$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;

var_dump($resultado);

echo "<br/>";
echo "<br/>";

$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 20;

var_dump($resultado);

echo "<br/>";
echo "<br/>";

$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado);


echo "<br/>";
echo "<br/>";

$resultado = (10 + 3) / 2 > 55 || 10 + 5 < 2;

var_dump($resultado);

?>