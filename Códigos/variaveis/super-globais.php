<?php 
//Variáveis super-globais
/*
URL.php?user=123&b=user2
Toda informação vinda de get e post é string, é necessário converter se precisar.

URL = Uniform Resource Locator
URI = Uniform Resource Identifier,parte de uma URL, exeplo http, https.

Protocolo+dominio+patch(caminho do site)+querry string(parâmetros)
*/
$nome = (int)$_GET["user"]; //get possui todas as varáveis 
var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //IP do usuário(ambiente)
$nome_arquivo = $_SERVER["SCRIPT_NAME"]; //nome do arquivo

 ?>

