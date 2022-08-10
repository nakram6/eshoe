<?php
session_start();
include('backend/connection.php');
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; 
    }
}
  	
}
?>

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>


<!-- 
Project Name: eShoe
Group Numbe: 18
Members: Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem
File Name: car.php
Description: This file is used for cart
Dated:  08/08/2022

 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart</title>

    <meta charset="UTF-8">
  <meta name="description" content="Online Shoes ">
  <meta name="keywords" content="Shoes, Man, Woman, Kids, sale">
  <meta name="author" content="Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>

    <style>
    .navbar-brand,
    .footer-custom,
    .nav-item,
    .nav-link,
    .carousel-img {
        font-weight: lighter;
        color: white;
    }
    </style>
</head>

<body>


    <!-- Header (navbar) -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <!--navbar-light bg-light (replace) -->
        <a href="index.php" class="navbar-brand">eShoe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="about.php">About</a>
                <a class="nav-item nav-link" href="shop_sale.php">Sale</a>
                <a class="nav-item nav-link" href="shop_men.php">Men</a>
                <a class="nav-item nav-link" href="shop_women.php">Women</a>
                <a class="nav-item nav-link" href="shop_kids.php">Kids</a>
                <a class="nav-item nav-link" href="contact.php">Contact</a>
            </div>
            <form class="d-flex w-auto">
                <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
                <button class="btn btn-dark btn-sm" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-cart"
                        viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </form>
            <ul class="navbar-nav ml-1">
                <li class="nav-item ml-1">
                    <a href="cart.php" class="btn btn-dark btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            <span style="color:orange;"><?php echo $cart_count; ?></span>
                        </svg>
                    </a>
                </li>
                <li class="nav-item ml-1">
                    <a href="signin.php" class="btn btn-dark btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-cart" viewBox="1.5 3 13 10">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <br /><br />



    <div class="container">



        <div style="width:700px; margin:50 auto;">

            <h2>Shopping Cart</h2>
            <br /><br />



            <?php
}
?>

            <div class="cart">
                <?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>
                <table class="table">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>ITEM NAME</td>
                            <td>QUANTITY</td>
                            <td>UNIT PRICE</td>
                            <td>ITEMS TOTAL</td>
                        </tr>
                        <?php		
foreach ($_SESSION["shopping_cart"] as $product){
 
  
  
?>
                        <tr>
                            <td>
                                <img src="<?php echo "./assets/imgs/". $product['shoe_image'];?>" width="50"
                                    height="40" />





                            </td>
                            <td><?php echo $product["shoe_name"]; ?><br />
                                <form method='post' action=' '>
                                    <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                    <input type='hidden' name='action' value="remove" />
                                    <button type='submit' class='remove'>Remove Item</button>
                                </form>
                            </td>
                            <td>
                                <form method='post' action=' '>
                                    <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                    <input type='hidden' name='action' value="change" />
                                    <select name='quantity' class='quantity' onChange="this.form.submit()">
                                        <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1
                                        </option>
                                        <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2
                                        </option>
                                        <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3
                                        </option>
                                        <option <?php if($product["quantity"]==4) echo "selected";?> value="4">4
                                        </option>
                                        <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5
                                        </option>
                                    </select>
                                </form>
                            </td>
                            <td><?php echo "$".$product["shoe_price"]; ?></td>
                            <td><?php echo "$".$product["shoe_price"]*$product["quantity"]; ?></td>
                        </tr>
                        <?php
$total_price += ($product["shoe_price"]*$product["quantity"]);
}
?>
                        <tr>
                            <td colspan="5" align="right">
                                <strong>TOTAL: <?php echo "$".$total_price; ?></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
            </div>

            <div style="clear:both;"></div>

            <div class="message_box" style="margin:10px 0px;">
                <?php echo $status; ?>
            </div>


        </div>



        <div style="height:600px; "></div>



    </div>

    <!--Footer-->
    <footer>
        <div class="container-fluid mt-5 bg-dark footer-custom">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 mt-3">
                    <div class="logo">
                        <h2 style="font-weight: lighter">eShoe</h2>
                    </div>
                    <ul>
                        <li><a href="#" class="text-decoration-none text-white">123 Fake Street, Ontario, Canada </a>
                        </li>
                        <li><a href="#" class="text-decoration-none text-white">eShoe@email.com</a></li>
                        <li><a href="#" class="text-decoration-none text-white">123-456-7890</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mt-3">
                    <h2 style="font-weight: lighter"> Useful Links</h2>
                    <ul>
                        <li><a href="#" class="text-decoration-none text-white">Home</a></li>
                        <li><a href="#" class="text-decoration-none text-white">About</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Help</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-9 d-flex justify-content-center">
                    <div class="under-footer">
                        <p>Copyright © 2022 eShoe. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>



</body>

</html>