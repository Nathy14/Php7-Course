<?php 

$nome = "Gabriel";

function teste(){
	global $nome;
	echo $nome;
}

function teste2(){
	$nome = "Naty";
	echo $nome. "agora teste2";
}

teste(); //printa Gabriel

teste2(); //printa Naty
 ?>


