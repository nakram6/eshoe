<!-- 
Project Name: eShoe
Group Numbe: 18
Members: Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem
File Name: logout.php
Description: This file is logout page
Dated:  08/08/2022
 -->


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