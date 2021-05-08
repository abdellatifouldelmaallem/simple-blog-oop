<?php

class data{

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "blog";
    protected $conn;

    public function __construct()
   {

       try {
        $dsn = "mysql:host=$this->host".";dbname=$this->database";
        $this->conn = new PDO($dsn, $this->user, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
       } catch (PDOException $e) {
           echo "connection failed:". $e->getMessage();
       }
    }
}
?>