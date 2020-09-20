<?php
    require_once('controller/controller.php');
    $controller = new Controller();
    if(isset($_GET['action'])){
        if($_GET['action'] == 'login'){
            $controller ->login();
        }else if($_GET['action']=='card'){
            $controller -> viewCart();
        }else if($_GET['action']=='addgame'){
            $controller -> addgame();
        }
        else{
            $controller->logout();
        }
    }
?>