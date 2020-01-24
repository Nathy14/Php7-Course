<?php  

for ($i=0; $i < 1000 ; $i+=5) { 

	if($i>200 && $i<800) continue; //nao ira printar este intervalo
	if($i==900) break; //sai do laço
	echo $i . "<br>"
}

?>