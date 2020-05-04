<?php
//estudo de DAO
  class Sql extends PDO{
      private $conn;

      public function __construct(){
        $this->conn =  new PDO("mysql: host=localhost;dbname=dbphp7", "root", "root");
      }

      public function query($raqQuery, $params = array()){
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
      }

      private function setParams($statment, $parameters =  array()){
        foreach ($parameters as $key => $value) {
          $this->setParam($statment,$key, $value);
        }
      }

      private function setParam($statment, $key, $value){
        $statment->bindParam($key, $value);
      }

      public function select($rawQuery, $params=array())::array{
        $stmt = $this->query($raqQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }

  }

?>
