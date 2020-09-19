<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/shoppingCart.css">
  <body style="background-image: url(./img/bg-body.png); margin-top:-40px;">
  <title>Document</title>
</head>
<body>
  



<div class="container">
  <div class="heading">
    <h1>
      <a href="index.php"><span class="shopper">G</span> ame center</a>
    </h1>
    
    <a href="#" class="visibility-cart transition is-open">X</a>    
  </div>
  
  <div class="cart transition is-open">
    
    <a href="admin?action=card" class="btn btn-update">Update cart</a>
    
    
    <div class="table">
     
      <div class="layout-inline row th img-resize" >
        <div class="col col-pro">Product</div>
        <div class="col col-price align-center "> 
          Price
        </div>
        <div class="col col-qty align-center">QTY</div>
        <div class="col">Total</div>
      </div>
      
      <div class="layout-inline row">
        
        <div class="col col-pro layout-inline">
          <img src="<?php echo $gameinfo['image'] ?>" alt="kitten" />
          <p><?php echo $gameinfo['title'] ?></p>
        </div>
        
        <div class="col col-price col-numeric align-center ">
          <p><?php echo $gameinfo['price']?></p>
        </div>

        <div class="col col-qty layout-inline">
          <a href="#" class="qty qty-minus">-</a>
            <input type="numeric" value="1" />
          <a href="#" class="qty qty-plus">+</a>
        </div>
        <div class="col col-total col-numeric">               <p> <?php echo $gameinfo['price']?></p>
        </div>
      </div>
      
      
       <div class="tf">

          <div class="row layout-inline">
           <div class="col">
             <p>Total</p>
           </div>
           <div class="col"></div>
         </div>
       </div>         
  </div>
    
<?php include 'footer.php' ?>