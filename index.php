<?php
require_once("controller/controller.php");
  $controller = new Controller();
  if(isset($_GET['id'])){
    $controller ->viewGameById($_GET['id']);
  
  }else if (isset($_GET['action'])== "signup"){
    $controller-> signup();
  }
  else{
    $controller->viewAll();
  }


?>