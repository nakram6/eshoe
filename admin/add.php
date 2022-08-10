<!-- 
Project Name: eShoe
Group Numbe: 18
Members: Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem
File Name: add.php
Description: This file is used to add product in the inventory
Dated:  08/08/2022

 -->


<?php include('header.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div class="container-fluid">
    <div class="row" style="min-height: 1000px">
        <?php include('menu.php'); ?>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">

                    </div>

                </div>
            </div>


            <h2>Add New Shoe</h2>
            <div class="table-responsive">


                <div class="mx-auto container">
                    <form id="create-form" enctype="multipart/form-data" method="POST" action="create.php">
                        <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
                        <div class="form-group mt-2">
                            <label>Title</label>
                            <input type="text" class="form-control" id="product-name" name="name" placeholder="Title"
                                required />
                        </div>
                        <div class="form-group mt-2">
                            <label>Description</label>
                            <input type="text" class="form-control" id="product-desc" name="description"
                                placeholder="Description" required />
                        </div>
                        <div class="form-group mt-2">
                            <label>Price</label>
                            <input type="text" class="form-control" id="product-price" name="price" placeholder="Price"
                                required />
                        </div>
                        <div class="form-group mt-2">
                            <label>Special Offer/Sale</label>
                            <input type="number" class="form-control" id="product-offer" name="offer"
                                placeholder="Sale %" required />
                        </div>



                        <div class="form-group mt-2">
                            <label>Size</label>
                            <select class="form-select" required name="size">
                                <option value="Men">Men</option>
                                <option value="Women">Woman</option>
                                <option value="Boys">Boys</option>
                                <option value="Girls">Girls</option>
                            </select>
                        </div>


                        <div class="form-group mt-2">
                            <label>Color</label>
                            <input type="text" class="form-control" id="product-color" name="color" placeholder="Color"
                                required />
                        </div>

                        <div class="form-group mt-2">
                            <label>Image 1</label>
                            <input type="file" class="form-control" id="image1" name="image1" placeholder="Image 1"
                                required />
                        </div>

                        <div class="form-group mt-2">
                            <label>Image 2</label>
                            <input type="file" class="form-control" id="image2" name="image2" placeholder="Image 2"
                                required />
                        </div>

                        <div class="form-group mt-2">
                            <label>Image 3</label>
                            <input type="file" class="form-control" id="image3" name="image3" placeholder="Image 3"
                                required />
                        </div>

                        <div class="form-group mt-2">
                            <label>Image 4</label>
                            <input type="file" class="form-control" id="image4" name="image4" placeholder="Image 4"
                                required />
                        </div>


                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-primary" name="create" value="Create" />
                        </div>

                    </form>
                </div>


            </div>
        </main>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
  
</body>
</html>











