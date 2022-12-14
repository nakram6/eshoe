<!-- 
Project Name: eShoe
Group Numbe: 18
Members: Sevilla-Garcia Elijah, Huang Jason, Hu Steve, Bui Don, Akram Nadeem
File Name: shop_man.php
Description: This file is about man product page
Dated:  08/08/2022
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Men's</title>
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
    <!-- Men's Footwear -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Men's</h2><span> Find available Men's footwear here.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/4f37fca8-6bce-43e7-ad07-f57ae3c13142/air-force-1-07-mens-shoes-5QFp5Z.png"
                            alt="MenLatest1" style="width:100%">
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
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/bae3c49d-8f8e-4332-baa1-2aa9cb22f40a/jordan-delta-3-sp-mens-shoes-khfbPj.png"
                            alt="MenLatest2" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Jordan Delta 3 SP</p>
                            <p class="text-muted">$90</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/52827c81-33f3-42d5-b919-a643c55ecc95/custom-nike-air-max-95-unlocked-by-you.png"
                            alt="MenLatest3" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Max 95</p>
                            <p class="text-muted">$60</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/d17c1593-26f8-4d27-a918-ac95e3ef5a92/kd15-community-napheesa-collier-basketball-shoes-10P3rj.png"
                            alt="MenLatest1" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">KD15 Community</p>
                            <p class="text-muted">$100</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/2be5599d-45a6-4b5a-8ab0-401c9e632e51/jordan-adg-4-mens-golf-shoes-zw1ZGK.png"
                            alt="MenLatest2" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Jordan ADG 4</p>
                            <p class="text-muted">$110</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/3c653bda-4822-4357-a18e-c0adcb6bbf2d/zoom-lebron-3-mens-shoes.png"
                            alt="MenLatest3" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Zoom Lebron 3</p>
                            <p class="text-muted">$90</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/89b2a15f-10bd-4623-84a2-20813890b886/acg-lowcate-shoes-7Px0Lq.png"
                            alt="MenLatest1" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike ACG Lowcate</p>
                            <p class="text-muted">$80</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/fb783e56-f28c-4688-a476-1f77e48be11a/jordan-6-rings-mens-shoes-2VAD3Y.png"
                            alt="MenLatest2" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Jordan 6 Rings</p>
                            <p class="text-muted">$70</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ef919048-153d-4bd2-a63c-59b5f2430105/air-trainer-1-mens-shoes-0vx2ft.png"
                            alt="MenLatest3" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Nike Air Trainer 1</p>
                            <p class="text-muted">$80</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/d82dc1keg33jjklyiw8l/converse-chuck-taylor-all-star-high-top-shoes-xX439O.png"
                            alt="MenLatest1" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Converse Chuck Taylor All Star High Top</p>
                            <p class="text-muted">$120</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/8e3d998c-fd76-4a89-8967-127c86e1d80a/custom-nike-kyrie-infinity-by-you.png"
                            alt="MenLatest2" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Kyrie Infinity</p>
                            <p class="text-muted">$100</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" class="text-decoration-none" target="_blank">
                        <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/5abdf3b6-11b1-4ff4-84e3-8da0193de8b0/zion-2-mens-basketball-shoes-CCXqSW.png"
                            alt="MenLatest3" style="width:100%">
                        <div class="caption">
                            <p class="text-dark">Zion 2</p>
                            <p class="text-muted">$90</p>
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