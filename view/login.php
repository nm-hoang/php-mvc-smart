<?php 
include 'nav.php';
include 'header.php';

?>
<link rel="stylesheet" href="css/loginDesign.css">
<div class="login-card size-card">
    <h1>Log-in</h1><br>
  <form method="post">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    <?php if(isset($checkAdmin)){
            if($checkAdmin == false){?>
        <h1>You are not an admin</h1>
    <?php } else{ echo $_SESSION['userlogin'] ?>
        <script> window.location.href = 'index.php' </script>
    <?php } }?>
  <div class="login-help">
    <a href="#">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->