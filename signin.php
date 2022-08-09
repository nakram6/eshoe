<?php 

session_start();

include('backend/connection.php');


if(isset($_SESSION['user_logged_in'])){
    header('location: shop.php');
    exit;
}


if(isset($_POST['login_btn'])){


  $user_email = $_POST['email'];
  $user_password = md5($_POST['password']);

  $stmt = $conn->prepare("SELECT user_id,user_name, user_email, user_password FROM users WHERE user_email = ? AND user_password = ? LIMIT 1");

  $stmt->bind_param('ss',$user_email,$user_password);

  if($stmt->execute()){
      $stmt->bind_result($user_id,$user_name,$user_email,$user_password);
      $stmt->store_result();

      if($stmt->num_rows() == 1){
         $stmt->fetch();

        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_email'] = $user_email;
        $_SESSION['user_logged_in'] = true;

     
        header('location: shop.php?login_success=logged in successfully');

      }else{
        header('location: signin.php?error=could not verify your account');
      }

  }else{
    //error
    header('location: signin.php?error=something went wrong');

  }


}








?>



<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
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
        <a href="#" class="btn btn-dark btn-sm">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="1.5 3 13 10">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          </svg>
        </a>
      </li>
    </ul>

  </div>
</nav>

    <!-- Login /Sign-in -->
    <div class="container my-5">
      <div class="card" align="center">
        <div class="card-body">
          <h1 class="card-title mb-5">Login</h1>
          <form action="signin.php" method="post">
            <p style="color:red" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
            <div class="mb-3">
              <label class="form-label">Email Address</label>
              <input class="form-control" type="email" id="login-email" name="email" placeholder="Name@email.com" required name="e">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input class="form-control" type="password" id="login-password" name="password" placeholder="Password" required name="p">
            </div>
            <div class="mb-3">
              <button class="btn btn-dark" id="login-btn" name="login_btn" value="Login" type="submit">Login</button>
            </div>
            <div>
              <a   href="signup.php">Not registered? Sign up here.</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    
   <div style="height:600px; "></div>
    

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


