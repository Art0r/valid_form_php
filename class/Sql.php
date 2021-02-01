<?php
  define("DB_DRIVER", "mysql");
  define("DB_SCHEMA", "dbphp");
  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "");

  class Sql {
    private $conn;
    
    public function __construct()
    {
        $this->conn = new PDO(DB_DRIVER . ":dbname=" 
        . DB_SCHEMA . ";host=" 
        . DB_HOST , DB_USER  , DB_PASSWORD);    
    }

    public function query($rawQuery, $params){
        $stmt = $this->conn->prepare($rawQuery);

        $stmt->execute($params);


        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $results;

    }
  }

?>