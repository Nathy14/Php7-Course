<?php

namespace Cliente; //será utilizado no index.php para chamar esta classe

class Cadastro extends \Cadastro {
  public function registrarVenda(){
    echo "Foi registrada uma venda para o cliente" . $this->getNome();
  }
}


 ?>
