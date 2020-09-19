<?php 
    require_once('controller/controller.php');
    $controller = new Controller();
    if(isset($_GET['action'])){
        if($_GET['action'] == 'login'){
            $controller ->login();
        }
        else{
            $controller->logout();
        }
    }
?>