<?php

require_once("config.php");

$_SESSION["nome"] = "Naty";

echo $_SESSION["nome"];

session_unset(); //apaga todas variaveis de sessao
session_destroy(); //limpa as variaveis e remove o usuário
?>