<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>eShoe</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
<?php




include('backend/connection.php');


if(isset($_POST['order_details_btn']) && isset($_POST['order_id'])){

    $order_id = $_POST['order_id'];
    $order_status = $_POST['order_status'];

    $stmt = $conn->prepare("SELECT * FROM order_items WHERE order_id = ?");

    $stmt->bind_param('i',$order_id);

    $stmt->execute();
   
    $order_details = $stmt->get_result();

    $total_order_price = calculateTotalOrderPrice($order_details);


}else{
    
   header('location: account.php');
   exit;

}




function calculateTotalOrderPrice($order_details){

  $total = 0;

  foreach($order_details as $row){  

      $shoe_price = $row['order_price'];
      $product_quantity = 1;

       $total  =  $total  + ($show_price * $product_quantity);

  }

  
   return $total; 
  

}





?>




      
       <section id="orders" class="orders container my-5 py-3">
            <div class="container mt-5">
                <h2 class="font-weight-bold text-center">Order details</h2>
                <hr class="mx-auto">
            </div>

            <table class="mt-5 pt-5 mx-auto">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
 
                </tr>


               <?php foreach($order_details as $row){  ?>
                  
                          <tr>
                              <td>
                                <div class="product-info">
                                    <img src="assets/imgs/<?php echo $row['shoe_image'];?>"/>
                                    <div>
                                        <p class="mt-3"><?php echo $row['shoe_name'];?></p>
                                    </div>
                                </div> 
                                
                              </td>

                              <td>
                                <span>$<?php echo $row['shoe_price'];?></span>
                              </td>

                              <td>
                                <span><?php echo $row['shoe_quantity'];?></span>
                              </td>

                            
                            
                          </tr>


 
                  <?php } ?>



         
            </table>



              <?php if($order_status == "not paid"){?>
                    <form style="float: right;" method="POST" action="payment.php">
                      <input type="hidden" name="order_id" value="<?php echo $order_id; ?>"/>
                      <input type="hidden" name="order_total_price" value="<?php echo $total_order_price;?>"/>
                      <input type="hidden" name="order_status" value="<?php echo $order_status;?>" />
                      <input type="submit" class="btn btn-primary" value="Pay Now"/>
                    </form>

              <?php } ?>

        </section>
    
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
    </body>
</html> 










 
