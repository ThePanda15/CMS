<?php
//Incluimos el archivo config.php ubicado en la carpeta setting, este se encontrara nuestra conexion a la base de datos
require_once('config.php');


class MySql{
  
    private $conn;
    //Realiza la conexión con la base de datos.
    public function connect(){
      try {
        $this->conn = new PDO("mysql:host=".Config::SERVERNAME.";dbname=".Config::DATABASE, Config::USERNAME, Config::PASSWORD);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return true;
      }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        return false;
      }  
    }
    
    //Realiza INSERT, UPDATE y DELETE en el CMS.
    public function execute($sql){
      try{
        if($this->connect()){
          return $this->conn->exec($sql);
        }else{
          return false;
        } 
      }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
      } 
    }
    
    //Realiza consultas a las tablas de la base de datos.
    public function search($sql){
        
        try{
          if($this->connect()){
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
          }else{
            return array();
          }

        }catch(PDOEXception $e){
          echo $sql ."<br />". $e->getMessage();
          return false;
        }
    }
    
    //Finaliza la conexión con la base de datos.
    public function close(){
        $this->conn = null;
    }   
}
?>