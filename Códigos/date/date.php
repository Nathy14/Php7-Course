<?php

$dt = new DateTime();
$periodo =  new DateInterval("P15D");
//somar 15 dias no dia atual
$dt->add($periodo);
echo $dt->format("d/m/Y H:i:s");


?>