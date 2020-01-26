<?php

require_once("config.php");

echo session_id();

session_regenerate_id(); //gera novamente um id de sessão

//https esconde o ID de sessão
?>