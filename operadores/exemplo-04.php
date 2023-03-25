<?php


/*

> Maior
< Menor
==  Igual
!= Diferente
=== Igual na tipagem
!== Diferente na Tipagem
>= Maior Igual
<= Menor igual

*/



$a = 30;
$b = 55;
$c = 55.0;

echo "1: ";
var_dump($a > $b);
echo "</br>";
echo "</br>";

echo "2: ";
var_dump($b > $a);
echo "</br>";
echo "</br>";


echo "3: ";
var_dump($c == $b);
echo "</br>";
echo "</br>";

echo "4: ";
var_dump($c === $b);
echo "</br>";
echo "</br>";

echo "5: ";
var_dump($a != $b);
echo "</br>";
echo "</br>";

echo "6: ";
var_dump($c != $b);
echo "</br>";
echo "</br>";

echo "7: ";
var_dump($c !== $b);
echo "</br>";
echo "</br>";




?>