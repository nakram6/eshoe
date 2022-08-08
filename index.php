<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="#" class="navbar-brand">eShoe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">

        <ul class="navbar-nav mr-auto ml-auto">
          <li class="nav-item"><a href="#" class="nav-link">Home<span class="sr-only">(current)</span></a></li>
          
          <li class="nav-item"><a href="shop_women.html" class="nav-link">Shop Women</a></li>
          <li class="nav-item"><a href="shop_kids.html" class="nav-link">Shop Kids</a></li>
          <li class="nav-item"><a href="shop_promotional.html" class="nav-link">Promotion</a></li>
         
          <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
        </ul>

        <form class="d-flex w-auto">
          <input type="search" class="form-control" placeholder="Search" aria-label="Search"/>
          <button class="btn btn-dark btn-sm" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </button>
        </form>

        <ul class="navbar-nav ml-1">
          <li class="nav-item ml-1">
            <a href="#" class="btn btn-light btn-sm">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
            </a>
          </li>
          <li class="nav-item ml-1">
            <a href="#" class="btn btn-light btn-sm">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="1.5 3 13 10">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg>
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <!-- HEADER -->
    <header>
      <div class="container">
        <div id="carouselHeader" class="carousel slide mt-5" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://www.science.org/do/10.1126/science.aaz5243/abs/1036780592-1280x720.jpg" alt="First slide">
              <div class="carousel-caption "><h3>Sample Text</h3></div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://static01.nyt.com/images/2016/12/14/well/move/14physed-running-photo/14physed-running-photo-superJumbo.jpg" alt="Second slide">
              <div class="carousel-caption"><h3>Sample Text</h3></div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://www.highsnobiety.com/static-assets/thumbor/q8vfnDYTVfXAEwxn4CqSOqKlnvk=/1200x800/www.highsnobiety.com/static-assets/wp-content/uploads/2019/05/30145103/main11.jpg" alt="Third slide">
              <div class="carousel-caption text-dark"><h3>Sample Text</h3></div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- MAIN CONTENT -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Men's Latest</h2><span>Men's Latest.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/jet-black1-fix_1024x1024@2x.jpg?v=1614409071" alt="MenLatest1" style="width:100%">
              <div class="caption"><p class="text-dark">Jet Black</p><p class="text-muted">$170</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/1_6aa1ff2d-4cd9-4fce-9850-c4c4d94eeecd_1024x1024@2x.jpg?v=1602343465" alt="MenLatest2" style="width:100%">
              <div class="caption"><p class="text-dark">Steel Onyx</p><p class="text-muted">$150</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/0_f5daaae9-319d-464b-aa12-6e2ff5134b58_1024x1024@2x.jpg?v=1602342288" alt="MenLatest3" style="width:100%">
              <div class="caption"><p class="text-dark">Cosmic Black</p><p class="text-muted">$140</p></div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Women's Latest</h2><span>Women's Latest.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/D0_1024x1024@2x.jpg?v=1602343162" alt="WomenLatest1" style="width:100%">
              <div class="caption"><p class="text-dark">Rose Gray</p><p class="text-muted">$140</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/1a_ac06570b-56ff-4dbf-8ad4-23c67dab3a60_1024x1024@2x.jpg?v=1602341926" alt="WomenLatest2" style="width:100%">
              <div class="caption"><p class="text-dark">Black Ember</p><p class="text-muted">$140</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://cdn.shopify.com/s/files/1/0037/0658/5123/products/1-sapphire-blue-zeba-left_1024x1024@2x.jpg?v=1603586800" alt="WomenLatest3" style="width:100%">
              <div class="caption"><p class="text-dark">Sapphire Blue</p><p class="text-muted">$150</p></div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Kid's Latest</h2><span>Kid's Latest.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/dbc3f3f8-737d-4526-bb68-e16c064cfdd6/air-force-1-lv8-older-shoes-VBktD5.png" alt="KidLatest1" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Air Force 1 LV8 (Black)</p><p class="text-muted">$110</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/033c84a6-3e80-4645-95ce-237786a460d2/air-force-1-crater-older-shoes-b8MP2l.png" alt="KidLatest2" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Air Force 1 Crater</p><p class="text-muted">$120</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/eae3b0fa-2174-4151-9e2e-db630872af23/air-force-1-lv8-older-shoes-Hjg4Zp.png" alt="KidLatest3" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Air Force 1 LV8 (White)</p><p class="text-muted">$110</p></div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
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