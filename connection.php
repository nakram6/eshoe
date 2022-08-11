
<!-- 
Project Name: eShoe
Group Numbe: 18
Members: Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem
File Name: connection.php
Description: This file is used to add products in the cart

 -->

 <?php

session_start();
include('backend/connection.php');
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
$shopping_cart = "";

$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($conn, "SELECT * FROM `shoes` WHERE `shoe_id`='$code'"
);
$row = mysqli_fetch_assoc($result);
 $shoe_id = $row['shoe_id'];
$shoe_name = $row['shoe_name'];

$shoe_price = $row['shoe_price'];
$shoe_image = $row['shoe_image'];

$cartArray = array(
	$code=>array(
	'shoe_name'=>$shoe_name,
	'shoe_id'=>$shoe_id,
	'shoe_price'=>$shoe_price,
	'quantity'=>1,
	'shoe_image'=>$shoe_image)
);
  
  
  if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>





<!DOCTYPE html>
<html>
  <head>
    <title>About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    
    
     <!-- Header (navbar) -->
 <nav class="navbar navbar-expand-lg bg-dark"> <!--navbar-light bg-light (replace) --> 
  <a href="index.php" class="navbar-brand">eShoe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar">
  <div class="navbar-nav ml-auto">
  <a class="nav-item nav-link" href="about.php">About</a>
  <a class="nav-item nav-link" href="shop_sale.php">Sale</a>
  <a class="nav-item nav-link" href="shop_men.php">Men</a>
  <a class="nav-item nav-link" href="shop_women.php">Women</a>
  <a class="nav-item nav-link" href="shop_kids.php">Kids</a>
    <a class="nav-item nav-link" href="connection.php">Shop</a>
  <a class="nav-item nav-link" href="contact.php">Contact</a>
  <a class="nav-item nav-link" href="help.php">Help</a>
</div>
    <form class="d-flex w-auto">
      <input id="myInput" type="search" class="form-control" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-dark btn-sm" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </button>
    </form>
    <ul class="navbar-nav ml-1">
      <li class="nav-item ml-1">
        <a href="cart.php" class="btn btn-dark btn-sm">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          <span style="color:orange;"><?php echo $cart_count; ?></span>
          </svg>
        </a>
      </li>
      <li class="nav-item ml-1">
        <a href="signin.php" class="btn btn-dark btn-sm">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="1.5 3 13 10">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          </svg>
        </a>
      </li>
    </ul>
  </div>
</nav>
    
    
    
    

    
   
    <div id="myDIV" class="container-fluid mt-5">

   

    
    
   <?php


$result = mysqli_query($conn,"SELECT * FROM `shoes`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['shoe_id']." />
			  <div class='image'><img src='./assets/imgs/".$row['shoe_image']."' /></div>
              
             
              
			  <div class='name'>".$row['shoe_name']."</div>
		   	  <div class='price'>$".$row['shoe_price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }
mysqli_close($conn);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br />
    
    
    
    
    
    
    
    </div>
    
   
    
  

    <!-- FOOTER -->
    <footer>
      <div class="container-fluid mt-5 bg-dark text-white">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-3 mt-3">
            <div class="logo">
              <h2>eShoe</h2>
            </div>
            <ul>
              <li><a href="#" class="text-decoration-none text-white">123 Fake Street, Ontario, Canada</a></li>
              <li><a href="#" class="text-decoration-none text-white">eshoe@email.com</a></li>
              <li><a href="#" class="text-decoration-none text-white">123-456-7890</a></li>
            </ul>
          </div>
          <div class="col-lg-3 mt-3">
            <h2>Useful Links</h2>
            <ul>
              <li><a href="#" class="text-decoration-none text-white">Homepage</a></li>
              <li><a href="#" class="text-decoration-none text-white">About Us</a></li>
              <li><a href="#" class="text-decoration-none text-white">Help</a></li>
              <li><a href="#" class="text-decoration-none text-white">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-9 d-flex justify-content-center">
            <div class="under-footer"><p>Copyright © 2022 eShoe. All Rights Reserved.</div>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>
























