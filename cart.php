<?php
// Start the session 
session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Cart</title>

    <link rel="icon" href="./image/icon.png">
    <meta name="theme-color" content="#1a75ff">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">

    <!-- SweetAlert2 -->
    <link href="./CSS/sweetalert2.min.css" rel="stylesheet" type="text/css"/>


    <style>


  @media (min-width: 1024px) {
         
        .input-group {
            left: 13%;
        }
      
  }


.input-group {
     width: 117px;
     margin-left: 10%;
}

        li {
            color: Transparent;
            font-size: 20px;
        }
        .bg-skyblue {
            background-color: #1a75ff;
        }
        .nav-link {
            color: #1a75ff;
        }
        .nav-link:focus , .nav-link:hover {
            color: #1a75ff;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5%;
        }
        .form-control {
            margin-top: 2.5%;
        }
@media (min-width: 360px) and (max-width: 640px) {

            .form-control {
                margin-top: 0%;
            }
            .d-flex {
                margin-top: -3.5%;
            }

        }

         .flex-column {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .modal-header {
            display: flex;
            gap: 70px;
        }

        .nav-item {
            margin-top: 9%;
        }

        .form-control {
            width: 351px;
            border: none;
            border-radius: 20px;
            background-color: #fff;
            color: #000;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            box-shadow: none;
            margin-top: 0.5%;

        }

@media (min-width: 1440px) {

        .form-control {
            width: 365px;
            border: none;
            border-radius: 20px;
            background-color: #fff;
            color: #000;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            box-shadow: none;
            margin-top: 0.5%;

        }
  
}
  
@media (min-width: 768px) and (max-width: 1024px) {
     
        .form-control {
            width: 351px;
            border: none;
            border-radius: 20px;
            background-color: #fff;
            color: #000;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            box-shadow: none;
            margin-top: 0.5%;

        }
      
}
    
@media (min-width: 425px) and (max-width: 768px) {
  
        .form-control {
            width: 284px;
            border: none;
            border-radius: 20px;
            background-color: #fff;
            color: #000;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            box-shadow: none;
            margin-top: 0.5%;

        }
  
}
  
@media (min-width: 320px) and (max-width: 425px) {
  
        .form-control {
            width: 394px;
            border: none;
            border-radius: 20px;
            background-color: #fff;
            color: #000;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            box-shadow: none;
            margin-top: 0.5%;

        }

}

        .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
            color: #fff;
        }

        .dropdown-menu {
            border: none;
            border-radius: 20px;
            background-color: rgba(0,0,0,0.8);
            padding: 0.5rem;
            box-shadow: none;
            margin-left: -60px;
        }

        .dropdown-menu a {
            color: #fff;
            font-size: 1rem;
            padding: 0.5rem 1rem;
        }

        .dropdown-menu a:hover {
            background-color: rgba(255,255,255,0.2);
        }


        .cart-summary {
            position: relative;
            margin-bottom: 1.6rem;
            padding: 1.5rem;
            border: 1px solid #e7e7e7;
            background: #fff;
            width: 400px;
        }

        .product-image-container {
            margin-top: 27%;
            margin-left: 23%;
        }


