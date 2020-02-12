<?php

$conn = new PDO("sqlsrv:Database = dbphp7;server = localhost\SQLEXPRESS;ConnectionPooling = 0", "sa","root");
//Connection Pooling é necessário no SQL Server, serve para executar o comando e encerrar conexão com o banco de dados.
$stmt = $conn->prepare(SELECT * FROM tb_usuarios ORDER BY deslogin);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 echo json_encode($results);
?>
