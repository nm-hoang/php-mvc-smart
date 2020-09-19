<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/shoppingCart.css">
  <body style="background-image: url(./img/bg-body.png);">
  <title>Document</title>
</head>
<body>
  



<div class="container">
  <div class="heading">
    <h1>
      <span class="shopper">s</span> Shopping Cart
    </h1>
    
    <a href="#" class="visibility-cart transition is-open">X</a>    
  </div>
  
  <div class="cart transition is-open">
    
    <a href="#" class="btn btn-update">Update cart</a>
    
    
    <div class="table">
      <?php 
          foreach($_SESSION['cart'] as $element){
            echo $element['title'];
          }
      ?>
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
          <img src="http://static.ddmcdn.com/gif/10-kitten-cuteness-1.jpg" alt="kitten" />
          <p>Happy Little Critter</p>
        </div>
        
        <div class="col col-price col-numeric align-center ">
          <p>£59.99</p>
        </div>

        <div class="col col-qty layout-inline">
          <a href="#" class="qty qty-minus">-</a>
            <input type="numeric" value="3" />
          <a href="#" class="qty qty-plus">+</a>
        </div>
        <div class="col col-total col-numeric">               <p> £182.95</p>
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