<?php

class Database {

  // credenziali
  private $host = "localhost";
  private $db_name = "progetto_php_mysql";
  private $username = "root";
  private $password = "";
  public $conn;

  // connessione al database
  public function connectToDb() {
    $this->conn = null;
    try {
      $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
    }
    catch(PDOException $e){
      die ("Error : " . $e->getMessage());
    }
    return $this->conn;
  }
}


?>