@media (min-width: 360px) and (max-width: 640px) {

            .product-image-container {
                margin-top: 23%;
                margin-left: 0%;
            }

        }
        .product-image-container {
            position: relative;
            height: 80px;
            width: 80px;
        }
        .img-thumbnail {
            border-block-color: Transparent;
            border-left-color: Transparent;
            border-right-color: Transparent;
        }

        .input-group-append {
            position: relative;
            height: 10px;
            width: 300px;
        }
        .apply-coupon-btn {
            background-color: #4f1fff;
            color: #fff;
        }
        .input-group-2 {
            position: relative;
            width: 370px;
            height: 38px;
            display: flex;
        }
        .btn-outline-secondary {
            color: #1a75ff;
            border-radius: 70%;
        }
        .form-control {
            color: #1a75ff;
        }

        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #1a75ff;
            border-color: #6c757d;
        }

        .btn-outline-secondary:focus {
            box-shadow: none;
        }

        .red-ball {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: red;
        }

        th {
            text-align: center;
        }
        td {
            text-align: center;
        }


        .person-menu {
            border: none;
            border-radius: 20px;
            background-color: rgba(0,0,0,0.8);
            padding: 0.5rem;
            box-shadow: none;
            margin-left: -60px;
        }

        .person-menu a {
            color: #fff;
            font-size: 1rem;
            padding: 0.5rem 1rem;
        }

        .person-menu a:hover {
            background-color: rgba(255,255,255,0.2);
        }


        .offcanvas-header {
          background-color: #f8f9fa;
          border-bottom: 1px solid #dee2e6;
          color: black;
          padding: 1rem;
        }
        
        h5 {
          font-size: 1.2rem;
          margin-bottom: 0;
        }
        
        h6 {
          font-size: 1rem;
          font-weight: 400;
          margin-bottom: 0;
        }
        
        .btn-close {
          color: #212529;
          opacity: 1;
        }
        
        .offcanvas-body {
          padding: 1rem;
        }
        
        .card-img-top {
          display: block;
          margin-left: auto;
          margin-right: auto;
          max-width: 100%;
          height: auto;
        }
        
        .offcanvas {
          position: fixed;
          top: 0;
          bottom: 0;
          right: 0;
          z-index: 3;
          display: none;
          overflow-y: auto;
          outline: 0;
          padding: 0;
          background-color: #fff;
          box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }
        
        .offcanvas.show {
          display: block;
        }
        
        .offcanvas-header {
          width: 100%;  
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 0.5rem 1rem;
          border-bottom: 1px solid #e9ecef;
        }
        
        .offcanvas-header h1 {
          margin: 0;
          font-size: 1.5rem;
        }
        
        .offcanvas-body {
          padding: 0;
        }
        
        .offcanvas-end {
           width: 40%;
        }
 
@media (min-width: 1440px) {

.offcanvas-end {
    width: 92%;
}

.offcanvas-header {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
    border-bottom: 1px solid #e9ecef;
}

.modal-header {
    width: 100%;  
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
}

}

@media (min-width: 768px) and (max-width: 1024px) {

.offcanvas-end {
    width: 92%;
}

.offcanvas-header {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.5rem 1rem;
      border-bottom: 1px solid #e9ecef;
}

.modal-header {
      width: 100%;  
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem;
      border-bottom: 1px solid #e9ecef;
}



}

@media (min-width: 425px) and (max-width: 768px) {

.offcanvas-end {
    width: 92%;
}

.offcanvas-header {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
    border-bottom: 1px solid #e9ecef;
}

.modal-header {
    width: 100%;  
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
} 


}

@media (min-width: 320px) and (max-width: 375px) {

.offcanvas-end {
    width: 100%;
}

.offcanvas-header {
    width: 98%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
    border-bottom: 1px solid #e9ecef;
}

.modal-header {
    width: 34%;  
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
}



}

        .modal-header {
          width: 100%;  
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 1rem;
          border-bottom: 1px solid #e9ecef;
        }
        
        .modal-header h5 {
          margin: 0;
          font-size: 1.2rem;
        }
        
        .modal-header h6 {
          margin: 0;
          color: #6c757d;
          font-size: 1rem;
        }
        
        .modal-header img {
          margin-right: 1rem;
        }
        
        .btn-close {
          padding: 0.5rem;
          margin: -0.5rem -0.5rem -0.5rem auto;
          background: Transparent;
          border-color: Transparent;
          font-size: 20px;
        }

       .badge {
          position: absolute;
          top: -10px;
          right: -10px;
          font-size: 0.8em;
          font-weight: bold;
          padding: 0.4em 0.6em;
          text-decoration: none;
       }







        .pagination {
            list-style: none;
            display: flex;
            float: center;
            justify-content: center;
            padding: 0;
            margin: 0;
        }


        .pagination li {
            margin: 0 5px;
        }

        .pagination li a {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px;
            width: 50px;
            height: 50px;
            background-color: #fff;
            border: 1px solid #ddd;
            color: #333;
            text-decoration: none;
            border-radius: 50%;
        }

        .pagination li.active a  {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }


        footer {
            background-color: #1a75ff;
            padding: 80px 10px;
            height: 330px;
            margin-bottom: 0px;
            margin-top: 110px;

        }

        footer h5 {
            font-size: 18px;
            color: white;
            margin-bottom: 30px;
        }

        footer p {
            font-size: 14px;
            color: white;
            line-height: 1.5;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }

