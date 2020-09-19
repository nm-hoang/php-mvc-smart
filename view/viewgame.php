<?php
   include 'nav.php';
   include 'header.php';
   ?>
<div class="row" style = "padding-top:30px">
  <form method="POST">
    <div class="custom-card">
      <div class="wrapper">
        <div class="product-img">
          <img src="<?php echo $gameinfo['image']?>" height="420" width="310">
        </div>
        <div class="product-info">
          <div class="product-text">
            <h1><?php echo $gameinfo['title'] ?></h1>
            <h2>by <?php echo " ". $gameinfo['author'] ?></h2>
            <p><?php echo $gameinfo['description'] ?></p>
          </div>
          <div class="product-price-btn">
            <p><span><?php echo $gameinfo['price']?></span>$</p>
            <button name="buy" type="submit">buy now</button>
          </div>
        </div>
      </div>
    </form>
  </div>

