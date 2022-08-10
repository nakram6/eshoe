<!-- 
Project Name: eShoe
Group Numbe: 18
Members: Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem
File Name: index.php
Description: This file is index page
Dated:  08/08/2022
 -->



<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Home </title>
    <meta charset="UTF-8">
  <meta name="description" content="Online Shoes ">
  <meta name="keywords" content="Shoes, Man, Woman, Kids, sale">
  <meta name="author" content="Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".text-dark *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	<style> 
	.navbar-brand,.footer-custom,.nav-item,.nav-link,.carousel-img {
  font-weight: lighter;
  color: white;
}
	</style> 
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
    <!-- Home -->
    <header>
      <div id="myDIV" class="container">
        <div id="carouselHeader" class="carousel slide mt-5" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://cdn.stocksnap.io/img-thumbs/960w/relaxing-shoes_R7NJ9JHE2A.jpg" alt="First slide">
              <div class="carousel-caption "><h3 class = "carousel-img">Welcome to eShoe. Begin sole searching here.</h3></div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://cdn.stocksnap.io/img-thumbs/960w/boots-shoes_NY1J54I4RB.jpg" alt="Second slide">
              <div class="carousel-caption"><h3 class = "carousel-img">Discover the best pairs of footwear for you and yours here. </h3></div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://cdn.stocksnap.io/img-thumbs/960w/shoes-chucks_IZUJXJHMV3.jpg" alt="Third slide">
              <div class="carousel-caption text-dark"><h3 class = "carousel-img"> Add another pair of shoes to your collection here.</h3></div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Men's Latest</h2><span> Our Latest of Men's footwear.</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/jet-black1-fix_1024x1024@2x.jpg?v=1614409071" alt="MenLatest1" style="width:100%">
              <div class="caption"><p class="text-dark">Jet Black</p><p class="text-muted">$170</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/1_6aa1ff2d-4cd9-4fce-9850-c4c4d94eeecd_1024x1024@2x.jpg?v=1602343465" alt="MenLatest2" style="width:100%">
              <div class="caption"><p class="text-dark">Steel Onyx</p><p class="text-muted">$150</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/0_f5daaae9-319d-464b-aa12-6e2ff5134b58_1024x1024@2x.jpg?v=1602342288" alt="MenLatest3" style="width:100%">
              <div class="caption"><p class="text-dark">Cosmic Black</p><p class="text-muted">$140</p></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Women's Latest</h2><span>Our Latest of Women's footwear.</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/D0_1024x1024@2x.jpg?v=1602343162" alt="WomenLatest1" style="width:100%">
              <div class="caption"><p class="text-dark">Rose Gray</p><p class="text-muted">$140</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/1a_ac06570b-56ff-4dbf-8ad4-23c67dab3a60_1024x1024@2x.jpg?v=1602341926" alt="WomenLatest2" style="width:100%">
              <div class="caption"><p class="text-dark">Black Ember</p><p class="text-muted">$140</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/1-sapphire-blue-zeba-left_1024x1024@2x.jpg?v=1603586800" alt="WomenLatest3" style="width:100%">
              <div class="caption"><p class="text-dark">Sapphire Blue</p><p class="text-muted">$150</p></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Kid's Latest</h2><span>Our Latest of Kid's footwear.</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/dbc3f3f8-737d-4526-bb68-e16c064cfdd6/air-force-1-lv8-older-shoes-VBktD5.png" alt="KidLatest1" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Air Force 1 LV8 (Black)</p><p class="text-muted">$110</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/033c84a6-3e80-4645-95ce-237786a460d2/air-force-1-crater-older-shoes-b8MP2l.png" alt="KidLatest2" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Air Force 1 Crater</p><p class="text-muted">$120</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/eae3b0fa-2174-4151-9e2e-db630872af23/air-force-1-lv8-older-shoes-Hjg4Zp.png" alt="KidLatest3" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Air Force 1 LV8 (White)</p><p class="text-muted">$110</p></div>
            </a>
          </div>
        </div>
      </div>
    </div>
   <!--Footer-->
   <footer>
    <div class="container-fluid mt-5 bg-dark footer-custom">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 mt-3">
          <div class="logo">
            <h2 style = "font-weight: lighter">eShoe</h2>
          </div>
          <ul>
            <li><a href="#" class="text-decoration-none text-white">123 Fake Street, Ontario, Canada </a></li>
            <li><a href="#" class="text-decoration-none text-white">eShoe@email.com</a></li>
            <li><a href="#" class="text-decoration-none text-white">123-456-7890</a></li>
          </ul>
        </div>
        <div class="col-lg-3 mt-3">
          <h2 style = "font-weight: lighter"> Useful Links</h2>
          <ul>
            <li><a href="#" class="text-decoration-none text-white">Home</a></li>
            <li><a href="#" class="text-decoration-none text-white">About</a></li>
            <li><a href="#" class="text-decoration-none text-white">Help</a></li>
            <li><a href="#" class="text-decoration-none text-white">Contact</a></li>
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