<?php 

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost", "rneves", "@vEMpxjLV2");


$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll();

foreach ($results as $row) {

	foreach ($row as $key => $value) {

		echo "<strong>".$key."</strong>".$value."<br/>";
	}

	echo "=============================================<br/>";	
}

//var_dump($results);

 ?>