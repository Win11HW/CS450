<?php

// Start the session 
session_start();

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1a75ff">
    <link rel="icon" href="./image/icon.png">
    <title>details card</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">


    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">

    <!-- SweetAlert2 -->
    <link href="./CSS/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <style>


        body {
            font-family: 'Roboto Condensed', sans-serif;
            background-color: #f5f5f5;
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
            align-items: center;

        }

        .modal-header {
            display: flex;
            gap: 70px;
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





        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination {
            list-style: none;
            display: flex;
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

        .pagination li a:hover {
            background-color: #f5f5f5;
        }

        .pagination li.active a {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }


        footer {
            background-color: #1a75ff;
            padding: 640px90px 0px;
            height: 330px;
            margin-bottom: 0px;
            margin-top: 20px;

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
                margin-top: 30px;
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


    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-slide="next" onclick="flexCardsDisplay()">
                        <i class="fas fa-th"></i>
                    </a>
                    <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-slide="prev" onclick="columnCardsDisplay()">
                        <i class="fa-solid fa-list"></i>
                    </a>
                </div>

               <div class="col-12">
               <div id="carouselExampleIndicators2" class="carousel slide">
               <div class="carousel-inner">
                
       <div class="carousel-item active">
          <div id="product-container" class="row">
           
               <!-- Product cards for page 1 -->
        
           <div class="search col-6 col-md-4 my-1">
            <div class="card">

                <form id="productForm1" action="shopping 2.php" method="POST">
                <img class="card-img-top" src="./image/dress.png" alt="Product Image" onclick="submitForm('productForm1')">

                            <input type="hidden" name="id" value="1">
                            <input type="hidden" name="name" value="SHORT FLARED DRESS">
                            <input type="hidden" name="image" value="./image/dress.png">
                            <input type="hidden" name="image2" value="./image/dress-2.png">
                            <input type="hidden" name="image3" value="./image/dress-3.png">
                            <input type="hidden" name="price" value="70.99">
                            <input type="hidden" name="details" value="The shirt dress displays the Wildior motif, lending a modern touch to the Camouflage pattern from House archives. Crafted in ivory and deep blue cotton and silk poplin, it features a flared silhouette that's fitted at the waist. Embellished with a spread collar, the dress can be coordinated with other Wildior creations to complete the look.">
                </form>


                <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                    <button class="btn btn-love" data-toggle="collapse" name="heart" value="1" onclick="toggleLove('love1');">
                        <i id="love1" class="bi bi-heart"></i>
                    </button>
                    <input type="hidden" name="id" value="1">
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
                        <h6><del style="color: red;">$101.41</del></h6>
                    </div>
                </div>
            </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
            <div class="card">

                <form id="productForm2" action="shopping 2.php" method="POST">
                <img class="card-img-top" src="./image/dress-4.png" alt="Product Image" onclick="submitForm('productForm2')">

                            <input type="hidden" name="id" value="2">
                            <input type="hidden" name="name" value="BELTED DRESS">
                            <input type="hidden" name="image" value="./image/dress-4.png">
                            <input type="hidden" name="image2" value="./image/dress-5.png">
                            <input type="hidden" name="image3" value="./image/dress-6.png">
                            <input type="hidden" name="price" value="44.99">
                            <input type="hidden" name="details" value="A hallmark Dior silhouette, the mid-length dress displays the red multicolor Florilegio motif, showcasing a bucolic, colorful and elegant floral universe. Crafted in white cotton and silk, it has a flared cut enhanced by a tonal belt with a metallic buckle highlighting the waist. The short puff sleeves are embellished with Dior Tribales cufflinks that have a resin pearl with CD signature inspired by the iconic House earring. The dress can be coordinated with other Florilegio creations to complete the look.">
                </form>

                <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                    <button class="btn btn-love" data-toggle="collapse" name="heart" value="2" onclick="toggleLove('love2');">
                        <i id="love2" class="bi bi-heart"></i>
                    </button>
                    <input type="hidden" name="id" value="2">
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
                        <h6><del style="color: red;">$64.27</del></h6>
                    </div>
                </div>
            </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">
                          <form id="productForm3" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-7.png" alt="Product Image" onclick="submitForm('productForm3')">

                                <input type="hidden" name="id" value="3">
                                <input type="hidden" name="name" value="Women drape skirt">
                                <input type="hidden" name="image" value="./image/dress-7.png">
                                <input type="hidden" name="image2" value="./image/dress-8.png">
                                <input type="hidden" name="image3" value="./image/dress-9.png">
                                <input type="hidden" name="price" value="30.99">
                                <input type="hidden" name="details" value="Mid-Length Skirt Black Wool and Silk, lending a modern touch to the Camouflage pattern from House archives. Crafted in ivory and deep blue cotton and silk poplin, it features a flared silhouette that's fitted at the waist. Embellished with a spread collar, the dress can be coordinated with other Wildior creations to complete the look.">
                          </form>
                                                    
                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="3" onclick="toggleLove('love3');">
                                    <i id="love3" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="3">
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

                             <h6><del style="color: red;">$44.27</del></h6>
                         </div>
                     </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                        <div class="card">

                            <form id="productForm4" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-10.png" alt="Product Image" onclick="submitForm('productForm4')">

                                <input type="hidden" name="id" value="4">
                                <input type="hidden" name="name" value="SHORT BELTED DRESS">
                                <input type="hidden" name="image" value="./image/dress-10.png">
                                <input type="hidden" name="image2" value="./image/dress-11.png">
                                <input type="hidden" name="image3" value="./image/dress-12.png">
                                <input type="hidden" name="price" value="50.99">
                                <input type="hidden" name="details" value="The cropped shirt dress combines elegance and modernity. Crafted in pink lightweight wool and silk, it is distinguished by a flared cut embellished with Dior Tribales buttons, showcasing a resin pearl and CD signature inspired by the iconic House earring. Completed with a tonal belt highlighting the waist, the short-sleeved dress will create contemporary, refined looks.">
                             </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="4" onclick="toggleLove('love4');">
                                    <i id="love4" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="4">
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

                                    <h6><del style="color: red;">$72.84</del></h6>
                                </div>
                            </div>
                        </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                        <div class="card">

                            <form id="productForm5" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-13.png" alt="Product Image" onclick="submitForm('productForm5')">

                                <input type="hidden" name="id" value="5">
                                <input type="hidden" name="name" value="REGULAR-FIT DRESS">
                                <input type="hidden" name="image" value="./image/dress-13.png">
                                <input type="hidden" name="image2" value="./image/dress-14.png">
                                <input type="hidden" name="image3" value="./image/dress-15.png">
                                <input type="hidden" name="price" value="35.99">
                                <input type="hidden" name="details" value="The mid-length dress showcases the black and white Houndstooth motif. Crafted in wool knit, it presents a regular silhouette featuring a round neck and short sleeves. Embroidered with a bee emblem, the dress can be worn with other Houndstooth creations from the season.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="5" onclick="toggleLove('love5');">
                                    <i id="love5" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="5">
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

                                    <h6><del style="color: red;">$51.41</del></h6>
                                </div>
                            </div>
                        </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">

                            <form id="productForm6" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-16.png" alt="Product Image" onclick="submitForm('productForm6')">

                                <input type="hidden" name="id" value="6">
                                <input type="hidden" name="name" value="MID-LENGTH DRESS">
                                <input type="hidden" name="image" value="./image/dress-16.png">
                                <input type="hidden" name="image2" value="./image/dress-17.png">
                                <input type="hidden" name="image3" value="./image/dress-18.png">
                                <input type="hidden" name="price" value="49.99">
                                <input type="hidden" name="details" value="Dior's hallmark mid-length silhouette is offered in black matte technical fabric with a graphic motif. The flared cut is enhanced by a tonal belt highlighting the waist, as well as a V-neckline and short sleeves that lend a sophisticated touch. The dress will complete modern and refined looks that are resolutely Dior.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="6" onclick="toggleLove('love6');">
                                    <i id="love6" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="6">
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

                                    <h6><del style="color: red;">$71.41</del></h6>
                                </div>
                            </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                        <div class="card">
                                                   
                            <form id="productForm7" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-19.png" alt="Product Image" onclick="submitForm('productForm7')">

                                <input type="hidden" name="id" value="7">
                                <input type="hidden" name="name" value="MID-LENGTH SHIRT DRESS">
                                <input type="hidden" name="image" value="./image/dress-19.png">
                                <input type="hidden" name="image2" value="./image/dress-20.png">
                                <input type="hidden" name="image3" value="./image/dress-21.png">
                                <input type="hidden" name="price" value="25.99">
                                <input type="hidden" name="details" value="The mid-length shirt dress embodies the House's modernity and elegance. Crafted in gray silk, it reveals a flared silhouette enhanced by a thin tonal belt and pleats highlighting the waist. The short-sleeved dress can be worn with a pair of sandals from this season to complete a modern and refined look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="7" onclick="toggleLove('love7');">
                                    <i id="love7" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="7">
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

                                    <h6><del style="color: red;">$37.13</del></h6>
                                </div>
                            </div>
                        </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                        <div class="card">

                            <form id="productForm8" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-22.png" alt="Product Image" onclick="submitForm('productForm8')">

                                <input type="hidden" name="id" value="8">
                                <input type="hidden" name="name" value="DIORIVIERA DRESS">
                                <input type="hidden" name="image" value="./image/dress-22.png">
                                <input type="hidden" name="image2" value="./image/dress-23.png">
                                <input type="hidden" name="image3" value="./image/dress-24.png">
                                <input type="hidden" name="price" value="78.99">
                                <input type="hidden" name="details" value="Part of the Dioriviera capsule collection, the dress highlights the Toile de Jouy Reverse motif, a variation of the iconic House motif with a play on reversed colors. Crafted in gray and pink cotton muslin, it features a flared silhouette enhanced by transparent pleats, as well as frills and a tie that define the waist. The mid-length dress will create an effortlessly sophisticated look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="8" onclick="toggleLove('love8');">
                                    <i id="love8" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="8">
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

                                    <h6><del style="color: red;">$112.84</del></h6>
                                </div>
                            </div>
                        </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                        <div class="card">

                            <form id="productForm9" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-25.png" alt="Product Image" onclick="submitForm('productForm9')">

                                <input type="hidden" name="id" value="9">
                                <input type="hidden" name="name" value="LONG BELTED DRESS">
                                <input type="hidden" name="image" value="./image/dress-25.png">
                                <input type="hidden" name="image2" value="./image/dress-26.png">
                                <input type="hidden" name="image3" value="./image/dress-27.png">
                                <input type="hidden" name="price" value="50.99">
                                <input type="hidden" name="details" value="The long dress is adorned with Pietro Ruffo's Toile de Jouy Voyage motif, setting Mr. Dior's iconic pattern in the heart of Indian flora and fauna. Crafted in Peela cotton voile, it presents a flared silhouette enhanced by an officer collar and tonal belt tied to highlight the waist. The long-sleeved dress can be worn with other Toile de Jouy Voyage creations to complete the look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="9" onclick="toggleLove('love9');">
                                    <i id="love9" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="9">
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

                                    <h6><del style="color: red;">$72.84</del></h6>
                                </div>
                            </div>
                        </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                        <div class="card">
                            
                            <form id="productForm10" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-28.png" alt="Product Image" onclick="submitForm('productForm10')">

                                <input type="hidden" name="id" value="10">
                                <input type="hidden" name="name" value="DRAPED DRESS">
                                <input type="hidden" name="image" value="./image/dress-28.png">
                                <input type="hidden" name="image2" value="./image/dress-29.png">
                                <input type="hidden" name="image3" value="./image/dress-30.png">
                                <input type="hidden" name="price" value="49.99">
                                <input type="hidden" name="details" value="The mid-length dress is a hallmark Dior silhouette revisited with the House's modern codes of elegance. Crafted in beige cotton gabardine, it features a flared silhouette with thin straps and is accented by a draped effect. The mid-length dress can be worn with the matching peacoat to complete the look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="10" onclick="toggleLove('love10');">
                                    <i id="love10" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="10">
                                <input type="hidden" name="name" value="DRAPED DRESS">
                                <input type="hidden" name="price" value="49.99">
                                <input type="hidden" name="image" value="./image/dress-28.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">DRAPED DRESS</h5>

                                    <h5 class="card-title mb-0">$49.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$71.41</del></h6>
                                </div>
                            </div>
                        </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">

                            <form id="productForm11" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-31.png" alt="Product Image" onclick="submitForm('productForm11')">

                                <input type="hidden" name="id" value="11">
                                <input type="hidden" name="name" value="FLARED SHIRT DRESS">
                                <input type="hidden" name="image" value="./image/dress-31.png">
                                <input type="hidden" name="image2" value="./image/dress-32.png">
                                <input type="hidden" name="image3" value="./image/dress-33.png">
                                <input type="hidden" name="price" value="31.99">
                                <input type="hidden" name="details" value="The shirt dress is a timeless creation reframed with the House's modern elements. Crafted in lightweight blue cotton denim, it reveals a flared cut enhanced by a striped patchwork effect. The shirt dress can pair with anything from the Dior wardrobe for a modern look.">
                            </form>
                         
                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="11" onclick="toggleLove('love11');">
                                    <i id="love11" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="11">
                                <input type="hidden" name="name" value="FLARED SHIRT DRESS">
                                <input type="hidden" name="price" value="31.99">
                                <input type="hidden" name="image" value="./image/dress-31.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">FLARED SHIRT DRESS</h5>

                                    <h5 class="card-title mb-0">$31.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$45.70</del></h6>
                                </div>
                            </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                        <div class="card">

                            <form id="productForm12" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-34.png" alt="Product Image" onclick="submitForm('productForm12')">

                                <input type="hidden" name="id" value="12">
                                <input type="hidden" name="name" value="LONG DRESS">
                                <input type="hidden" name="image" value="./image/dress-34.png">
                                <input type="hidden" name="image2" value="./image/dress-35.png">
                                <input type="hidden" name="image3" value="./image/dress-36.png">
                                <input type="hidden" name="price" value="45.99">
                                <input type="hidden" name="details" value="The long dress revisits the House's hallmark silhouette with the collection's elements of elegance. Crafted in black guipure raffia with a floral motif, it features a flared cut enhanced by crisscross straps in the back, a tied belt and frilled details that highlight the waist. The dress can be worn with a pair of pumps to create an elegant outfit.">
                            </form>
                            
                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="12" onclick="toggleLove('love12');">
                                    <i id="love12" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="12">
                                <input type="hidden" name="name" value="LONG DRESS">
                                <input type="hidden" name="price" value="45.99">
                                <input type="hidden" name="image" value="./image/dress-34.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">LONG DRESS</h5>

                                    <h5 class="card-title mb-0">$45.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$65.70</del></h6>
                                </div>
                            </div>
                        </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                        <div class="card">

                            <form id="productForm13" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-37.png" alt="Product Image" onclick="submitForm('productForm13')">

                                <input type="hidden" name="id" value="13">
                                <input type="hidden" name="name" value="DRESS WITH BELT">
                                <input type="hidden" name="image" value="./image/dress-37.png">
                                <input type="hidden" name="image2" value="./image/dress-38.png">
                                <input type="hidden" name="image3" value="./image/dress-39.png">
                                <input type="hidden" name="price" value="63.99">
                                <input type="hidden" name="details" value="The dress is distinguished by its casual, knee-length silhouette. Crafted in beige cotton gabardine, it features a flared cut enhanced by a utilitarian-inspired belt that highlights the waist, while a zip closure and flap patch pockets accentuate the laid-back appeal. The versatile dress can be paired with sneakers or boots for a contemporary look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="13" onclick="toggleLove('love13');">
                                    <i id="love13" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="13">
                                <input type="hidden" name="name" value="DRESS WITH BELT">
                                <input type="hidden" name="price" value="63.99">
                                <input type="hidden" name="image" value="./image/dress-37.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">DRESS WITH BELT</h5>

                                    <h5 class="card-title mb-0">$63.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$91.41</del></h6>
                                </div>
                            </div>
                        </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">
                            <form id="productForm14" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-40.png" alt="Product Image" onclick="submitForm('productForm14')">

                                <input type="hidden" name="id" value="14">
                                <input type="hidden" name="name" value="DIORIVIERA MID-LENGTH DRESS">
                                <input type="hidden" name="image" value="./image/dress-40.png">
                                <input type="hidden" name="image2" value="./image/dress-41.png">
                                <input type="hidden" name="image3" value="./image/dress-42.png">
                                <input type="hidden" name="price" value="39.99">
                                <input type="hidden" name="details" value="Part of the Dioriviera capsule collection, the mid-length dress reframes the House's hallmark silhouette with the collection's codes of elegance. Crafted in pink and gray cotton-blend lace, it presents the Toile de Jouy Sauvage motif, offering a new take on the iconic House pattern. It features a flared silhouette enhanced by transparent pleats, as well as a bow and frills that define the waist. The dress will effortlessly affirm a sophisticated look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="14" onclick="toggleLove('love14');">
                                    <i id="love14" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="14">
                                <input type="hidden" name="name" value="DIORIVIERA MID-LENGTH DRESS">
                                <input type="hidden" name="price" value="39.99">
                                <input type="hidden" name="image" value="./image/dress-40.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">DIORIVIERA MID-LENGTH DRESS</h5>

                                    <h5 class="card-title mb-0">$39.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$57.13</del></h6>
                                </div>
                            </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                        <div class="card">

                            <form id="productForm15" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-43.png" alt="Product Image" onclick="submitForm('productForm15')">


                                <input type="hidden" name="id" value="15">
                                <input type="hidden" name="name" value="DREAM LONG DRESS">
                                <input type="hidden" name="image" value="./image/dress-43.png">
                                <input type="hidden" name="image2" value="./image/dress-44.png">
                                <input type="hidden" name="image3" value="./image/dress-45.png">
                                <input type="hidden" name="price" value="50.99">
                                <input type="hidden" name="details" value="Part of the Dream capsule collection, the dress highlights the House's exceptional savoir-faire and redefines the codes of elegance. Crafted in black silk crepe, it is distinguished by a long silhouette, further enhanced by an elegant V-neckline and a draped effect that delicately accentuates the waist. The sleeveless dress will complete a refined evening wear look.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="16" onclick="toggleLove('love15');">
                                    <i id="love15" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="15">
                                <input type="hidden" name="name" value="DREAM LONG DRESS">
                                <input type="hidden" name="price" value="50.99">
                                <input type="hidden" name="image" value="./image/dress-43.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">DREAM LONG DRESS</h5>

                                    <h5 class="card-title mb-0">$50.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$72.84</del></h6>
                                </div>
                            </div>
                        </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                        <div class="card">

                            <form id="productForm16" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-46.png" alt="Product Image" onclick="submitForm('productForm16')">

                                <input type="hidden" name="id" value="16">
                                <input type="hidden" name="name" value="FLARED BELTED DRESS">
                                <input type="hidden" name="image" value="./image/dress-46.png">
                                <input type="hidden" name="image2" value="./image/dress-47.png">
                                <input type="hidden" name="image3" value="./image/dress-48.png">
                                <input type="hidden" name="price" value="35.99">
                                <input type="hidden" name="details" value="The short dress is part of the Dioriviera capsule collection and highlights the gray hallmark Dior Oblique motif. Crafted in technical jersey, the design has a flared cut, enhanced by darts at the waist and a contrasting band with the 'CHRISTIAN DIOR' signature on the back. The officer-collar dress can be paired with other Dioriviera creations.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="16" onclick="toggleLove('love16');">
                                    <i id="love16" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="16">
                                <input type="hidden" name="name" value="FLARED BELTED DRESS">
                                <input type="hidden" name="price" value="35.99">
                                <input type="hidden" name="image" value="./image/dress-46.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">FLARED BELTED DRESS</h5>

                                    <h5 class="card-title mb-0">$35.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$51.41</del></h6>
                                </div>
                            </div>
                        </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                <div class="card">

                            <form id="productForm17" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-49.png" alt="Product Image" onclick="submitForm('productForm17')">

                                <input type="hidden" name="id" value="17">
                                <input type="hidden" name="name" value="BUSTIER DRESS">
                                <input type="hidden" name="image" value="./image/dress-49.png">
                                <input type="hidden" name="image2" value="./image/dress-50.png">
                                <input type="hidden" name="image3" value="./image/dress-51.png">
                                <input type="hidden" name="price" value="28.99">
                                <input type="hidden" name="details" value="The dress pays tribute to the House's codes of elegance. Crafted in black technical cotton duchesse, it stands out thanks to its refined corset and short, flared silhouette. A bow detail on the side adds volume and movement to this sophisticated creation.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="17" onclick="toggleLove('love17');">
                                    <i id="love17" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="17">
                                <input type="hidden" name="name" value="BUSTIER DRESS">
                                <input type="hidden" name="price" value="28.99">
                                <input type="hidden" name="image" value="./image/dress-49.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">BUSTIER DRESS</h5>

                                    <h5 class="card-title mb-0">$28.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$41.41</del></h6>
                                </div>
                            </div>
                </div>
            </div>


           <div class="search col-6 col-md-4 my-1">
                        <div class="card">

                            <form id="productForm18" action="shopping 2.php" method="POST">
                            <img class="card-img-top" src="./image/dress-52.png" alt="Product Image" onclick="submitForm('productForm18')">

                                <input type="hidden" name="id" value="18">
                                <input type="hidden" name="name" value="LONG RUFFLED DRESS">
                                <input type="hidden" name="image" value="./image/dress-52.png">
                                <input type="hidden" name="image2" value="./image/dress-53.png">
                                <input type="hidden" name="image3" value="./image/dress-54.png">
                                <input type="hidden" name="price" value="44.99">
                                <input type="hidden" name="details" value="Part of the Dior Dream capsule collection, the long dress reframes codes of elegance while showcasing the House's exceptional savoir-faire. Crafted in black silk chiffon offering an elegant play of transparency, it features an ethereal silhouette adorned with ruffles and inlays of the D-Lace motif echoing delicate lace. Completed by a tie highlighting the waist, the long dress will create evening wear looks with a touch of romance and refinement.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love" data-toggle="collapse" name="heart" value="18" onclick="toggleLove('love18');">
                                    <i id="love18" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="18">
                                <input type="hidden" name="name" value="LONG RUFFLED DRESS">
                                <input type="hidden" name="price" value="44.99">
                                <input type="hidden" name="image" value="./image/dress-52.png">
                            </form>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">LONG RUFFLED DRESS</h5>

                                    <h5 class="card-title mb-0">$44.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$64.27</del></h6>
                                </div>
                            </div>
                        </div>
            </div>



         <!-- More product cards for page 1... -->


                                </div>
                            </div>

                        </div>
                    </div>

                 <div class="pagination-container">
                        <ul class="pagination">
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

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


<script>
    function submitForm(formId) {
        document.getElementById(formId).submit();
    }
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
    
let thisPage = 1;
let limit = 12;
let list = document.querySelectorAll('#product-container .search');

function loadItem() {
  let beginGet = limit * (thisPage - 1);
  let endGet = limit * thisPage - 1;
  list.forEach((item, key) => {
    if (key >= beginGet && key <= endGet) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
  listPage();
}
loadItem();

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
    
    const searchInput = document.getElementById("search-input");
    searchInput.addEventListener("input", filterProducts);
    
    function filterProducts() {
      // Get the search input value
      const searchValue = document.getElementById("search-input").value.toLowerCase();
      
      // Get all the product cards
      const cards = document.querySelectorAll("#product-container .search");
      
      // Loop through the cards and hide/show them based on the search input value
      cards.forEach(card => {
        const title = card.querySelector(".card-title").textContent.toLowerCase();
        if (title.includes(searchValue)) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    }
    
    </script>


    <!-- Bootstrap JS -->
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

        function flexCardsDisplay() {
            var container = document.getElementById("product-container");
            if (container.classList.contains("flex-column")) {
                container.classList.remove("flex-column");
            }
        }

        function columnCardsDisplay() {
            var container = document.getElementById("product-container");
            if (!container.classList.contains("flex-column")) {
                container.classList.add("flex-column");
            }
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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="./JavaScript/popper.min.js"></script>
    <script src="./JavaScript/bootstrap.min.js"></script>
    <script src="./JavaScript/bootstrap.bundle.min.js"></script>
    <script src="./JavaScript/all.min.js"></script>
    <script src="./JavaScript/jquery.min.js"></script>
    <script src="./JavaScript/sweetalert2.all.min.js"></script>


</body>
</html>