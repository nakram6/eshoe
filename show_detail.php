<?php session_start();

include('backend/connection.php'); 

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Show Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
	<style> 
	.navbar-brand,.footer-custom,.nav-item,.nav-link {
  font-weight: lighter;
  color: white;
}
	</style> 
  </head>
  <body>
 <!-- Header (navbar) -->
 <nav class="navbar navbar-expand-lg bg-dark"> <!--navbar-light bg-light (replace) --> 
  <a href="#" class="navbar-brand">eShoe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar">
  <div class="navbar-nav ml-auto">
  <a class="nav-item nav-link" href="#">About</a>
  <a class="nav-item nav-link" href="#">Sale</a>
  <a class="nav-item nav-link" href="#">Men</a>
  <a class="nav-item nav-link" href="#">Women</a>
  <a class="nav-item nav-link" href="#">Kids</a>
  <a class="nav-item nav-link" href="#">Contact</a>
</div>
    <form class="d-flex w-auto">
      <input type="search" class="form-control" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-dark btn-sm" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </button>
    </form>
    <ul class="navbar-nav ml-1">
      <li class="nav-item ml-1">
        <a href="#" class="btn btn-dark btn-sm">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
        </a>
      </li>
      <li class="nav-item ml-1">
         <?php if(isset($_SESSION['admin_logged_in'])) { ?>
        <a href="logout.php?logout=1" class="btn btn-dark btn-sm">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="1.5 3 13 10">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          </svg>
        </a>
      </li>
    </ul>
  </div>
</nav>
<!-- Show Detail -->
<br> <br>
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/1_6aa1ff2d-4cd9-4fce-9850-c4c4d94eeecd_1024x1024@2x.jpg?v=1602343465" alt="MenLatest2" style="width:100%">
      </div>
    </div>
    <div class="col-lg-4 ml-5 mt-5 d-flex flex-row-reverse">
      <div class="caption"><h1 class="text-dark">Steel Onyx</h1><h4 class="text-muted">Black</h4><h4 class="text-muted">$150</h4>
        <hr>
        <form action="" method="post">
          <select class="form-select" name="product-quantity">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
          <button type="submit" name="product-add" class="btn btn-success btn-dark">Add to Cart</button>
        </form>
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
        <div class="under-footer"><p>Copyright ?? 2022 eShoe. All Rights Reserved.</div>
      </div>
    </div>
  </div>
</footer>
  </body>
</html>