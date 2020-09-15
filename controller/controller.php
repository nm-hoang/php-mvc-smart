<?php
  require_once("model/database.php");

  class Controller extends Database {
    public function viewAll() {
      $games = $this->getGameList();
      include 'view/gamelist.php';
    }

    public function viewGameById($id) {
       $game = $this->getGameDetail($id);
       include 'view/viewgame.php';
    }
    public function login(){
      include 'view/login.php';
    }
    public function signup(){
      include 'view/signup.php';
    }
  }
?>