@media (min-width: 360px) and (max-width: 640px) {
            footer {
                background-color: #1a75ff;
                padding: 640px90px 0px;
                height: 600px;
                margin-bottom: 0px;
                margin-top: 0px;
            }

            footer h5 {
                font-size: 18px;
                color: white;
                margin-bottom: 30px;
            }

            footer p {
                font-size: 14px;
                color: white;
                line-height: 1.5;
            }

            footer a {
                color: #fff;
                text-decoration: none;
            }
            footer a:hover {
                text-decoration: underline;
            }
        }

    </style>

</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-skyblue" aria-label="Third navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./image/cart2.png" alt="" width="35" height="30" class="d-inline-block align-text-top">
            Dior Store
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarsExample03">
            <br>
            <form class="d-flex mx-auto">
            <input type="text" id="search-input" class="form-control" placeholder="Search products">
            </form>

            <ul class="d-flex justify-content-evenly">
                <li class="nav-item dropdown">
                <a class="nav-link position-relative" role="button" id="toggleButton" aria-controls="offcanvasRight">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                    <a href="#offcanvasRight" class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle ms-n1" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvasRight" aria-label="Favorites" id="favBadge">0</a>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-bag-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end person-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-left: -103px;">
                        <?php if (!isset($_SESSION['valid'])) { ?>
                        <li>
                            <a class="dropdown-item" href="Login.php">Login</a>
                        </li>
                        <?php } else { ?>
                        <li>
                            <a class="dropdown-item" href="#"><?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li>
                            <a id="username-item" class="dropdown-item" href="logout.php">Logout</a>
                        </li>
                        <?php } ?>
                    </ul>
 
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
      <div class="offcanvas-header">
        <h1 id="offcanvasRightLabel">Favorites</h1>
        <button type="button" class="btn-close text-reset" id="closeButton" aria-label="Close">
         <i class="fas fa-close"></i>
    
        </button>
      </div>

<div class="offcanvas-body">
    <?php
    // Assuming you have a database connection established
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    // Create a new PDO instance
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
        exit;
    }

    // Check if user is logged in
    $isLoggedIn = isset($_SESSION['valid']);

    // Only fetch favorites if logged in
    if ($isLoggedIn) {
        // Fetch favorites from the database using PDO
        $selectFavorites = "SELECT * FROM favorites";
        $favoritesResult = $pdo->query($selectFavorites);

        if ($favoritesResult && $favoritesResult->rowCount() > 0) {
            while ($row = $favoritesResult->fetch(PDO::FETCH_ASSOC)) {
                $id = $row["id"];
                $name = $row["name"];
                $price = $row["price"];
                $image = $row["image"];
    ?>
                <div class="modal-header text-center" id="<?php echo $id; ?>">
                    <img class="card-img-top" src="<?php echo $image; ?>" alt="Product Image" style="height: 60px; width: 60px;">
                    <div class="container">
                        <div class="row">
                            <h5 class="col"><?php echo $name; ?></h5>
                        </div>
                        <div class="row">
                            <h6 class="col">$<?php echo $price; ?></h6>
                        </div>
                    </div>
                    <button type="button" class="btn-close ms-auto" aria-label="Close" data-id="<?php echo $id; ?>">
                        <i class="fas fa-close"></i>
                    </button>
                </div>
    <?php
            }
        }
    }
    ?>
