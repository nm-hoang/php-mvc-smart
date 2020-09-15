<?php
 // require_once("model/database.php");

  class Controller {
    public function viewAll() {
      echo "test";
     // $games = $this->getGameList();
      
      include 'view/gamelist.php';
    }

    // public function viewGameDetail() {
    //   $game = $this->getGameDetail($_GET['gamename']);
    //   include 'view/gameDetail.php';
    // }
  }
  echo "2"; 

?>