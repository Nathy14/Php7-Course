<?php

spl_autload_register(function($class_name)){
  $filname = $class_name . ".php";
  if(file_exists($filename)){
    require_once($filanema);
  }
});

 ?>
