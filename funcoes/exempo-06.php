<?php 

$pessoa = array('nome' => "Rafael",
		'idade'=>20 );

foreach ($pessoa as $value) {

	if(gettype($value)==='integer') $value +=10;
	echo $value."<br>";
	}

    echo "<br>";
	print_r($pessoa);
	echo "<br>";
	echo "<br>";
	echo "-------------------------------------";
	echo "<br>";
	echo "<br>";

foreach ($pessoa as &$value) {

	if(gettype($value)==='integer') $value +=10;
	echo $value."<br>";
	}

    echo "<br>";
	print_r($pessoa);
	echo "<br>";

 ?>