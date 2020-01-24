<?php 


$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto",
"Setembro", "Outubro", "Novembro", "Dezembro");

foreach ($meses as $index => $mes) {

	echo "Indice " . $index . "<br>";
	echo "O mês é:  " . $mes . "<br>";
}

?>


 <!-- Teste com HTML-->
 <form>
 	
 <input type="text" name="nome">
 <input type="date" name="nascimento">
 <input type="submit" name="OK">
 </form>
  <?php

if (isset($_GET)){

	foreach ($_GET as $key => $value) { //key é o name dos campos do input, e o que o usuário digitar nestes campos é o value
 		echo "Nome do campo: " . $key . "<br>";
 		echo "Valor do campo: " . $value;
 		echo "<br>";
 	}
}

?>