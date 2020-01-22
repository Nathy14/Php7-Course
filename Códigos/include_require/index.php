<?php 
//require "funcoes.php";
include "funcoes.php";
$resultado =  somar(10,20);
echo $resultado;

/*Diferença entre require e include?
--Require obrigada que o arquivo exista, e que esteja funcionando corretamente, caso o arquivo n exista, ele da um erro fatal.

--Include tenta funcionar mesmo se o arquivo não exista.

--NUNCA INCLUIR URL, É UMA MÁ PRÁTICA--

--utilizar require_once ou include_once para efetuar apenas uma chamada do arquivo e não apresentar erros--
*/
 ?>