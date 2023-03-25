<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin=:LOGIN, dessenha=:PASSORD WHERE idusuario = :ID;");

$login = "joao";
$passord = "qwerty";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSORD", $passord);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "alterado OK";

 ?>