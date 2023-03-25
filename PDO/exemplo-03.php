<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUE (:LOGIN,:PASSORD);");

$login = "jose";
$passord = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSORD", $passord);

$stmt->execute();

echo "OK";

 ?>