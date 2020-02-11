<?php

require_once("config.php");

use Cliente\Cadastro; //usará a classe cadastro dentro da pasta Cliente

$cad = new Cadastro();
$cad->setNome("Naty");
$cad->setEmail("naty@naty.com");
$cad->setSenha("123");
echo $cad; //magicamente o tooString será invocado e retornara um array em JSON
$cad ->registrarVenda();
?>
