<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
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

    <!-- Register / Sign-up -->
    <div class="container my-5">
      <div class="card" align="center">
        <div class="card-body">
          <h1 class="card-title mb-5">Sign Up</h1>
         <form id="register-form" method="POST"  action="signup.php">
                <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
           <div class="mb-3">
              <label class="form-label">Name</label>
              <input class="form-control" type="text"id="register-name" name="name" placeholder="Name" required/>
            </div>
           
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input class="form-control" type="email" placeholder="example@example.com" id="register" required name="email">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input class="form-control" type="password" placeholder="Password" required id="register-password" name="password">
            </div>
            <div class="mb-3">
              <label class="form-label">Re-Enter your password</label>
              <input class="form-control" type="password" id="register-confirm-password" name="confirmPassword" placeholder="Confirm Password" required/>
            </div>
            <div class="mb-3">
              <button class="btn btn-dark" type="submit"id="register-btn" name="register" value="Register">Register</button>
            </div>
            <div>
              <a  id="login-url" href="signin.php">Already registered? Login here.</a>
            </div>
          </form>
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

<!-- PHP code 

<?php


include('backend/connection.php');



         
if(isset($_SESSION['logged_in'])){
  header('location: account.php');
  exit;
}



if(isset($_POST['register'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  
  if($password !== $confirmPassword){
    header('location: signup.php?error=passwords dont match');
  

  //if passwod is less than 6 char
  }else if(strlen($password) < 6){
    header('location: signup.php?error=password must be at least 6 charachters');
  

 
  }else{
               
                $stmt1= $conn->prepare("SELECT count(*) FROM users where user_email=?");
                $stmt1->bind_param('s',$email);
                $stmt1->execute();
                $stmt1->bind_result($num_rows);
                $stmt1->store_result();
                $stmt1->fetch();

               
                if($num_rows != 0){
                  header('location: signup.php?error=user with this eamil already exists');
                  

                 
                }else{
                        
                        $stmt = $conn->prepare("INSERT INTO users (user_name,user_email,user_password) 
                        VALUES (?,?,?)");

                        $stmt->bind_param('sss',$name,$email,md5($password));

                  

                       
                        if($stmt->execute()){
                              $user_id = $stmt->insert_id;
                              $_SESSION['user_id'] = $user_id;
                              $_SESSION['user_email'] = $email;
                              $_SESSION['user_name'] = $name;
                              $_SESSION['logged_in'] = true;
                              header('location: account.php?register_success=You registered successfully');

                        }else{

                             header('location: signup.php?error=could not create an account at the moment');

                        }



                }

              }

}

?>

--> 
