<?php

$conn = new PDO("mysql:dbname = dbphp7; host = localhost","root","root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(:LOGIN, :PASSWORD)");
$login = "naty";
$password = "123";
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->execute();
echo "Inserção OK!";
?>
