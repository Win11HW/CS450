<?php

// Start the session 
session_start();

// Database connection info
$servername = "localhost";
$username = "root";  
$password = "";
$dbname = "ecommerce";

// Create connection
 $conn = new mysqli($servername, $username, $password); 

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$createDatabase = "CREATE DATABASE IF NOT EXISTS $dbname"; 
$conn->query($createDatabase);
$conn->select_db($dbname); // Create Favorites table if not exists 

// Create Favorites table if not exists
$createTable = "CREATE TABLE IF NOT EXISTS Favorites (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(200),
  price DECIMAL(10,2),
  image VARCHAR(200)
)";

$conn->query($createTable);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1a75ff">
    <link rel="icon" href="./image/icon.png">
    <title>Ecommerce</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/carousel.css">


    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">

    <!-- SweetAlert2 -->
    <link href="./CSS/sweetalert2.min.css" rel="stylesheet" type="text/css"/>

     <style>

        body{
            width:100%;
        }
    
    	.navbar-nav > li:not(:last-child) {
            margin-right: 10px;
        }
        .navbar-nav {
            margin-top: -2.5%;
            margin-right: -2%;
        }
        .dropdown-toggle::after {
           color: transparent;   
        }

    .text-white {
        height: 200px;
        width: 100%;
    }

    .button {
       margin-right: 0%;
    }

    .mb-3 {
       margin-left: -1%;
    }
    
@media (min-width: 1440px) {

    .text-white {
        height: 201px;
        width: 1285px;
    }
    
    #image-sale {
        height: 204px;
    }
    
    .mb-3 {
       margin-left: 0%;
    }

    .button {
       margin-right: 0%;
    }

}

@media (min-width: 768px) and (max-width: 1024px) {
   
    .text-white {
        height: 189px; 
        width: 922px;
    }

    #image-sale {
        height: 187px;
    }

    .mb-3 {
       margin-left: 0%;
    }

    .button {
       margin-right: 0%;
    }
    
}
  
@media (min-width: 425px) and (max-width: 768px) {

    .text-white {
        height: 183px; 
        width: 684px;
    }

    #image-sale {
        height: 204px;
    }

    .mb-3 {
        margin-left: 0%;
    }

    .button {
       margin-right: 0%;
    }

}

@media (min-width: 325px) and (max-width: 477px) {

        .text-white {
            height: 177px; 
            width: 385px;
        }

        #image-sale {
           height: 175px;
        }

        .mb-3 {
           margin-left: 0%;
        }

        .button {
           margin-right: 0%;
        }

}

@media (min-width: 320px) and (max-width: 325px) {

        .text-white {
            height: 177px; 
            width: 337px;
        }

        #image-sale {
           height: 175px;
        }

        .mb-3 {
           margin-left: 0%;
        }

        .button {
           margin-right: 0%;
        }

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
            margin-bottom: 1.3%;
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

        .card-title-2 {
            font-size: 55px;
            color: white;
        }

 
        #item {
            height: 400px;
        }



