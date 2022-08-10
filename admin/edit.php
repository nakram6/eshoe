<!-- 
Project Name: eShoe
Group Numbe: 18
Members: Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem
File Name: edit.php
Description: This file is used to edit product
Dated:  08/08/2022

 -->

<?php include('header.php'); ?>


<?php


   if(isset($_GET['product_id'])){

    $product_id = $_GET['product_id'];
    $stmt = $conn->prepare("SELECT * FROM shoes WHERE shoe_id=?");
    $stmt->bind_param('i',$product_id);
    $stmt->execute();

    $products = $stmt->get_result(); //[]

   }else if(isset($_POST['edit_btn'])){

       $product_id = $_POST['product_id'];
       $title = $_POST['title'];
       $description = $_POST['description'];
       $price = $_POST['price'];
       $offer = $_POST['offer'];
       $color = $_POST['color'];
       $category = $_POST['category'];

        $stmt = $conn->prepare("UPDATE shoes SET shoe_name=?, shoe_description=?, shoe_price=?,
                                shoe_special_offer=?, shoe_color=?, shoe_size=?  WHERE shoe_id=?");
        $stmt->bind_param('ssssssi',$title,$description,$price,$offer,$color,$category,$product_id);

        if($stmt->execute()){
           
            header('location: products.php?edit_success_message=Product has been updated successfully');
        }else{
             header('location: products.php?edit_failure_message=Error occured, try again');
        }

   
  }else{
     header('location: products.php');
     exit;
   }


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
</head>
<body>


<div class="container-fluid">
    <div class="row" style="min-height: 1000px">
        <?php include('sidemenu.php'); ?>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Admin Panel</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">

                    </div>

                </div>
            </div>



            <h2>Edit Product</h2>
            <div class="table-responsive">



                <div class="mx-auto container">
                    <form id="edit-form" method="POST" action="edit.php">
                        <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
                        <div class="form-group mt-2">

                            <?php foreach($products as $product){ ?>

                            <input type="hidden" name="product_id" value="<?php echo $product['shoe_id'];?>" />

                            <label>Title</label>
                            <input type="text" class="form-control" id="product-name"
                                value="<?php echo $product['shoe_name']?>" name="title" placeholder="Title" required />
                        </div>
                        <div class="form-group mt-2">
                            <label>Description</label>
                            <input type="text" class="form-control" id="product-desc"
                                value="<?php echo $product['shoe_description']?>" name="description"
                                placeholder="Description" required />
                        </div>
                        <div class="form-group mt-2">
                            <label>Price</label>
                            <input type="text" class="form-control" id="product-price"
                                value="<?php echo $product['shoe_price']?>" name="price" placeholder="Price" required />
                        </div>
                        <div class="form-group mt-2">
                            <label>Category</label>
                            <select class="form-select" required name="category">
                                <option value="bags">Man</option>
                                <option value="shoes">Woman</option>
                                <option value="watches">Boys</option>
                                <option value="clothes">Girls</option>
                            </select>
                        </div>

                        <div class="form-group mt-2">
                            <label>Color</label>
                            <input type="text" class="form-control" value="<?php  echo $product['shoe_color']?>"
                                id="product-color" name="color" placeholder="Color" required />
                        </div>

                        <div class="form-group mt-2">
                            <label>Special Offer/Sale</label>
                            <input type="number" class="form-control"
                                value="<?php echo $product['shoe_special_offer']?>" id="product-offer" name="offer"
                                placeholder="Sale %" required />
                        </div>



                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-primary" name="edit_btn" value="Edit" />
                        </div>

                        <?php } ?>

                    </form>
                </div>


            </div>
        </main>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
</script>
<script src=""></script>
</body>

</html>


  














