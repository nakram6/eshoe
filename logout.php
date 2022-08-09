<?php

session_start();

if(isset($_GET['logout']) && $_GET['logout']==1 ){
    if(isset($_SESSION['user_logged_in'])){
      unset($_SESSION['user_logged_in']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      header('location: signin.php');
      exit;
    }
   
  } 
  



?>