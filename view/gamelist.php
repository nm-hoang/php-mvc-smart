<?php
include 'nav.php';
include 'header.php';?>

<!-- If admin is log in, show info admin -->
<?php if(isset($_SESSION['userlogin'])){ ?>
      <h1>&nbspHello Admin</h1>
<?php }
while ($game = $games->fetch_assoc()) {
?>
   <div class="col-sm-3">
        <img src="<?php echo $game['image'] ?>" all=" " class="custom-img">
        <h4>Price: <?php echo $game['price'] ?>$</h4>
        <h4>Title: <a href="index.php?id=<?php echo $game['id'] ?>"> <?php echo " ". $game['title'] ?> </a></h4>
        <h4><?php echo "Author: ". $game['author'] ?></h4>
        <?php if(isset($_SESSION['userlogin'])){
            echo $_SESSION['userlogin'];
           }?>
   </div>
<?php  } ?>
    
