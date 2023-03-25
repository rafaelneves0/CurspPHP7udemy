<?php

for($i = 0; $i < 10; $i++){
	Echo $i. "<br/>";
}


echo "<br/>";
echo "<br/>";
echo "------------------------------";
echo "<br/>";
echo "<br/>";

for($i = 0; $i < 100; $i+=5){
	Echo $i. "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "------------------------------";
echo "<br/>";
echo "<br/>";

for($i = 0; $i < 1000; $i+=5){
	if ($i === 900) break;
	if ($i >=65 && $i <=920) continue;

	Echo $i. "<br/>";
}



?>