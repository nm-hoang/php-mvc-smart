<?php
session_start();
require_once("controller/controller.php");
  $controller = new Controller();
  if(isset($_GET['id'])){
    $controller ->viewGameById($_GET['id']);
  
  }else if (isset($_GET['action']) == "addgame"){
    $controller-> addgame();
  }
  else{
    $controller->viewAll();
  }


?>