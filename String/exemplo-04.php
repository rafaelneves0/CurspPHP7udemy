<?php

$frase =  "A repetição é a mãe da repetição";

$palavra = "mãe";

$q = strpos($frase, $palavra);

var_dump($q);

echo "<br/>";
echo "<br/>";

$texto = substr($frase, 0, $q);

echo "<br/>";
echo "<br/>";
echo $texto;
echo "<br/>";
var_dump($texto);


$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br/>";
echo "<br/>";
echo $texto2;
echo "<br/>";
var_dump($texto2);
?>