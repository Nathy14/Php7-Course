<?php

class Usuario{

    private $idusuario;
    private $login;
    private $senha;
    private $cadastro;

    public function getIdUsuario(){
      return $this->idusuario;
    }

    public function setIdUsuario($value){
      $this->idusuario = $value;
    }

    public function getLogin(){
      return $this->login;
    }

    public function setLogin($value){
      $this->login = $value;
    }

    public function getSenha(){
      return $this->senha;
    }

    public function setSenha($value){
      $this->senha = $value;
    }

    public function getCadastro(){
      return $this->cadastro;
    }

    public function setCadastro($value){
      $this->cadastro = $value;
    }

    public function loadById($id){
      $sql = new Sql();
      $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID" => $id));

      if(isset($result[0])){
        $row = $result[0];
        $this->setIdUsuario($row['idusuario']);
        $this->setLogin($row['login']);
        $this->setSenha($row['senha']);
        $this->setCadastro($row['cadastro']);
      }
    }

    public function __toString(){
      return json_encode(array(
        "idusuario" => $this->getIdUsuario(),
        "login" => $this->getLogin(),
        "senha" => $this->getSenha(),
        "cadastro" => $this->getCadastro()
      ));
    }

}

?>
