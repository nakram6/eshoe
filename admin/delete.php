<!-- 
Project Name: eShoe
Group Numbe: 18
Members: Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem
File Name: delete.php
Description: This file is used to delete product
Dated:  08/08/2022

 -->



<?php 

session_start();
 
  include('../backend/connection.php');

?>


<?php 
   
   if(!isset($_SESSION['admin_logged_in'])){
         header('location: login.php');
         exit();

   }


   if(isset($_GET['product_id'])){
       $shoe_id = $_GET['product_id'];
        $stmt = $conn->prepare("DELETE FROM shoes WHERE shoe_id=?");
        $stmt->bind_param('i',$shoe_id);

        if($stmt->execute()){

          header('location: products.php?deleted_successfully=Product has been deleted successfully');

        }else{
            header('location: products.php?deleted_failure=Could not delete product');
        }
   
   }

?>