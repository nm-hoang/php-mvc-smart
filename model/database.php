<?php
require_once('config.php');
class Database extends InfoServer{
  protected $conn ;
  protected $server;
  function __construct() {

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "gamelist";
    $server = $this -> servername . "/".$this-> dbname;
    $this->conn = new mysqli($this -> servername, $this ->username, $this ->password, $this ->dbname);

    if ($this->conn->connect_error) {
      die ("Connection failed: " . $this->conn->connect_error);
    }
  }

  function __destruct() {
    $this->conn->close();
  }

  protected function getGameList() {
    $sql = "SELECT * FROM game";
    $games = $this->conn->query($sql);
    return $games;
  }

  protected function getGameDetail($id) {
    // echo $id;
    $sql = " SELECT * FROM game WHERE id = '{$id}'";
    $game = $this->conn->query($sql);
    return $game;
  
    // $stmt = $this->conn -> prepare("SELECT * FROM game WHERE `id` = ? ");
    // $stmt -> execute($id);
    // return $stmt;
  }
}

?>