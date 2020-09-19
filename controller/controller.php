<?php
  session_start();
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
    public function addgame(){
      include 'view/addgame.php';
    }


    //Admin management
    public function login(){
      if(isset($_POST['login'])){
        echo $_POST['user'];
        $checkAdmin = $this->checkAdmin($_POST['user'], $_POST['pass']);
        if($checkAdmin == true){
          $_SESSION['userlogin'] = $_POST['user'];
        }
      }
      include 'view/login.php';
    }
    public function logout(){
      $adminStatus = false;
      if(isset($_SESSION['userlogin'])){
        if($_SESSION['userlogin']){
            $adminStatus = true;
        }
      }
      include 'view/logout.php';
    }

    
  }
?>