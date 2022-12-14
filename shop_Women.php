<!-- 
    Project Name: eShoe
Group Numbe: 18
Members: Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem
File Name: shop_women.php
Description: This file is about woment product
Dated:  08/08/2022
  -->



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Women's</title>
    <meta charset="UTF-8">
  <meta name="description" content="Online Shoes ">
  <meta name="keywords" content="Shoes, Man, Woman, Kids, sale">
  <meta name="author" content="Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <style>
    .navbar-brand,
    .footer-custom,
    .nav-item,
    .nav-link,
    .carousel-img {
        font-weight: lighter;
        color: white;
    }
    </style>
</head>

<body>
    <!-- Header (navbar) -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <!--navbar-light bg-light (replace) -->
        <a href="index.php" class="navbar-brand">eShoe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="about.php">About</a>
                <a class="nav-item nav-link" href="shop_sale.php">Sale</a>
                <a class="nav-item nav-link" href="shop_men.php">Men</a>
                <a class="nav-item nav-link" href="shop_women.php">Women</a>
                <a class="nav-item nav-link" href="shop_kids.php">Kids</a>
                <a class="nav-item nav-link" href="connection.php">Shop</a>
                <a class="nav-item nav-link" href="contact.php">Contact</a>
                <a class="nav-item nav-link" href="help.php">Help</a>
            </div>
            <form class="d-flex w-auto">
                <input id="myInput" type="search" class="form-control" placeholder="Search" aria-label="Search" />
                <button class="btn btn-dark btn-sm" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-cart"
                        viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </form>
            <ul class="navbar-nav ml-1">
                <li class="nav-item ml-1">
                    <a href="cart.php" class="btn btn-dark btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item ml-1">
                    <a href="signin.php" class="btn btn-dark btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-cart" viewBox="1.5 3 13 10">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Women's Footwear -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Women's</h2><span>Find available Women's footwear here.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/7ad0bd12-a501-431d-95fd-d4a058be596d/air-jordan-1-zoom-air-comfort-shoes-h6dBTb.png"
                            alt="MenLatest1" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Air Jordan 1 Zoom Air Comfort</p>
                            <p class="text-muted">$90</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e777c881-5b62-4250-92a6-362967f54cca/air-force-1-07-shoe-Dz225W.png"
                            alt="MenLatest2" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Force 1 '07</p>
                            <p class="text-muted">$100</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/36d491cd-5b6e-4aa1-b710-c77a53ff4b84/air-force-1-shadow-shoes-lW4FDD.png"
                            alt="MenLatest3" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Force 1 Shadow</p>
                            <p class="text-muted">$70</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/057b6a61-0562-47d0-9e76-8e9c9f982f7c/pg-6-basketball-shoes-LC51Zx.png"
                            alt="MenLatest1" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">PG 6</p>
                            <p class="text-muted">$110</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/9bda4402-f58e-480d-94b7-56d1c962d82e/air-jordan-1-mid-se-shoes-FqHstJ.png"
                            alt="MenLatest2" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Air Jordan 1 Mid SE</p>
                            <p class="text-muted">$70</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/918be028-1e3e-4e8e-ad22-ea6ac72d5bb2/air-max-270-shoes-DFFrlp.png"
                            alt="MenLatest3" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Max 270</p>
                            <p class="text-muted">$60</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/a11b2cf9-ba4e-4b98-8021-b1527da06169/air-max-270-g-golf-shoe-gTpCFg.png"
                            alt="MenLatest1" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Max 270 G</p>
                            <p class="text-muted">$70</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/dec39e00-9d5e-43cc-80fe-932a7ddbd4c3/air-max-bella-tr-5-training-shoes-JB0Wtp.png"
                            alt="MenLatest2" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Max Bella TR 5 Premium</p>
                            <p class="text-muted">$80</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/0504ceca-48e6-4571-a596-cc03fb807f3f/air-force-1-07-lx-shoes-JKKcNq.png"
                            alt="MenLatest3" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Force 1 '07 LX</p>
                            <p class="text-muted">$100</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/d56078a8-6b2f-4c46-babd-9a8a2b215595/air-max-270-shoe-dgLD5h.png"
                            alt="MenLatest1" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Force 1 '07</p>
                            <p class="text-muted">$90</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/cf36432d-3246-4d0e-b78e-b36bd24fd02e/air-force-1-low-07-shoes-2BgSRw.png"
                            alt="MenLatest2" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Max 90 G</p>
                            <p class="text-muted">$80</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/3282ee9a-8b12-4e4b-ad31-d67ce4ed45a3/air-force-1-07-shoe-yATkW1Bp.png"
                            alt="MenLatest3" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">LeBron 19 Low</p>
                            <p class="text-muted">$60</p>
                        </div>
                    </a>
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
                        <h2 style="font-weight: lighter">eShoe</h2>
                    </div>
                    <ul>
                        <li><a href="#" class="text-decoration-none text-white">123 Fake Street, Ontario, Canada </a>
                        </li>
                        <li><a href="#" class="text-decoration-none text-white">eShoe@email.com</a></li>
                        <li><a href="#" class="text-decoration-none text-white">123-456-7890</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mt-3">
                    <h2 style="font-weight: lighter"> Useful Links</h2>
                    <ul>
                        <li><a href="#" class="text-decoration-none text-white">Home</a></li>
                        <li><a href="#" class="text-decoration-none text-white">About</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Help</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-9 d-flex justify-content-center">
                    <div class="under-footer">
                        <p>Copyright ?? 2022 eShoe. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>