</div>
        
      </div>


    <br><br>


    <div class="container my-5">
        <h1 class="text-center">Shopping Cart</h1>

        <div class="container-fluid pt-5">
            <div class="row px-xl-5">
                <div class="col-md-12 table-responsive mb-5">
                    <table class="table">
                        <thead>
                            <tr class="table-primary">
                                <th></th>
                                <th>Product</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                         <?php
                        // Assuming you have a database connection established
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "ecommerce";

                        // Create a new PDO instance
                        try {
                            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        } catch (PDOException $e) {
                            echo "Database connection failed: " . $e->getMessage();
                            exit;
                        }

                        // Check if user is logged in
                        $isLoggedIn = isset($_SESSION['valid']);

                        // Only fetch cart if logged in
                        if ($isLoggedIn) {
                            // Fetch cart from the database using PDO
                            $selectFavorites = "SELECT * FROM cart";
                            $favoritesResult = $pdo->query($selectFavorites);

                            if ($favoritesResult && $favoritesResult->rowCount() > 0) {
                                while ($row = $favoritesResult->fetch(PDO::FETCH_ASSOC)) {
                                    $id = $row["id"];
                                    $product_name = $row["product_name"];
                                    $price = $row["price"];
                                    $size = $row["size"];
                                    $color = $row["color"];
                                    $quantity = $row["quantity"];
                                    $image = $row["image"];
                                    ?>

                                    <tr data-id="<?php echo $id; ?>">
                                        <td class="text-center align-middle">
                                            <figure class="product-image-container">
                                                <img src="<?php echo $image; ?>" alt="Product Image" class="img-thumbnail" />
                                            </figure>
                                        </td>
                                        <td class="text-center align-middle"><?php echo $product_name; ?></td>
                                        <td class="text-center align-middle">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="red-ball" style="width: 20px; height: 20px; border-radius: 50%; background-color: <?php echo $color; ?>"></div>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle"><?php echo $size; ?></td>
                                        <td class="text-center align-middle">$<?php echo $price; ?></td>
                                        <td class="text-center align-middle">
                                            <div class="input-group d-flex justify-content-center align-items-center">
                                                <button class="btn btn-outline-secondary btn-minus" type="button">-</button>
                                                <input type="number" value="<?php echo $quantity; ?>" class="form-control quantity" />
                                                <button class="btn btn-outline-secondary btn-plus" type="button">+</button>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">$<?php echo $price * $quantity; ?></td>
                                        <td class="text-center align-middle">
                                            <button class="btn btn-danger btn-sm delete" data-id="<?php echo $id; ?>">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>

                        <?php
                                }
                            }
                        }
                        ?>

                            
                        </tbody>
                    </table>
                    
                    <div class="pagination-container">
                        <ul class="pagination">
                        </ul>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

    <br><br>


    <br><br><br><br><br><br><br><br>

    <footer class="pt-4 bg-dark text-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel scelerisque nunc, et placerat metus.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5>Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p>
                        &copy; 2023 My Ecommerce Store. All Rights Reserved.
                    </p>
                    <ul class="list-unstyled">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- Add Font Awesome and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="./JavaScript/popper.min.js"></script>
    <script src="./JavaScript/bootstrap.min.js"></script>
    <script src="./JavaScript/bootstrap.bundle.min.js"></script>
    <script src="./JavaScript/jquery.min.js"></script>
    <script src="./JavaScript/sweetalert2.all.min.js"></script>

<script>
    // Get the badge element
    var badge = document.getElementById('favBadge');

    // Function to update the badge number
    function updateBadge() {
        // Get the number of items in the off-canvas menu
        var numItems = document.querySelectorAll('.offcanvas-body .modal-header').length;

        // Update the badge number
        badge.textContent = numItems;

        if (!isLoggedIn) {
            // Hide badge if not logged in
            badge.style.display = 'none';
            return;
        }

        // Hide the badge if there are no items or if the user is not logged in
        if (numItems === 0 || !isLoggedIn()) {
            badge.style.display = 'none';
        } else {
            badge.style.display = 'inline-block';
        }
    }

    // Function to check if the user is logged in
    function isLoggedIn() {
        // Replace this condition with your logic to check if the user is logged in
        // For example, you can use a session variable or local storage
        var isLoggedIn = <?php echo $isLoggedIn ? 'true' : 'false'; ?>;
        return isLoggedIn;
    }

    // Call the updateBadge function initially
    updateBadge();
</script>


<script>
   
let thisPage = 1;
let limit = 3;
let list = document.querySelectorAll(".table tbody > tr");

