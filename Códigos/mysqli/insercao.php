<?php

$conn = new mysqli("localhost", "root" , "root", "dbphp7");
//IP, User, Password, Nome do Banco de Dados
//tratar erros de conexão
if($conn->connect_error){
  echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?,?)");
//preparar um comando para enviar para o banco de Dados
$stmt-> bind_param("ss", $login, $pass)//s de string, aceita como param um tipo de dado e os valores.
$login = "user";
$pass = "1234";
$stmt-> execute();
$login = "root";
$pass = "456";
$stmt->execute();

?>
