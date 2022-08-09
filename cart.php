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
    session_start();
    ?>
    <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="#" class="navbar-brand">eShoe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
				
				
         <ul class="navbar-nav mr-auto ml-auto">
                  <li class="nav-item"><a href="#" class="nav-link">Men<span class="sr-only">(current)</span></a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Women</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Kids</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Sale</a></li>
                </ul>

         <form class="d-flex w-auto">
          <input type="search" class="form-control" placeholder="Search" aria-label="Search"/>
          <button class="btn btn-dark btn-sm" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </button>
        </form>

		<ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <?php
                            if (isset($_SESSION['email'])) {
                                echo $_SESSION['email'];
                            } else {
                                echo "Account";
                            }
                            ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            if (isset($_SESSION['email'])) {
                                echo '<li><a class="dropdown-item" href="account.php">Account</a></li>';
                                echo '<li><a class="dropdown-item" href="logout.php">Log Out</a></li>';
                            } else {
                                echo '<li><a class="dropdown-item" href="login.php">Log In</a></li>';
                                echo '<li><a class="dropdown-item" href="signup.php">Sign Up</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="cart.php">Cart</a>
                    </li>
					</ul>
                </div>
            </div>
        </nav>
       <div class="container">
        <?php
        // Arrays to store loaded data
        $servername = "localhost";
        $username = "akram6_eshoe";
        $password = "Amf123456";
        $dbname = "akram6_eshoe";
        // Create connection
        $conn = new mysqli(
            $servername,
            $username,
            $password,
            $dbname
        );
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
         if (isset($_POST['product-delete']) and isset($_SESSION['user_id'])) {
        $sql = "DELETE FROM `order_items` WHERE id=" . $_POST['order_id'] . " AND email='" . $_SESSION['user_id'] . "'";
        $conn->query($sql);
    	} else if (isset($_POST['product-update']) and isset($_SESSION['user_id'])) {
        $sql = "UPDATE `project_cart` SET `quantity`=" . $_POST['product-quantity'] . " WHERE id=" . $_POST['product-id'] . " AND email='" . $_SESSION['email'] . "'";
        $conn->query($sql);
    	}

        // Store schedule data
        $sql = "SELECT item_id, user_id, quantity FROM orders WHERE email='" . $_SESSION['user_id'] .  "'";
        $total = 0;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $sql = $sql = "SELECT shoe_id, shoe_name, shoe_price, shoe_description, img FROM shoes WHERE shoe_id=" . $row['shoe_id'];
                $item = $conn->query($sql)->fetch_assoc();
              	$total+= $item['shoe_price'];
                echo '<br><div class="card mb-3">';
                <div class="row align-items-center">
                <div class="col-md-2">
                
                <img src="' . $item['shoe_image'] . '" class="img-fluid rounded-start" alt="' . $item['shoe_name'] . '">
                </div>
                <div class="col-md-10">
                <div class="card-body">
                <h6 class="card-title">' . $item['shoe_name'] . '</h6>
                <p class="card-text"><small class="text-muted">$' .   $item['price'] . '</small></p>
                <form action="" method="post">
                <div class="row mt-3">
                <div class="col-2 pe-2">
                <select class="form-select" name="product-quantity">';
                for ($x = 1; $x <= 10; $x++) {
                    if ($x === $row['quantity']) {
                        echo '<option value="' . $x . '" selected">' . $x . '</option>';
                    } else {
                        echo '<option value="' . $x . '">' . $x . '</option>';
                    }
                }
                echo '</select>
                </div>
                <div class="col-5 p-0">
                <button type="submit" name="product-update" class="btn btn-primary">Update Quantity</button>
                <button type="submit" name="product-delete" class="btn btn-danger">Delete Item</button>
                <input type="hidden" name="product-id" value="' . $row['shoe_id'] . '">
                
                </div>
                </div>
                
                </form>
                </div>
                </div>
                </div>
                </div>
                
              ';
              	
            }
            ?>
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

