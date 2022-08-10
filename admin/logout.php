<!-- 
Project Name: eShoe
Group Numbe: 18
Members: Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem
File Name: logout.php
Description: This file manage logout in admin panel
Dated:  08/08/2022

 -->

<?php

session_start();

if(isset($_GET['logout']) && $_GET['logout']==1 ){
    if(isset($_SESSION['admin_logged_in'])){
      unset($_SESSION['admin_logged_in']);
      unset($_SESSION['admin_email']);
      unset($_SESSION['admin_name']);
      header('location: login.php');
      exit;
    }
   
  } 
  



?>