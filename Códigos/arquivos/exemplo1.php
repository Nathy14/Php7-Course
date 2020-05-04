<?php

$name = "images";

if(!is_dir($name)){ //verifica se este dir existe

  mkdir($name); //se não, cria um
  echo "Diretório criado com sucesso";
}

else{
  echo "O diretório já existe";
}

$images = scandir($name);

//função in_array(o que você procura, array)
//filesize retorna o tamanho do arquivo em bytes
//pathinfo retorna informações do arquivo
//filemtime retorna quando orquivo foi modificado

?>
