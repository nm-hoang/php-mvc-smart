<?php
  session_start();
  require_once("model/database.php");
  $_SESSION['cart'] = array();
  class Controller extends Database {
    public function viewAll() {
      $games = $this->getGameList();
      include 'view/gamelist.php';
    }

    public function viewGameById($id) {
       $game = $this->getGameDetail($id);
       $gameinfo = $game->fetch_assoc();
       if(isset($_POST['buy'])){
         $element = array("Title"=>$gameinfo['title'], "Price"=>$gameinfo['price']);
         array_push($_SESSION['cart'],$element);
         print_r($_SESSION['cart']);
        }
       include 'view/viewgame.php';
    }
    public function addgame(){
      include 'view/addgame.php';
    }


    //Admin management
    public function login(){
      if(isset($_POST['login'])){
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
    public function viewCart(){

      include 'view/viewcart.php';
    }
    
  }
?>