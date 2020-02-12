<?php

$conn = new PDO("mysql:dbname = dbphp7;host = localhost", "root","root");

$stmt = $conn->prepare(SELECT * FROM tb_usuarios ORDER BY deslogin);
$stmt->execute();
//FETCH_ASSOC não traz o indice
$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //fatia todas as linhas

foreach ($results as $row) {
  foreach ($row as $key=> $value ) {
    echo "<strong>" . $key . "</strong>" . $value ."<br/>";
  }
  echo "=========================================<br/>";
}

var_dump($result)

?>
