<?php

class Trash{

  public $Trash_Type;
  public $Day;
  public $Start_Time;
  public $End_Time;
  private $conn;
  private $table_name = "trashcan";

  public function __construct($db){
    $this->conn = $db;
  }

  function read($pdo)
    {
    $query = "SELECT * FROM Trashcan";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
    }


}





 ?>