function loadItem() {
  let beginGet = limit * (thisPage - 1);
  let endGet = limit * thisPage - 1;
  let itemsToShow = false;

  list.forEach((item, key) => {
    if (key >= beginGet && key <= endGet) {
      item.style.display = 'table-row';
      itemsToShow = true;
    } else {
      item.style.display = 'none';
    }
  });

  if (!itemsToShow) {
    let message = document.createElement('tr');
    let td = document.createElement('td');
    td.setAttribute('colspan', '3');
    td.textContent = 'No items to display.';
    message.appendChild(td);
    message.classList.add('no-items');
    document.querySelector('.table tbody').appendChild(message);
  } else {
    let message = document.querySelector('.table tbody .no-items');
    if (message) {
      message.remove();
    }
  }

  listPage();
}

function listPage() {
  let count = Math.ceil(list.length / limit);
  let paginationList = document.querySelector('.pagination');
  paginationList.innerHTML = '';

  if (thisPage != 1) {
    let prev = document.createElement('li');
    prev.innerHTML = '<a href="#" onclick="changePage(' + (thisPage - 1) + ')">Prev</a>';
    paginationList.appendChild(prev);
  }

  for (i = 1; i <= count; i++) {
    let newPage = document.createElement('li');
    newPage.innerHTML = '<a href="#" onclick="changePage(' + i + ')">' + i + '</a>';
    if (i == thisPage) {
      newPage.classList.add('active');
    }
    paginationList.appendChild(newPage);
  }

  if (thisPage != count) {
    let next = document.createElement('li');
    next.innerHTML = '<a href="#" onclick="changePage(' + (thisPage + 1) + ')">Next</a>';
    paginationList.appendChild(next);
  }
}
function changePage(i) {
  thisPage = i;
  loadItem();
}

<?php if ($isLoggedIn) { ?>
    loadItem();
<?php } ?>
   
</script>

<script>
   
const toggleButton = document.getElementById('toggleButton');
const closeButton = document.getElementById('closeButton');
const offcanvas = document.getElementById('offcanvasRight');

toggleButton.addEventListener('click', function() {
  offcanvas.classList.add('show');
});

closeButton.addEventListener('click', function() {
  offcanvas.classList.remove('show');
});
   
