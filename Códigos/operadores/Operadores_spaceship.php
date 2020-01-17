<?php 

$a = 50;
$b = 35;
$c = NULL;
$d = NULL;
var_dump($a<=>$b); //se o a for maior retorna 1, se forem igual retorna 0 e se b for maior retorna -1, se chama spaceship

var_dump($a===b); //verifica se são do mesmo tipo

echo $c ?? $d ?? $a; //se c for Nulo, imprima d, se d for nulo imprima a, portanto neste caso imprime a

 ?>