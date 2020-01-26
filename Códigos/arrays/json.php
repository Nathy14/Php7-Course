<?php

//serve para transferir dados para outros sistemas em outras linguagens.

//transformar um array em JSON e tranformar um JSON em um array.


$pessoas = array();

array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Jon',
	'idade' => 25
));

print_r($pessoas);

echo json_encode($pessoas); //transforma o array em JSON
$json = '[{"nome": "João", "idade": 20},{"nome:Jon", "idade":25}]';
$data = json_decode($json, true); //usar true como parametro para virar um array, transformando JSON em um array.
var_dump($data);
?>