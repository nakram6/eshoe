<!DOCTYPE html>
<html>
  <head>
    <title>On Sale</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
	<style> 
	.navbar-brand,.footer-custom,.nav-item,.nav-link,.carousel-img {
  font-weight: lighter;
  color: white;
}
	</style> 
  </head>
  <body>
 <!-- Header (navbar) -->
 <nav class="navbar navbar-expand-lg bg-dark"> <!--navbar-light bg-light (replace) --> 
  <a href="#" class="navbar-brand">eShoe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar">
  <div class="navbar-nav ml-auto">
  <a class="nav-item nav-link" href="#">About</a>
  <a class="nav-item nav-link" href="#">Sale</a>
  <a class="nav-item nav-link" href="#">Men</a>
  <a class="nav-item nav-link" href="#">Women</a>
  <a class="nav-item nav-link" href="#">Kids</a>
  <a class="nav-item nav-link" href="#">Contact</a>
</div>
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
        <a href="#" class="btn btn-dark btn-sm">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
        </a>
      </li>
      <li class="nav-item ml-1">
        <a href="#" class="btn btn-dark btn-sm">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="1.5 3 13 10">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          </svg>
        </a>
      </li>
    </ul>
  </div>
</nav>

    <!-- Promotional Footwear -->
        <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>On Sale</h2><span>Check out our products on sale here.</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/06315c1c-c913-44e6-b2f0-4e73f183a311/react-ace-tour-golf-shoe-fK91Jr.png" alt="MenLatest1" style="width:100%">
              <div class="caption"><p class="text-dark">Nike React Ace Tour</p><p class="text-muted">$155 5% OFF</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/57a0a929-25c2-4eac-9c33-f12e5170645b/nikecourt-zoom-pro-hard-court-tennis-shoes-6DXfLR.png" alt="MenLatest2" style="width:100%">
              <div class="caption"><p class="text-dark">NikeCourt Zoom Pro</p><p class="text-muted">$95 12% OFF</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/5f83ee7d-f700-4f30-92a5-5b318127483e/blazer-mid-77-older-shoes-fQhb6q.png" alt="MenLatest3" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Blazer Mid '77</p><p class="text-muted">$77 10% OFF</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/781f1a56-d24b-44e1-bac8-c4b6eea42930/air-max-dawn-shoe-bsg6cw.png" alt="MenLatest1" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Air Max Dawn</p><p class="text-muted">$117 14% OFF</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/9389cd5e-f6b6-4be1-986d-4beb9e3c7b67/mercurial-superfly-8-elite-fg-football-boots-jZbl4T.png" alt="MenLatest2" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Mercurial Superfly 8 Elite FG</p><p class="text-muted">$315 13% OFF</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/d50a987f-54ba-4af7-8897-e41fae964e53/mercurial-vapor-14-elite-fg-football-boots-gSCd8q.png" alt="MenLatest3" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Mercurial Vapor 14 Elite FG</p><p class="text-muted">$265 6% OFF</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/f9d210e8-0821-4273-84f6-1fb8838a4e12/air-max-pre-day-shoes-96mb54.png" alt="MenLatest1" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Air Max Pre-Day</p><p class="text-muted">$140 9% OFF</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/dec39e00-9d5e-43cc-80fe-932a7ddbd4c3/air-max-bella-tr-5-training-shoes-JB0Wtp.png" alt="MenLatest2" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Air Max Bella TR 5 Premium</p><p class="text-muted">$93 12% OFF</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/0689b732-aa7c-4b8a-90c9-8a965f3db4d5/kyrie-infinity-older-basketball-shoes-fdTQlc.png" alt="MenLatest3" style="width:100%">
              <div class="caption"><p class="text-dark">Kyrie Infinity</p><p class="text-muted">$105 11% OFF</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/81fa88df-8273-4c7e-b315-3e93054729e3/nikecourt-zoom-nxt-hard-court-tennis-shoes-DP4CQ4.png" alt="MenLatest1" style="width:100%">
              <div class="caption"><p class="text-dark">NikeCourt Zoom NXT</p><p class="text-muted">$140 14% OFF</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ba5da04d-3775-4911-b6df-4c04c5934959/juniper-trail-trail-running-shoes-dlbhKl.png" alt="MenLatest2" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Juniper Trail</p><p class="text-muted">$77 8% OFF</p></div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="#" class="text-decoration-none" target="_blank">
              <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/918be028-1e3e-4e8e-ad22-ea6ac72d5bb2/air-max-270-shoes-DFFrlp.png" alt="MenLatest3" style="width:100%">
              <div class="caption"><p class="text-dark">Nike Air Max 270</p><p class="text-muted">$148 6% OFF</p></div>
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
            <h2 style = "font-weight: lighter">eShoe</h2>
          </div>
          <ul>
            <li><a href="#" class="text-decoration-none text-white">123 Fake Street, Ontario, Canada </a></li>
            <li><a href="#" class="text-decoration-none text-white">eShoe@email.com</a></li>
            <li><a href="#" class="text-decoration-none text-white">123-456-7890</a></li>
          </ul>
        </div>
        <div class="col-lg-3 mt-3">
          <h2 style = "font-weight: lighter"> Useful Links</h2>
          <ul>
            <li><a href="#" class="text-decoration-none text-white">Home</a></li>
            <li><a href="#" class="text-decoration-none text-white">About</a></li>
            <li><a href="#" class="text-decoration-none text-white">Help</a></li>
            <li><a href="#" class="text-decoration-none text-white">Contact</a></li>
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
