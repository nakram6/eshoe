<!-- 
Project Name: eShoe
Group Numbe: 18
Members: Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem
File Name: shop_kid.php
Description: This file is about kid products page
Dated:  08/08/2022
 -->


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kid's</title>
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


    <!-- Kid's Footwear -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Kids's</h2><span>Find available Kid's footwear here.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/5add6e24-70b2-4b93-8018-65135d56a980/dunk-high-older-shoe-JfWkHc.png"
                            alt="MenLatest1" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Dunk High</p>
                            <p class="text-muted">$70</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/d1a8d781-2838-471d-b1c8-f72387dcf541/dunk-low-older-shoes-RW3pQT.png"
                            alt="MenLatest2" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Dunk Low</p>
                            <p class="text-muted">$50</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/d94fa6a1-6108-4a96-b087-4682cc53e916/dunk-low-younger-shoes-3mH9FQ.png"
                            alt="MenLatest3" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Dunk Low</p>
                            <p class="text-muted">$30</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/1aa3abc4-692e-466b-b985-570a178f25ef/air-force-1-older-shoes-1hqfHl.png"
                            alt="MenLatest1" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Force 1</p>
                            <p class="text-muted">$40</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/9b6f0450-5570-4f35-bee7-2ff43036d980/force-1-crater-next-nature-younger-shoes-NCTShf.png"
                            alt="MenLatest2" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Force 1 Crater Next Nature</p>
                            <p class="text-muted">$50</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/4aa860ff-a43b-4950-8dee-eb0e82199cce/force-1-crater-next-nature-shoes-5zNDX8.png"
                            alt="MenLatest3" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Force 1 Crater Next Nature</p>
                            <p class="text-muted">$60</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/f375b6d3-ac95-4ba4-9c37-a9095950a0b7/force-1-toggle-se-younger-shoes-89gJWj.png"
                            alt="MenLatest1" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Force 1 Toggle SE</p>
                            <p class="text-muted">$50</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/effd55ca-ffec-49bf-b1f8-5854f947f374/force-1-toggle-se-shoes-w7S53B.png"
                            alt="MenLatest2" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Force 1 Toggle SE</p>
                            <p class="text-muted">$70</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/dbc3f3f8-737d-4526-bb68-e16c064cfdd6/air-force-1-lv8-older-shoes-VBktD5.png"
                            alt="MenLatest3" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Force 1 LV8</p>
                            <p class="text-muted">$80</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/i1-dd4212aa-a0ce-4c4e-8cca-778f3ae70ca2/court-borough-mid-2-older-shoes-H0MwJf.png"
                            alt="MenLatest1" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Court Borough Mid 2</p>
                            <p class="text-muted">$70</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/02719263-3304-4cab-8f47-886f02b77974/blazer-mid-77-older-shoes-Htk5qh.png"
                            alt="MenLatest2" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Blazer Mid '77</p>
                            <p class="text-muted">$60</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/a6b8b31e-938e-44bd-913a-37a0369f9efb/air-max-motif-next-nature-older-shoes-533f42.png"
                            alt="MenLatest3" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Max Motif Next Nature</p>
                            <p class="text-muted">$50</p>
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