</script>


   <script>
    const closeButton2 = document.querySelectorAll('.btn-close');
    closeButton2.forEach((button) => {
      button.addEventListener('click', () => {
        const modalHeader = button.closest('.modal-header');
        if (modalHeader) {
          const id = button.getAttribute('data-id');
          modalHeader.remove();

          // Send AJAX request to delete the favorite from the database
          const xhr = new XMLHttpRequest();
          xhr.open('POST', './PHP/close.php', true);
          xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
          xhr.onload = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
              // Handle the response if needed
            }
          };
          xhr.send('id=' + id);
        }
      });
    });
    </script>


    <script>
        function filterProducts() {
            // Get the input field and filter value
            const input = document.querySelector('input[type="search"]');
            const filter = input.value.toUpperCase();

            // Get the products container and all product cards
            const container = document.querySelector('#product-container');
            const cards = container.querySelectorAll('.card');

            // Loop through all product cards and hide/show them based on the filter
            cards.forEach(card => {
                const title = card.querySelector('.card-title').innerText.toUpperCase();
                if (title.includes(filter)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>


    <script>

        const loginItem = document.getElementById('login-item');
        const logoutItem = document.getElementById('logout-item');
        const usernameItem = document.getElementById('username-item');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        dropdownMenu.addEventListener('click', (event) => {
            if (event.target.textContent === 'Login') {
                const username = 'Logout';
                if (username) {
                    loginItem.classList.add('d-none');
                    logoutItem.classList.remove('d-none');
                    usernameItem.classList.remove('d-none');
                    usernameItem.querySelector('a').textContent = username;
                }
            } else if (event.target.textContent === 'Logout') {
                loginItem.classList.remove('d-none');
                logoutItem.classList.add('d-none');
                usernameItem.classList.add('d-none');
            }
        });

    </script>


    <script>
        let cart = [];
        let total = 0;
        const cartItems = document.querySelector(".cart-items");
        const totalPrice = document.querySelector(".total-price");
    

    
        function addToCart(name, price) {
            const existingItem = cart.find(item => item.name === name);
            if (existingItem) {
                existingItem.quantity++;
            } else {
                cart.push({
                    name, price, quantity: 1
                });
            }
            total += price;
        }
    
        const addToCartButtons = document.querySelectorAll(".btn-plus");
        addToCartButtons.forEach(button => {
            const productRow = button.closest("tr");
            const productName = productRow.querySelector("td:nth-child(2)").textContent;
            const productPrice = parseFloat(productRow.querySelector("td:nth-child(5)").textContent.slice(1));
            addToCart(productName, productPrice);
        });
    
        document.addEventListener("click", event => {
            if (event.target.classList.contains("btn-plus")) {
                const productRow = event.target.closest("tr");
                const productName = productRow.querySelector("td:nth-child(2)").textContent;
                const productPrice = parseFloat(productRow.querySelector("td:nth-child(5)").textContent.slice(1));
                addToCart(productName, productPrice);
            } else if (event.target.classList.contains("btn-minus")) {
                const productRow = event.target.closest("tr");
                const productName = productRow.querySelector("td:nth-child(2)").textContent;
                const existingItem = cart.find(item => item.name === productName);
                if (existingItem && existingItem.quantity > 1) {
                    existingItem.quantity--;
                    total -= existingItem.price;
                }
            } else if (event.target.classList.contains("delete")) {
                const button = event.target;
                const itemId = button.getAttribute("data-id");
    
                swal({
                    title: "Are you sure?",
                    text: "Do you want to delete this item?",
                    icon: "warning",
                    type: "warning",
                    confirmButtonText: "Yes",
                    showCancelButton: true
                }).then(result => {
                    if (result.value) {
                        swal("Item deleted!", "The item has been removed from your cart.", "success").then(() => {
                            const productRow = button.closest("tr");
                            productRow.remove();
    
                            // Send AJAX request to delete.php
                            const xhr = new XMLHttpRequest();
                            xhr.open("POST", "./PHP/delete.php", true);
                            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === XMLHttpRequest.DONE) {
                                    if (xhr.status === 200) {
                                        const response = JSON.parse(xhr.responseText);
                                        if (response.status === "success") {
                                            // Item deleted successfully
                                        } else {
                                            // Handle error
                                        }
                                    } else {
                                        // Handle error
                                    }
                                }
                            };
                            xhr.send("id=" + itemId);
                        });
                    }
                });
            }
        });
    </script>


<script>
    function updateQuantity() {
        const minusButtons = document.querySelectorAll('.btn-minus');
        const plusButtons = document.querySelectorAll('.btn-plus');

        minusButtons.forEach(button => {
            button.addEventListener('click', () => {
                const input = button.nextElementSibling;
                if (input.value > 1) {
                    input.value--;
                    updateTotal(button.closest('tr'));
                }
            });
        });

        plusButtons.forEach(button => {
            button.addEventListener('click', () => {
                const input = button.previousElementSibling;
                input.value++;
                updateTotal(button.closest('tr'));
            });
        });

        // Set initial quantity value
        const quantityInputs = document.querySelectorAll('.quantity');
        quantityInputs.forEach(input => {
            const initialQuantity = parseInt(input.value, 10);
            updateTotal(input.closest('tr'));
        });
    }

    function updateTotal(row) {
        const price = parseFloat(row.querySelector('td:nth-child(5)').textContent.replace('$', ''));
        const quantity = parseInt(row.querySelector('.quantity').value, 10);
        const rowTotal = (price * quantity).toFixed(2);
        row.querySelector('td:nth-child(7)').textContent = '$' + rowTotal;
    }

    // Call the updateQuantity function when the page loads
    window.addEventListener('load', updateQuantity);
</script> 

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get the offcanvas-body element
    var offcanvasBody = document.querySelector('.offcanvas-body');

    // Count the number of child elements in the offcanvas-body
    var favoritesCount = offcanvasBody.childElementCount;

    // Update the badge count
    updateBadge(favoritesCount);
});
</script>   
    
</body>
</html>