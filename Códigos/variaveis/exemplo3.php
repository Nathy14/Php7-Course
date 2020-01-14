<?php
/*
* Tipos simples *
*/
$nome = "nat";
$site = "natgama.com.br";
$ano = 2000;
$salario = 2000;
$bloquei = false;
/*
* Tipos compostos *
*/
$frutas = array("abacaxi","laranja","manga");
echo $frutas[2]; //imprime o valor manga

$nascimento =  new DateTime(); 
var_dump($nascimento);   
/*
* Tipos especiais *
*/
$arquivo = fopen("exemplo3.php","r");
var_dump($arquivo);

$nulo = NULL;
$vazio = "";
?>