@media (min-width: 360px) and (max-width: 640px) {

            .form-control {
                margin-top: 0%;
            }
            .justify-content-evenly {
                margin-top: -3.5%;
            }
            .card-title-2 {
                font-size: 25px;
                color: white;
                margin-top: 5%;
            }
            #item {
                height: 330px;
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

        .carousel-item {
            height: 100%;
        }

        .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
            color: #fff;
        }


        .btn-love {
            position: absolute;
            top: 0;
            right: 0;
            margin: 1rem;
            z-index: 1;
        }
        .btn-love i {
            font-size: 2rem;
            color: #dc3545;
        }
        .btn-love i.fill {
            color: red;
        }
        .flex-column {
            display: flex;
            flex-direction: column;
        }
        .cards-wrapper {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .card {
            margin: 0 0.1em;
            border-radius: 0;
        }

        .card img {
            max-width: 100%;
            max-height: 100%;
        }

        .btn-outline-secondary {
            color: #1a75ff;
            border-color: #6c757d;
        }

        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #1a75ff;
            border-color: #6c757d;
        }

        .btn-outline-secondary:focus {
            box-shadow: none;
        }

        .rounded-circle {
            border-radius: 50%;
            padding: 0.5rem 0.6rem;
            font-size: 1.2rem;
            line-height: 1.2;
            height: 3rem;
            width: 3rem;
            margin-right: 10px;
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
          z-index: 1033;
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

        .modal-header {
          width: 100%;  
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 1rem;
          border-bottom: 1px solid #e9ecef;
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





        footer {
            background-color: #1a75ff;
            padding: 80px 10px;
            height: 330px;
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
      
      
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="carousel-item active" id="item">
                <form id="productForm28" action="shopping.php" method="POST">
                    <img src="./image/slide-10.png" alt="Slide 1" style="width: 100%; height: 450px;">
                    <div class="card-img-overlay" onclick="submitForm('productForm28')">
                        <br><br>
                        <h5 class="card-title-2">For Summer</h5>
                        <h3 class="card-title-2">Shirt For Man </h3>
                        <h3 class="card-title-2">Sale 30% OFF</h3>
                    </div>
            
                    <input type="hidden" name="id" value="4">
                    <input type="hidden" name="name" value="OBLIQUE OVERSHIRT">
                    <input type="hidden" name="image" value="./image/tshirt-10.png">
                    <input type="hidden" name="image2" value="./image/tshirt-11.png">
                    <input type="hidden" name="image3" value="./image/tshirt-12.png">
                    <input type="hidden" name="price" value="28.99">
                    <input type="hidden" name="details" value="The overshirt is a modern hallmark piece. Crafted in raw blue cotton denim, it has a Dior Oblique motif printed on the interior. The style can pair with the matching jeans to complete the look.">
                </form>
            </div>
            

            <div class="carousel-item" id="item">
                <form id="productForm29" action="shopping 2.php" method="POST">
                <img src="./image/slide-11.png" alt="Slide 1" style="width: 100%; height: 450px;">
                <div class="card-img-overlay" onclick="submitForm('productForm29')">
                    <br><br>
                    <h5 class="card-title-2">For Summer</h5>
                    <h3 class="card-title-2">  Dress For Womens</h3>
                    <h3 class="card-title-2">Sale 30% OFF</h3>
                </div>

                    <input type="hidden" name="id" value="14">
                    <input type="hidden" name="name" value="DIORIVIERA MID-LENGTH DRESS">
                    <input type="hidden" name="image" value="./image/dress-40.png">
                    <input type="hidden" name="image2" value="./image/dress-41.png">
                    <input type="hidden" name="image3" value="./image/dress-42.png">
                    <input type="hidden" name="price" value="39.99">
                    <input type="hidden" name="details" value="Part of the Dioriviera capsule collection, the mid-length dress reframes the House's hallmark silhouette with the collection's codes of elegance. Crafted in pink and gray cotton-blend lace, it presents the Toile de Jouy Sauvage motif, offering a new take on the iconic House pattern. It features a flared silhouette enhanced by transparent pleats, as well as a bow and frills that define the waist. The dress will effortlessly affirm a sophisticated look.">
                </form>
            </div>

            <div class="carousel-item" id="item">
                <form id="productForm30" action="shopping 3.php" method="POST">
                <img src="./image/slide-12.png" alt="Slide 1" style="width: 100%; height: 450px;">
                <div class="card-img-overlay" onclick="submitForm('productForm30')">
                    <br><br>
                    <h5 class="card-title-2">For Summer</h5>
                    <h3 class="card-title-2">  Shirt For Kids</h3>
                    <h3 class="card-title-2">Sale 30% OFF</h3>
                </div>

                    <input type="hidden" name="id" value="20">
                    <input type="hidden" name="name" value="KID'S T-SHIRT">
                    <input type="hidden" name="image" value="./image/Kids-4.png">
                    <input type="hidden" name="image2" value="./image/Kids-5.png">
                    <input type="hidden" name="image3" value="./image/Kids-6.png">
                    <input type="hidden" name="price" value="28.99">
                    <input type="hidden" name="details" value="The short-sleeved cotton jersey T-shirt is a comfortable and soft creation. Crafted in ivory cotton jersey, it is embellished with a raised pale gold-tone metallic thread 'DIOR' embroidery. The style has a regular fit with a ribbed round neck, and can be paired with a pinafore dress for a casual look.">
                </form>

            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="container my-4">


        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <h3 class="mb-3"> Means Clothes </h3>
                    </div>
                    <div class="d-flex justify-content-between align-items-center button">
                        <button class="btn btn-outline-secondary rounded-circle" href="#carouselExampleControls" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-outline-secondary rounded-circle" href="#carouselExampleControls" role="button" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <div class="carousel-item active">
                    <div class="cards-wrapper">



<div class="card">

    <form id="productForm1" action="shopping.php" method="POST">
    <img class="card-img-top" src="./image/tshirt.png" alt="Product Image" onclick="submitForm('productForm1')">

                <input type="hidden" name="id" value="1">
                <input type="hidden" name="name" value="INTERLACED SHIRT">
                <input type="hidden" name="image" value="./image/tshirt.png">
                <input type="hidden" name="image2" value="./image/tshirt-2.png">
                <input type="hidden" name="image3" value="./image/tshirt-3.png">
                <input type="hidden" name="price" value="51.99">
                <input type="hidden" name="details" value="New for Winter 2023, the shirt showcases the CD Interlaced embroidery, offering a new intertwined take on the House initials with the collection's graphic inspiration. Crafted in white cotton poplin, it has a chest patch pocket that frames and highlights the contrasting CD Interlaced signature. Comfortable and easy to wear, the classic shirt will complete an elegant look with tailored pants, or a casual look with jeans.">
    </form>


    <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
        <button class="btn btn-love" data-toggle="collapse" name="heart" value="1" onclick="toggleLove('love1');">
            <i id="love1" class="bi bi-heart"></i>
        </button>
        <input type="hidden" name="id" value="1">
        <input type="hidden" name="name" value="INTERLACED SHIRT">
        <input type="hidden" name="price" value="51.99">
        <input type="hidden" name="image" value="./image/tshirt.png">
    </form>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-2">INTERLACED SHIRT</h5>
            <h5 class="card-title mb-0">$51.99</h5>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
        </div>
    </div>
</div>

<div class="card">

    <form id="productForm2" action="shopping.php" method="POST">
    <img class="card-img-top" src="./image/tshirt-4.png" alt="Product Image" onclick="submitForm('productForm2')">

                <input type="hidden" name="id" value="2">
                <input type="hidden" name="name" value="OVERSHIRT-FIT T-SHIRT">
                <input type="hidden" name="image" value="./image/tshirt-4.png">
                <input type="hidden" name="image2" value="./image/tshirt-5.png">
                <input type="hidden" name="image3" value="./image/tshirt-6.png">
                <input type="hidden" name="price" value="47.99">
                <input type="hidden" name="details" value="New for Winter 2023, the T-shirt showcases the CD Interlaced embroidery on the chest, offering a new intertwined take on the House initials with the collection's graphic inspiration. Crafted in gray cotton jersey, it features a relaxed fit and ribbed crew neck. The T-shirt will pair effortlessly with any jeans or casual attire.">
    </form>

    <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
        <button class="btn btn-love" data-toggle="collapse" name="heart" value="2" onclick="toggleLove('love2');">
            <i id="love2" class="bi bi-heart"></i>
        </button>
        <input type="hidden" name="id" value="2">
        <input type="hidden" name="name" value="OVERSHIRT-FIT T-SHIRT">
        <input type="hidden" name="price" value="47.99">
        <input type="hidden" name="image" value="./image/tshirt-4.png">
    </form>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-2">OVERSHIRT-FIT T-SHIRT</h5>
            <h5 class="card-title mb-0">$47.99</h5>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>
        </div>
    </div>
</div>


                        <div class="card d-none d-md-block">

                          <form id="productForm3" action="shopping.php" method="POST">
                            <img class="card-img-top" src="./image/tshirt-7.png" alt="Product Image" onclick="submitForm('productForm3')">

                                <input type="hidden" name="id" value="3">
                                <input type="hidden" name="name" value="OVERSHIRT T-SHIRT">
                                <input type="hidden" name="image" value="./image/tshirt-7.png">
                                <input type="hidden" name="image2" value="./image/tshirt-8.png">
                                <input type="hidden" name="image3" value="./image/tshirt-9.png">
                                <input type="hidden" name="price" value="29.99">
                                <input type="hidden" name="details" value="The overshirt highlights the hallmark Dior Oblique motif in a version inspired by ancestral Japanese weaving techniques. Crafted in blue and white cotton denim, it features an all-over bleached effect and selvedge details. The overshirt can be worn with matching jeans to complete the look.">
                          </form>
                                                    
                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="3" onclick="toggleLove('love3');">
                                    <i id="love3" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="3">
                                <input type="hidden" name="name" value="OVERSHIRT T-SHIRT">
                                <input type="hidden" name="price" value="29.99">
                                <input type="hidden" name="image" value="./image/tshirt-7.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">OVERSHIRT T-SHIRT</h5>

                                    <h5 class="card-title mb-0">$29.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">

                            <form id="productForm4" action="shopping.php" method="POST">
                            <img class="card-img-top" src="./image/tshirt-10.png" alt="Product Image" onclick="submitForm('productForm4')">

                                <input type="hidden" name="id" value="4">
                                <input type="hidden" name="name" value="OBLIQUE OVERSHIRT">
                                <input type="hidden" name="image" value="./image/tshirt-10.png">
                                <input type="hidden" name="image2" value="./image/tshirt-11.png">
                                <input type="hidden" name="image3" value="./image/tshirt-12.png">
                                <input type="hidden" name="price" value="28.99">
                                <input type="hidden" name="details" value="The overshirt is a modern hallmark piece. Crafted in raw blue cotton denim, it has a Dior Oblique motif printed on the interior. The style can pair with the matching jeans to complete the look.">
                             </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="4" onclick="toggleLove('love4');">
                                    <i id="love4" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="4">
                                <input type="hidden" name="name" value="OBLIQUE OVERSHIRT">
                                <input type="hidden" name="price" value="28.99">
                                <input type="hidden" name="image" value="./image/tshirt-10.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">OBLIQUE OVERSHIRT</h5>

                                    <h5 class="card-title mb-0">$28.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <form id="productForm5" action="shopping.php" method="POST">
                            <img class="card-img-top" src="./image/tshirt-13.png" alt="Product Image" onclick="submitForm('productForm5')">

                                <input type="hidden" name="id" value="5">
                                <input type="hidden" name="name" value="ZIPPED BLOUSON">
                                <input type="hidden" name="image" value="./image/tshirt-13.png">
                                <input type="hidden" name="image2" value="./image/tshirt-14.png">
                                <input type="hidden" name="image3" value="./image/tshirt-15.png">
                                <input type="hidden" name="price" value="61.99">
                                <input type="hidden" name="details" value="The zipped Varsity blouson has a contrasting silhouette thanks to its varied materials, colors and textures. Crafted in black calfskin, it stands out through its technical fabric sleeves and ribbed finishes with Cannage embroidery. A black Dior patch highlights the chest, while patch pockets adorn the front. Featuring a versatile aesthetic, the zipped blouson will pair effortlessly with casual attire.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="5" onclick="toggleLove('love5');">
                                    <i id="love5" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="5">
                                <input type="hidden" name="name" value="ZIPPED BLOUSON">
                                <input type="hidden" name="price" value="61.99">
                                <input type="hidden" name="image" value="./image/tshirt-13.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">ZIPPED BLOUSON</h5>

                                    <h5 class="card-title mb-0">$61.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                                                    
                            <form id="productForm6" action="shopping.php" method="POST">
                            <img class="card-img-top" src="./image/tshirt-16.png" alt="Product Image" onclick="submitForm('productForm6')">

                                <input type="hidden" name="id" value="6">
                                <input type="hidden" name="name" value="TEARS RELAXED-FIT SHIRT">
                                <input type="hidden" name="image" value="./image/tshirt-16.png">
                                <input type="hidden" name="image2" value="./image/tshirt-17.png">
                                <input type="hidden" name="image3" value="./image/tshirt-18.png">
                                <input type="hidden" name="price" value="24.99">
                                <input type="hidden" name="details" value="Part of the DIOR TEARS collaboration, the polo shirt showcases the Peace Sign motif designed in delicate cotton flowers and enhanced by the Dior Tears signature. Crafted in white slub cotton jersey, it features stripes on the sleeve edges as well as a classic buttoned collar. Both modern and timeless, the polo shirt will pair effortlessly with a favorite pair of jeans or Bermuda shorts.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="6" onclick="toggleLove('love6');">
                                    <i id="love6" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="6">
                                <input type="hidden" name="name" value="TEARS RELAXED-FIT SHIRT">
                                <input type="hidden" name="price" value="24.99">
                                <input type="hidden" name="image" value="./image/tshirt-16.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">TEARS RELAXED-FIT SHIRT</h5>

                                    <h5 class="card-title mb-0">$24.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                                                   
                            <form id="productForm7" action="shopping.php" method="POST">
                            <img class="card-img-top" src="./image/tshirt-19.png" alt="Product Image" onclick="submitForm('productForm7')">

                                <input type="hidden" name="id" value="7">
                                <input type="hidden" name="name" value="BOMBER JACKET">
                                <input type="hidden" name="image" value="./image/tshirt-19.png">
                                <input type="hidden" name="image2" value="./image/tshirt-20.png">
                                <input type="hidden" name="image3" value="./image/tshirt-21.png">
                                <input type="hidden" name="price" value="21.99">
                                <input type="hidden" name="details" value="New for Winter 2023, the bomber jacket is crafted in brown cotton velvet with a checkered effect. Its modern look is enhanced by the Dior signature on the ribbed edges. Featuring a buttoned closure and spread collar, the bomber jacket can be styled with any casual attire.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="7" onclick="toggleLove('love7');">
                                    <i id="love7" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="7">
                                <input type="hidden" name="name" value="BOMBER JACKET">
                                <input type="hidden" name="price" value="21.99">
                                <input type="hidden" name="image" value="./image/tshirt-19.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">BOMBER JACKET</h5>

                                    <h5 class="card-title mb-0">$21.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <form id="productForm8" action="shopping.php" method="POST">
                            <img class="card-img-top" src="./image/tshirt-22.png" alt="Product Image" onclick="submitForm('productForm8')">

                                <input type="hidden" name="id" value="8">
                                <input type="hidden" name="name" value="POBLIQUE T-SHIRT">
                                <input type="hidden" name="image" value="./image/tshirt-22.png">
                                <input type="hidden" name="image2" value="./image/tshirt-23.png">
                                <input type="hidden" name="image3" value="./image/tshirt-24.png">
                                <input type="hidden" name="price" value="15.99">
                                <input type="hidden" name="details" value="The off-white terry cotton T-shirt pays tribute to the hallmark Dior Oblique motif with a tonal jacquard. The ribbed crew neck has a V-topstitching detail for a casual effect. The relaxed T-shirt may be paired with jeans or track pants for an elevated look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="8" onclick="toggleLove('love8');">
                                    <i id="love8" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="8">
                                <input type="hidden" name="name" value="POBLIQUE T-SHIRT">
                                <input type="hidden" name="price" value="15.99">
                                <input type="hidden" name="image" value="./image/tshirt-22.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">POBLIQUE T-SHIRT</h5>

                                    <h5 class="card-title mb-0">$15.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">

                            <form id="productForm9" action="shopping.php" method="POST">
                            <img class="card-img-top" src="./image/tshirt-25.png" alt="Product Image" onclick="submitForm('productForm9')">

                                <input type="hidden" name="id" value="9">
                                <input type="hidden" name="name" value="OBLIQUE T-SHIRT">
                                <input type="hidden" name="image" value="./image/tshirt-25.png">
                                <input type="hidden" name="image2" value="./image/tshirt-26.png">
                                <input type="hidden" name="image3" value="./image/tshirt-27.png">
                                <input type="hidden" name="price" value="48.99">
                                <input type="hidden" name="details" value="The off-white terry cotton T-shirt pays tribute to the hallmark Dior Oblique motif with a tonal jacquard. The ribbed crew neck has a V-topstitching detail for a casual effect. The relaxed T-shirt may be paired with jeans or track pants for an elevated look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="9" onclick="toggleLove('love9');">
                                    <i id="love9" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="9">
                                <input type="hidden" name="name" value="OBLIQUE T-SHIRT">
                                <input type="hidden" name="price" value="48.99">
                                <input type="hidden" name="image" value="./image/tshirt-25.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">OBLIQUE T-SHIRT</h5>

                                    <h5 class="card-title mb-0">$48.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card text-white">
            <img src="./image/Means2-img.png" class="card-2 mw-100" id="image-sale" alt="...">
            <a href="details card.php">
            <div class="card-img-overlay">
                <h5 class="card-title" style="color:white;">For Summer</h5>
                <h3 class="card-text" style="color:white;">Means Clothes</h3>
                <h3 class="card-text" style="color:white;">Sale 30% OFF</h3>
                <button type="button" class="btn btn-outline-primary rounded-pill" href="#">Shop Now</button>
            </div>
            </a>
        </div>

        <br><br><br>


        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <h3 class="mb-3">
                            Womens Clothes </h3>
                    </div>
                    <div class="d-flex justify-content-between align-items-center button">
                        <button class="btn btn-outline-secondary rounded-circle" href="#carouselExampleControls2" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-outline-secondary rounded-circle" href="#carouselExampleControls2" role="button" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <div class="card">

                            <form id="productForm10" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress.png" alt="Product Image" onclick="submitForm('productForm10')">

                                <input type="hidden" name="id" value="10">
                                <input type="hidden" name="name" value="SHORT FLARED DRESS">
                                <input type="hidden" name="image" value="./image/dress.png">
                                <input type="hidden" name="image2" value="./image/dress-2.png">
                                <input type="hidden" name="image3" value="./image/dress-3.png">
                                <input type="hidden" name="price" value="70.99">
                                <input type="hidden" name="details" value="The shirt dress displays the Wildior motif, lending a modern touch to the Camouflage pattern from House archives. Crafted in ivory and deep blue cotton and silk poplin, it features a flared silhouette that's fitted at the waist. Embellished with a spread collar, the dress can be coordinated with other Wildior creations to complete the look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="10" onclick="toggleLove('love10');">
                                    <i id="love10" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="10">
                                <input type="hidden" name="name" value="SHORT FLARED DRESS">
                                <input type="hidden" name="price" value="70.99">
                                <input type="hidden" name="image" value="./image/dress.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">SHORT FLARED DRESS</h5>

                                    <h5 class="card-title mb-0">$70.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            
                            <form id="productForm11" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-4.png" alt="Product Image" onclick="submitForm('productForm11')">

                                <input type="hidden" name="id" value="11">  
                                <input type="hidden" name="name" value="BELTED DRESS">
                                <input type="hidden" name="image" value="./image/dress-4.png">
                                <input type="hidden" name="image2" value="./image/dress-5.png">
                                <input type="hidden" name="image3" value="./image/dress-6.png">
                                <input type="hidden" name="price" value="44.99">
                                <input type="hidden" name="details" value="A hallmark Dior silhouette, the mid-length dress displays the red multicolor Florilegio motif, showcasing a bucolic, colorful and elegant floral universe. Crafted in white cotton and silk, it has a flared cut enhanced by a tonal belt with a metallic buckle highlighting the waist. The short puff sleeves are embellished with Dior Tribales cufflinks that have a resin pearl with CD signature inspired by the iconic House earring. The dress can be coordinated with other Florilegio creations to complete the look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="11" onclick="toggleLove('love11');">
                                    <i id="love11" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="11">
                                <input type="hidden" name="name" value="BELTED DRESS">
                                <input type="hidden" name="price" value="44.99">
                                <input type="hidden" name="image" value="./image/dress-4.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">BELTED DRESS</h5>

                                    <h5 class="card-title mb-0">$44.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">

                            <form id="productForm12" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-7.png" alt="Product Image" onclick="submitForm('productForm12')">

                                <input type="hidden" name="id" value="12">                        
                                <input type="hidden" name="name" value="Women drape skirt">
                                <input type="hidden" name="image" value="./image/dress-7.png">
                                <input type="hidden" name="image2" value="./image/dress-8.png">
                                <input type="hidden" name="image3" value="./image/dress-9.png">
                                <input type="hidden" name="price" value="30.99">
                                <input type="hidden" name="details" value="Mid-Length Skirt Black Wool and Silk, lending a modern touch to the Camouflage pattern from House archives. Crafted in ivory and deep blue cotton and silk poplin, it features a flared silhouette that's fitted at the waist. Embellished with a spread collar, the dress can be coordinated with other Wildior creations to complete the look.">
                            </form>
                         
                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="12" onclick="toggleLove('love12');">
                                    <i id="love12" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="12">
                                <input type="hidden" name="name" value="Women drape skirt">
                                <input type="hidden" name="price" value="30.99">
                                <input type="hidden" name="image" value="./image/dress-7.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">Women drape skirt</h5>

                                    <h5 class="card-title mb-0">$30.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">

                            <form id="productForm13" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-10.png" alt="Product Image" onclick="submitForm('productForm13')">

                                <input type="hidden" name="id" value="13">
                                <input type="hidden" name="name" value="SHORT BELTED DRESS">
                                <input type="hidden" name="image" value="./image/dress-10.png">
                                <input type="hidden" name="image2" value="./image/dress-11.png">
                                <input type="hidden" name="image3" value="./image/dress-12.png">
                                <input type="hidden" name="price" value="50.99">
                                <input type="hidden" name="details" value="The cropped shirt dress combines elegance and modernity. Crafted in pink lightweight wool and silk, it is distinguished by a flared cut embellished with Dior Tribales buttons, showcasing a resin pearl and CD signature inspired by the iconic House earring. Completed with a tonal belt highlighting the waist, the short-sleeved dress will create contemporary, refined looks.">
                            </form>
                            
                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="13" onclick="toggleLove('love13');">
                                    <i id="love13" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="13">
                                <input type="hidden" name="name" value="SHORT BELTED DRESS">
                                <input type="hidden" name="price" value="50.99">
                                <input type="hidden" name="image" value="./image/dress-10.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">SHORT BELTED DRESS</h5>

                                    <h5 class="card-title mb-0">$50.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <form id="productForm14" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-13.png" alt="Product Image" onclick="submitForm('productForm14')">

                                <input type="hidden" name="id" value="14">
                                <input type="hidden" name="name" value="REGULAR-FIT DRESS">
                                <input type="hidden" name="image" value="./image/dress-13.png">
                                <input type="hidden" name="image2" value="./image/dress-14.png">
                                <input type="hidden" name="image3" value="./image/dress-15.png">
                                <input type="hidden" name="price" value="35.99">
                                <input type="hidden" name="details" value="The mid-length dress showcases the black and white Houndstooth motif. Crafted in wool knit, it presents a regular silhouette featuring a round neck and short sleeves. Embroidered with a bee emblem, the dress can be worn with other Houndstooth creations from the season.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="14" onclick="toggleLove('love14');">
                                    <i id="love14" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="14">
                                <input type="hidden" name="name" value="REGULAR-FIT DRESS">
                                <input type="hidden" name="price" value="35.99">
                                <input type="hidden" name="image" value="./image/dress-13.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">REGULAR-FIT DRESS</h5>

                                    <h5 class="card-title mb-0">$35.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">

                            <form id="productForm15" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-16.png" alt="Product Image" onclick="submitForm('productForm15')">

                                <input type="hidden" name="id" value="15">
                                <input type="hidden" name="name" value="MID-LENGTH DRESS">
                                <input type="hidden" name="image" value="./image/dress-16.png">
                                <input type="hidden" name="image2" value="./image/dress-17.png">
                                <input type="hidden" name="image3" value="./image/dress-18.png">
                                <input type="hidden" name="price" value="49.99">
                                <input type="hidden" name="details" value="Dior's hallmark mid-length silhouette is offered in black matte technical fabric with a graphic motif. The flared cut is enhanced by a tonal belt highlighting the waist, as well as a V-neckline and short sleeves that lend a sophisticated touch. The dress will complete modern and refined looks that are resolutely Dior.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="15" onclick="toggleLove('love15');">
                                    <i id="love15" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="15">
                                <input type="hidden" name="name" value="MID-LENGTH DRESS">
                                <input type="hidden" name="price" value="49.99">
                                <input type="hidden" name="image" value="./image/dress-16.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">MID-LENGTH DRESS</h5>

                                    <h5 class="card-title mb-0">$49.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">

                            <form id="productForm16" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-19.png" alt="Product Image" onclick="submitForm('productForm16')">

                                <input type="hidden" name="id" value="16">
                                <input type="hidden" name="name" value="MID-LENGTH SHIRT DRESS">
                                <input type="hidden" name="image" value="./image/dress-19.png">
                                <input type="hidden" name="image2" value="./image/dress-20.png">
                                <input type="hidden" name="image3" value="./image/dress-21.png">
                                <input type="hidden" name="price" value="25.99">
                                <input type="hidden" name="details" value="The mid-length shirt dress embodies the House's modernity and elegance. Crafted in gray silk, it reveals a flared silhouette enhanced by a thin tonal belt and pleats highlighting the waist. The short-sleeved dress can be worn with a pair of sandals from this season to complete a modern and refined look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="16" onclick="toggleLove('love16');">
                                    <i id="love16" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="16">
                                <input type="hidden" name="name" value="MID-LENGTH SHIRT DRESS">
                                <input type="hidden" name="price" value="25.99">
                                <input type="hidden" name="image" value="./image/dress-19.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">MID-LENGTH SHIRT DRESS</h5>

                                    <h5 class="card-title mb-0">$25.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <form id="productForm17" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-22.png" alt="Product Image" onclick="submitForm('productForm17')">

                                <input type="hidden" name="id" value="17">
                                <input type="hidden" name="name" value="DIORIVIERA DRESS">
                                <input type="hidden" name="image" value="./image/dress-22.png">
                                <input type="hidden" name="image2" value="./image/dress-23.png">
                                <input type="hidden" name="image3" value="./image/dress-24.png">
                                <input type="hidden" name="price" value="78.99">
                                <input type="hidden" name="details" value="Part of the Dioriviera capsule collection, the dress highlights the Toile de Jouy Reverse motif, a variation of the iconic House motif with a play on reversed colors. Crafted in gray and pink cotton muslin, it features a flared silhouette enhanced by transparent pleats, as well as frills and a tie that define the waist. The mid-length dress will create an effortlessly sophisticated look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="17" onclick="toggleLove('love17');">
                                    <i id="love17" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="17">
                                <input type="hidden" name="name" value="DIORIVIERA DRESS">
                                <input type="hidden" name="price" value="78.99">
                                <input type="hidden" name="image" value="./image/dress-22.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">DIORIVIERA DRESS</h5>

                                    <h5 class="card-title mb-0">$78.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">

                            <form id="productForm18" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-25.png" alt="Product Image" onclick="submitForm('productForm18')">

                                <input type="hidden" name="id" value="18">
                                <input type="hidden" name="name" value="LONG BELTED DRESS">
                                <input type="hidden" name="image" value="./image/dress-25.png">
                                <input type="hidden" name="image2" value="./image/dress-26.png">
                                <input type="hidden" name="image3" value="./image/dress-27.png">
                                <input type="hidden" name="price" value="50.99">
                                <input type="hidden" name="details" value="The long dress is adorned with Pietro Ruffo's Toile de Jouy Voyage motif, setting Mr. Dior's iconic pattern in the heart of Indian flora and fauna. Crafted in Peela cotton voile, it presents a flared silhouette enhanced by an officer collar and tonal belt tied to highlight the waist. The long-sleeved dress can be worn with other Toile de Jouy Voyage creations to complete the look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="18" onclick="toggleLove('love18');">
                                    <i id="love18" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="18">
                                <input type="hidden" name="name" value="LONG BELTED DRESS">
                                <input type="hidden" name="price" value="50.99">
                                <input type="hidden" name="image" value="./image/dress-25.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">LONG BELTED DRESS</h5>

                                    <h5 class="card-title mb-0">$50.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card text-white">
            <img src="./image/image2.png" class="card-2 mw-100" id="image-sale" alt="...">
            <a href="details card 2.php">
            <div class="card-img-overlay">
                <h5 class="card-title" style="color:white;">For Summer</h5>
                <h3 class="card-text" style="color:white;">Womens Dress</h3>
                <h3 class="card-text" style="color:white;">Sale 30% OFF</h3>
                <button type="button" class="btn btn-outline-danger rounded-pill" href="#">Shop Now</button>
            </div>
            </a> 
        </div>


        <br><br><br>


        <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <h3 class="mb-3"> Kids Clothes </h3>
                    </div>
                    <div class="d-flex justify-content-between align-items-center button">
                        <button class="btn btn-outline-secondary rounded-circle" href="#carouselExampleControls3" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-outline-secondary rounded-circle" href="#carouselExampleControls3" role="button" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <div class="card">

                            <form id="productForm19" action="shopping 3.php" method="POST">
                            <img class="card-img-top" src="./image/Kids.png" alt="Product Image" onclick="submitForm('productForm19')">

                                <input type="hidden" name="id" value="19">
                                <input type="hidden" name="name" value="KID'S SHORT">
                                <input type="hidden" name="image" value="./image/Kids.png">
                                <input type="hidden" name="image2" value="./image/Kids-2.png">
                                <input type="hidden" name="image3" value="./image/Kids-3.png">
                                <input type="hidden" name="price" value="46.99">
                                <input type="hidden" name="details" value="The navy blue track SHORT highlight one of the House’s heritage motifs. Crafted from an incredibly soft wool, silk and cashmere tricot knit, they sport a contrasting bright Dior Oblique woven grosgrain ribbon down each leg. Graphic and elegant, they can be worn with the matching hooded sweatshirt.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="19" onclick="toggleLove('love19');">
                                    <i id="love19" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="19">
                                <input type="hidden" name="name" value="KID'S SHORT">
                                <input type="hidden" name="price" value="46.99">
                                <input type="hidden" name="image" value="./image/Kids.png">
                            </form>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">KID'S SHORT</h5>

                                    <h5 class="card-title mb-0">$46.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <form id="productForm20" action="shopping 3.php" method="POST">
                            <img class="card-img-top" src="./image/Kids-4.png" alt="Product Image" onclick="submitForm('productForm20')">

                                <input type="hidden" name="id" value="20">
                                <input type="hidden" name="name" value="KID'S T-SHIRT">
                                <input type="hidden" name="image" value="./image/Kids-4.png">
                                <input type="hidden" name="image2" value="./image/Kids-5.png">
                                <input type="hidden" name="image3" value="./image/Kids-6.png">
                                <input type="hidden" name="price" value="28.99">
                                <input type="hidden" name="details" value="The short-sleeved cotton jersey T-shirt is a comfortable and soft creation. Crafted in ivory cotton jersey, it is embellished with a raised pale gold-tone metallic thread 'DIOR' embroidery. The style has a regular fit with a ribbed round neck, and can be paired with a pinafore dress for a casual look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="20" onclick="toggleLove('love20');">
                                    <i id="love20" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="20">
                                <input type="hidden" name="name" value="KID'S T-SHIRT">
                                <input type="hidden" name="price" value="28.99">
                                <input type="hidden" name="image" value="./image/Kids-4.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">KID'S T-SHIRT</h5>

                                    <h5 class="card-title mb-0">$28.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">

                            <form id="productForm21" action="shopping 3.php" method="POST">
                            <img class="card-img-top" src="./image/Kids-7.png" alt="Product Image" onclick="submitForm('productForm21')">

                                <input type="hidden" name="id" value="21">
                                <input type="hidden" name="name" value="KID'S SLEEVED T-SHIRT">
                                <input type="hidden" name="image" value="./image/Kids-7.png">
                                <input type="hidden" name="image2" value="./image/Kids-8.png">
                                <input type="hidden" name="image3" value="./image/Kids-9.png">
                                <input type="hidden" name="price" value="35.99">
                                <input type="hidden" name="details" value="The long-sleeved T-shirt displays the classic Toile de Jouy motif inspired by House archives. Crafted in blue cotton jersey with the hallmark tonal print in a faded effect, it features a straight silhouette with dropped shoulders. Enhanced by a tonal Dior 1967 print on the front, the T-shirt can be worn by girls and boys alike to complete laid-back looks.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="21" onclick="toggleLove('love21');">
                                    <i id="love21" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="21">
                                <input type="hidden" name="name" value="KID'S SLEEVED T-SHIRT">
                                <input type="hidden" name="price" value="35.99">
                                <input type="hidden" name="image" value="./image/Kids-7.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">KID'S SLEEVED T-SHIRT</h5>

                                    <h5 class="card-title mb-0">$35.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">

                            <form id="productForm22" action="shopping 3.php" method="POST">                    
                            <img class="card-img-top" src="./image/Kids-10.png" alt="Product Image" onclick="submitForm('productForm22')">

                                <input type="hidden" name="id" value="22">
                                <input type="hidden" name="name" value="SWEATER">
                                <input type="hidden" name="image" value="./image/Kids-10.png">
                                <input type="hidden" name="image2" value="./image/Kids-11.png">
                                <input type="hidden" name="image3" value="./image/Kids-12.png">
                                <input type="hidden" name="price" value="54.99">
                                <input type="hidden" name="details" value="The warm sweater offers a play on contrasts. Crafted in a wool and cashmere blend, it combines a garter stitch and an ivory jersey knit band, further adorned with a heathered beige jacquard 'DIOR' signature. The sweater has a round neck and a button opening on the left to make it easy to slip on. The chic and relaxed design may be paired with jeans or chinos.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="22" onclick="toggleLove('love22');">
                                    <i id="love22" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="22">
                                <input type="hidden" name="name" value="SWEATER">
                                <input type="hidden" name="price" value="54.99">
                                <input type="hidden" name="image" value="./image/Kids-10.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">SWEATER</h5>

                                    <h5 class="card-title mb-0">$54.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                        
                            <form id="productForm23" action="shopping 3.php" method="POST">
                            <img class="card-img-top" src="./image/Kids-13.png" alt="Product Image" onclick="submitForm('productForm23')">

                                <input type="hidden" name="id" value="23">
                                <input type="hidden" name="name" value="KID'S CARDIGAN">
                                <input type="hidden" name="image" value="./image/Kids-13.png">
                                <input type="hidden" name="image2" value="./image/Kids-14.png">
                                <input type="hidden" name="image3" value="./image/Kids-15.png">
                                <input type="hidden" name="price" value="31.99">
                                <input type="hidden" name="details" value="The cardigan highlights a straight and simple silhouette. Crafted in beige wool knit, it has a brown button closure and is adorned by a white Dior mon amour print on the bottom left. The cardigan can be easily worn over a T-shirt from the collection, along with a pair of jeans and sneakers.">
                            </form>
                            
                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="23" onclick="toggleLove('love23');">
                                    <i id="love23" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="23">
                                <input type="hidden" name="name" value="KID'S CARDIGAN">
                                <input type="hidden" name="price" value="31.99">
                                <input type="hidden" name="image" value="./image/Kids-13.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">KID'S CARDIGAN</h5>

                                    <h5 class="card-title mb-0">$31.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">

                            <form id="productForm24" action="shopping 3.php" method="POST">
                            <img class="card-img-top" src="./image/Kids-16.png" alt="Product Image" onclick="submitForm('productForm24')">

                                <input type="hidden" name="id" value="24">
                                <input type="hidden" name="name" value="KID'S FLARED DRESS">
                                <input type="hidden" name="image" value="./image/Kids-16.png">
                                <input type="hidden" name="image2" value="./image/Kids-17.png">
                                <input type="hidden" name="image3" value="./image/Kids-18.png">
                                <input type="hidden" name="price" value="43.99">
                                <input type="hidden" name="details" value="The dress stands out with a high waist and pleated flared skirt. Crafted in beige cotton-blend gabardine, it is completed by a concealed zip closure in the back and a tonal Dior embroidery at the waist. Worn over a T-shirt or white shirt, the dress can be styled with a pair of ankle boots from the collection for a contemporary look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="24" onclick="toggleLove('love24');">
                                    <i id="love24" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="24">
                                <input type="hidden" name="name" value="KID'S FLARED DRESS">
                                <input type="hidden" name="price" value="43.99">
                                <input type="hidden" name="image" value="./image/Kids-16.png">
                            </form>


                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">KID'S FLARED DRESS</h5>

                                    <h5 class="card-title mb-0">$43.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">

                            <form id="productForm25" action="shopping 3.php" method="POST">
                            <img class="card-img-top" src="./image/Kids-19.png" alt="Product Image" onclick="submitForm('productForm25')">

                                <input type="hidden" name="id" value="25">
                                <input type="hidden" name="name" value="BABY T-SHIRT">
                                <input type="hidden" name="image" value="./image/Kids-19.png">
                                <input type="hidden" name="image2" value="./image/Kids-20.png">
                                <input type="hidden" name="image3" value="./image/Kids-21.png">
                                <input type="hidden" name="price" value="59.99">
                                <input type="hidden" name="details" value="Crafted in mint green cotton fleece, the T-shirt showcases a delicate white Lily of the Valley motif, an homage to Mr. Dior's favorite flower and love of nature. Enhanced by a gray bouclé revisited Dior signature on the front, it features a button placket at the shoulder for easy dressing. The T-shirt will add a vibrant touch for both girls and boys.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="25" onclick="toggleLove('love25');">
                                    <i id="love25" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="25">
                                <input type="hidden" name="name" value="BABY T-SHIRT">
                                <input type="hidden" name="price" value="59.99">
                                <input type="hidden" name="image" value="./image/Kids-19.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">BABY T-SHIRT</h5>

                                    <h5 class="card-title mb-0">$59.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <form id="productForm26" action="shopping 3.php" method="POST">
                            <img class="card-img-top" src="./image/Kids-22.png" alt="Product Image" onclick="submitForm('productForm26')">

                                <input type="hidden" name="id" value="26">
                                <input type="hidden" name="name" value="KID'S PANTS">
                                <input type="hidden" name="image" value="./image/Kids-22.png">
                                <input type="hidden" name="image2" value="./image/Kids-23.png">
                                <input type="hidden" name="image3" value="./image/Kids-24.png">
                                <input type="hidden" name="price" value="25.99">
                                <input type="hidden" name="details" value="The navy blue track pants highlight one of the House’s heritage motifs. Crafted from an incredibly soft wool, silk and cashmere tricot knit, they sport a contrasting bright Dior Oblique woven grosgrain ribbon down each leg. Graphic and elegant, they can be worn with the matching hooded sweatshirt.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="26" onclick="toggleLove('love26');">
                                    <i id="love26" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="26">
                                <input type="hidden" name="name" value="KID'S PANTS">
                                <input type="hidden" name="price" value="25.99">
                                <input type="hidden" name="image" value="./image/Kids-22.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">KID'S PANTS</h5>

                                    <h5 class="card-title mb-0">$25.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">

                            <form id="productForm27" action="shopping 3.php" method="POST">
                            <img class="card-img-top" src="./image/Kids-25.png" alt="Product Image" onclick="submitForm('productForm27')">

                                <input type="hidden" name="id" value="27">
                                <input type="hidden" name="name" value="KID'S SWEATSHIRT">
                                <input type="hidden" name="image" value="./image/Kids-25.png">
                                <input type="hidden" name="image2" value="./image/Kids-26.png">
                                <input type="hidden" name="image3" value="./image/Kids-27.png">
                                <input type="hidden" name="price" value="63.99">
                                <input type="hidden" name="details" value="The hooded sweatshirt is a soft and comfortable style. Crafted in light beige cotton fleece, it is adorned with a multicolor bouclé Dior patch on the front. It features ribbed detailing and raglan sleeves, while a tonal snap placket allows for easy dressing. The sweatshirt can be easily paired with the matching track pants to complete a laid-back look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="27" onclick="toggleLove('love27');">
                                    <i id="love27" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="27">
                                <input type="hidden" name="name" value="KID'S SWEATSHIRT">
                                <input type="hidden" name="price" value="63.99">
                                <input type="hidden" name="image" value="./image/Kids-25.png">
                            </form>


                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">KID'S SWEATSHIRT</h5>

                                    <h5 class="card-title mb-0">$63.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <footer class="pt-4 bg-dark text-light">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <h5>About Us</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel scelerisque nunc, et placerat metus.</p>
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
          <p>&copy; 2023 My Ecommerce Store. All Rights Reserved.</p>
          <ul class="list-unstyled">
            <li><a  href="#">Privacy Policy</a></li>
            <li><a  href="#">Terms of Use</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="./JavaScript/popper.min.js"></script>
    <script src="./JavaScript/bootstrap.min.js"></script>
    <script src="./JavaScript/bootstrap.bundle.min.js"></script>
    <script src="./JavaScript/all.min.js"></script>
    <script src="./JavaScript/jquery.min.js"></script>
    <script src="./JavaScript/sweetalert2.all.min.js"></script>


<script>
    function submitForm(formId) {
        document.getElementById(formId).submit();
    }
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
    document.querySelector('.offcanvas-body').addEventListener('click', function(event) {
        var button = event.target.closest('.btn-close');
        if (button) {
            var modalHeader = button.closest('.modal-header');
            if (modalHeader) {
                var id = modalHeader.getAttribute('id');
                modalHeader.remove();
    
                // Send AJAX request to delete the favorite from the database
                var xhr = new XMLHttpRequest();
                xhr.open('POST', './PHP/close.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.onload = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Handle the response if needed
                    }
                };
                xhr.send('id=' + id);
    
                // Update the badge count
                try {
                    updateBadge(-1);
                } catch (error) {
                    console.error(error);
                }
            }
        }
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

<!-- Bootstrap JS -->
<script>
    function addToFavorites(event, form) {
        event.preventDefault();
        var formData = new FormData(form);

        if (document.getElementById("username-item")) {
            var xhr = new XMLHttpRequest();
            xhr.open(form.method, form.action, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    var loveID = form.querySelector('.btn-love i').id;
                    var icon = document.getElementById(loveID);
                    var cardID = loveID.replace("love", "card");

                    if (response.success) {
                        if (response.favorite) {
                            icon.classList.remove('bi-heart');
                            icon.classList.add('bi-heart-fill');
                            updateBadge(1); // Increase badge count by 1
                        } else {
                            icon.classList.remove('bi-heart-fill');
                            icon.classList.add('bi-heart');
                            updateBadge(-1); // Decrease badge count by 1
                            removeFavoriteFromOffcanvas(loveID); // Remove from offcanvas-body
                        }
                        // Fetch favorites to update the offcanvas-body
                        fetchFavorites();
                    } else {
                        swal(
                            'Error!',
                            'An error occurred while adding to favorites!',
                            'error'
                        );
                    }
                }
            };
            xhr.send(formData);
        } else {
            swal(
                'Warning!',
                'Please login before adding to favorites!',
                'warning'
            );
        }
    }

    function removeFavoriteFromOffcanvas(loveID) {
        var favoriteID = loveID.replace("love", "");
        var favoriteElement = document.getElementById(favoriteID);
        if (favoriteElement) {
            favoriteElement.remove();
            updateBadge(-1); // Decrease badge count by 1
        }
    }

    function toggleLove(loveID) {
        var icon = document.getElementById(loveID);
        var cardID = loveID.replace("love", "card");
    
        if (document.getElementById("username-item")) {
            if (icon) {
                var isFilled = icon.classList.contains('bi-heart-fill');
                if (isFilled) {
                    icon.classList.remove('bi-heart-fill');
                    icon.classList.add('bi-heart');
                } else {
                    icon.classList.remove('bi-heart');
                    icon.classList.add('bi-heart-fill');
                }
                icon.disabled = true; // Disable the button temporarily
                setTimeout(function() {
                    icon.disabled = false; // Enable the button after a short delay
                }, 500); // Adjust the delay as needed
            } else {
                console.error('Element with ID ' + loveID + ' not found.');
            }
        } else {
            swal(
                'Warning!',
                'Please login before adding to favorites!',
                'warning'
            );
        }
    }

    // Add event listener to heart button
    document.querySelector('.btn-love').addEventListener('click', function() {
        // Fetch favorites from the database using AJAX
        fetchFavorites();
    });

    function fetchFavorites() {
        // Make an AJAX request to fetch favorites
        var xhr = new XMLHttpRequest();
        xhr.open('POST', './PHP/offcanvas-favorite.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                // Update the offcanvas-body with the fetched favorites
                document.querySelector('.offcanvas-body').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
</script>

<script>
    // Get the badge element
    var badge = document.getElementById('favBadge');

    // Function to update the badge number
    function updateBadge(countAdjustment) {
        // Get the current badge count
        var currentCount = parseInt(badge.textContent);

        // Adjust the badge count based on the parameter
        var newCount = currentCount + countAdjustment;

        // Update the badge number
        badge.textContent = newCount;

        if (!isLoggedIn()) {
            // Hide badge if not logged in
            badge.style.display = 'none';
            return;
        }

        // Hide the badge if there are no items or if the user is not logged in
        if (newCount === 0 || !isLoggedIn()) {
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
    updateBadge(0);

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