<?php 

/*Olá,
teste de comentário
*/
$anoNascimento = 2000;  //Data de nascimento do usuário
$nome = "Natália";      //Nome do usuário
$sobrenome = "Gama";
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
exit;
echo $nome;
echo"<br/>";
unset($nome); 			//limpeza da variável, é uma boa prática

if(isset($nome)){       //isset verifica se a variável foi definida
	echo $nome;
}
 ?>
