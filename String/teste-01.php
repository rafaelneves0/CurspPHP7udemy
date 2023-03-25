<?php
 
$nome = 'Hcode Treinamentos';
 
$replace = 'Cursos';
 /*
 $newnome = substr($nome, strpos($nome, 'T')) . $replace;
 echo $newnome;

echo "<br/>";
echo "<br/>";

 $newnome2 = substr($nome, 0,'T') . $replace;
 echo $newnome2;

echo "<br/>";
echo "<br/>";
*/
 $newnome3 = substr($nome, 0,strpos($nome, 'T')) . $replace;
 echo $newnome3;
 
?>