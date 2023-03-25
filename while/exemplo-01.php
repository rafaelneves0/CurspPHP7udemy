<?php 

$condi = true;

while ($condi) {

	$numero = rand(1, 30);

		if($numero === 3){

		echo "TRES!||";
		$condi = false;

		}

	echo $numero." ";
}

 ?>