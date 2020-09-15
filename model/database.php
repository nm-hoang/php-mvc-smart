<?php

class Database {
  protected $conn;

  function __construct() {
    echo "a";

    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "gamelist";

    echo "b"; 
    $this->conn = new mysqli($servername, $username, $password, $dbname);

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

  // protected function getGameDetail($name) {
  //   $sql = "
  //     SELECT Name, Picture, Producer, Price, Description, Quantity 
  //     FROM games 
  //     WHERE Name = '{$name}'";
  //   $game = $this->conn->query($sql);
  //   return $game;
  // }
}

?>