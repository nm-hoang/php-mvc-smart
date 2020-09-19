<?php
    include 'nav.php';
    include 'header.php';
    if($adminStatus == false){ ?>
       <h1 style="text-align: center;">You need to log in first</h1>
   <?php }
    else{
            ?>
        <h1 style="text-align: center;">You are sign now. Please sign in to edit games</h1>
   <?php }
?>
