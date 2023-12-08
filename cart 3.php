<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Cart</title>

    <link rel="icon" href="./image/icon.png">
    <meta name="theme-color" content="#1a75ff">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">

    <style>

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
            margin-top: -1.5%;
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

        .flex-column {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .modal-header {
            display: flex;
            gap: 70px;
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
  
        .input-group {
            width: 100px;
            margin-left: 0%;
        }
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
        .input-group {
            width: 113px;
            margin-left: 29%;

        }
        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #1a75ff;
            border-color: #6c757d;
        }

        .btn-outline-secondary:focus {
            box-shadow: none;
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

.input-group {
    width: 113px;
    margin-left: 32%;

}

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

.input-group {
    width: 113px;
    margin-left: 27%;
}

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
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
                    <ul class="dropdown-menu dropdown-menu-end person-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li id="login-item">
                            <a class="dropdown-item" href="#">Login</a>
                        </li>
                        <li id="logout-item" class="d-none">
                            <a class="dropdown-item" href="#">Ayoub</a>
                        </li>
                        <li id="username-item" class="d-none">
                            <a class="dropdown-item" href="#"></a>
                        </li>
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
        <!-- Off-canvas menu items go here -->
        
            <div class="modal-header text-center">
                <img class="card-img-top" src="./image/dress.png" alt="Product Image" style="height: 60px; width: 60px;">
                <div class="container">
                    <div class="row">
                        <h5 class="col">Product 1</h5>
                    </div>
                    <div class="row">
                        <h6 class="col">$1.99</h6>
                    </div>
                </div>
                <button type="button" class="btn-close ms-auto" aria-label="Close">
                     <i class="fas fa-close"></i>
                </button>
            </div>
    
            <div class="modal-header text-center">
                <img class="card-img-top" src="./image/dress.png" alt="Product Image" style="height: 60px; width: 60px;">
                <div class="container">
                    <div class="row">
                        <h5 class="col">Product 2</h5>
                    </div>
                    <div class="row">
                        <h6 class="col">$1.99</h6>
                    </div>
                </div>
                <button type="button" class="btn-close ms-auto" aria-label="Close">
                     <i class="fas fa-close"></i>
                </button>
            </div>
    
            <div class="modal-header text-center">
                <img class="card-img-top" src="./image/dress.png" alt="Product Image" style="height: 60px; width: 60px;">
                <div class="container">
                    <div class="row">
                        <h5 class="col">Product 3</h5>
                    </div>
                    <div class="row">
                        <h6 class="col">$1.99</h6>
                    </div>
                </div>
                <button type="button" class="btn-close ms-auto" aria-label="Close">
                     <i class="fas fa-close"></i>
                </button>
            </div>
    
            <div class="modal-header text-center">
                <img class="card-img-top" src="./image/dress.png" alt="Product Image" style="height: 60px; width: 60px;">
                <div class="container">
                    <div class="row">
                        <h5 class="col">Product 4</h5>
                    </div>
                    <div class="row">
                        <h6 class="col">$1.99</h6>
                    </div>
                </div>
                <button type="button" class="btn-close ms-auto" aria-label="Close">
                     <i class="fas fa-close"></i>
                </button>
            </div>
    
            <div class="modal-header text-center">
                <img class="card-img-top" src="./image/dress.png" alt="Product Image" style="height: 60px; width: 60px;">
                <div class="container">
                    <div class="row">
                        <h5 class="col">Product 5</h5>
                    </div>
                    <div class="row">
                        <h6 class="col">$1.99</h6>
                    </div>
                </div>
                <button type="button" class="btn-close ms-auto" aria-label="Close">
                     <i class="fas fa-close"></i>
                </button>
            </div>
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
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center align-middle">
                                <figure class="product-image-container">
                                    <img src="./image/tshirt.png" alt="Product Image" class="img-thumbnail" />
                                </figure>
                            </td>
                            <td class="text-center align-middle">Product 1</td>
                            <td class="text-center align-middle">$10.00</td>
                            <td class="text-center align-middle">
                                    <div class="input-group d-flex justify-content-center align-items-center">
                                        <button class="btn btn-outline-secondary btn-minus" type="button">-</button>
                                        <input type="number" value="1" class="form-control quantity" />
                                        <button class="btn btn-outline-secondary btn-plus" type="button">+</button>
                                    </div>
                       </td>
                                <td class="text-center align-middle">$10.00</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-danger btn-sm delete">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center align-middle">
                                    <figure class="product-image-container">
                                        <img src="./image/dress.png" alt="Product Image" class="img-thumbnail" />
                                    </figure>
                                </td>
                                <td class="text-center align-middle">Product 2</td>
                                <td class="text-center align-middle">$20.00</td>
                            <td class="text-center align-middle">
                                    <div class="input-group d-flex justify-content-center align-items-center">
                                        <button class="btn btn-outline-secondary btn-minus" type="button">-</button>
                                        <input type="number" value="1" class="form-control quantity" />
                                        <button class="btn btn-outline-secondary btn-plus" type="button">+</button>
                                    </div>
                       </td>
                                 <td class="text-center align-middle">$20.00</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-danger btn-sm delete">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center align-middle">
                                    <figure class="product-image-container">
                                        <img src="./image/Kids-4.png" alt="Product Image" class="img-thumbnail" />
                                    </figure>
                                </td>
                                <td class="text-center align-middle">Product 3</td>
                                <td class="text-center align-middle">$30.00</td>
                            <td class="text-center align-middle">
                                    <div class="input-group d-flex justify-content-center align-items-center">
                                        <button class="btn btn-outline-secondary btn-minus" type="button">-</button>
                                        <input type="number" value="1" class="form-control quantity" />
                                        <button class="btn btn-outline-secondary btn-plus" type="button">+</button>
                                    </div>
                       </td>
                                  <td class="text-center align-middle">$30.00</td>
                                <td class="text-center align-middle">
                                    <button class="btn btn-danger btn-sm delete">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
     </div>

        <br><br>

        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-8">
                    <div class="cart-summary">
                        <h3>CART TOTALS</h3>
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody class="cart-items"></tbody>
                            <tfoot>
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td class="total-price">$0.00</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="checkout-methods">
                            <button class="btn btn-block btn-dark checkout">Proceed to Checkout <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br><br><br>

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


        <!-- Add Font Awesome and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="./JavaScript/popper.min.js"></script>
        <script src="./JavaScript/bootstrap.min.js"></script>
        <script src="./JavaScript/bootstrap.bundle.min.js"></script>


<script>
// Get the badge element
var badge = document.getElementById('favBadge');

// Get the number of items in the off-canvas menu
var numItems = document.querySelectorAll('.offcanvas-body .modal-header').length;

// Update the badge number
badge.textContent = numItems;

// Hide the badge if there are no items
if (numItems === 0) {
  badge.style.display = 'none';
}

// Get the number of items in the off-canvas menu
function updateBadge() {
  var numItems = document.querySelectorAll('.offcanvas-body .modal-header').length;

  // Update the badge number
  badge.textContent = numItems;

  // Hide the badge if there are no items
  if (numItems === 0) {
    badge.style.display = 'none';
  } else {
    badge.style.display = 'inline-block';
  }
}

// Add click event listener to close buttons
var closeButtons = document.querySelectorAll('.btn-close');
for (var i = 0; i < closeButtons.length; i++) {
  closeButtons[i].addEventListener('click', function() {
    var itemId = this.getAttribute('data-item-id');

    // Remove the item from the DOM
    var item = document.getElementById(itemId);
    if (item) {
      item.remove();
    }

    // Update the badge number
    updateBadge();
  });
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
        const closeButton2 = document.querySelectorAll('.btn-close');
        closeButton2.forEach((button) => {
          button.addEventListener('click', () => {
            const modalHeader = button.closest('.modal-header');
            if (modalHeader) {
              modalHeader.remove();
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

            function renderCart() {
                const nonEmptyCart = cart.filter(item => item.quantity > 0);
                cartItems.innerHTML = "";
                nonEmptyCart.forEach(item => {
                    const row = document.createElement("tr");
                    const nameCell = document.createElement("td");
                    nameCell.textContent = item.name;
                    const quantityCell = document.createElement("td");
                    quantityCell.textContent = item.quantity;
                    const priceCell = document.createElement("td");
                    const totalCell = document.createElement("td");
                    totalCell.textContent = `$${(item.price * item.quantity).toFixed(2)}`;
                    row.appendChild(nameCell);
                    row.appendChild(quantityCell);
                    row.appendChild(totalCell);
                    cartItems.appendChild(row);
                });
                totalPrice.textContent = `$${total.toFixed(2)}`;
            }

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
                renderCart();
            }

            const addToCartButtons = document.querySelectorAll(".btn-plus");
            addToCartButtons.forEach(button => {
                const productRow = button.closest("tr");
                const productName = productRow.querySelector("td:nth-child(2)").textContent;
                const productPrice = parseFloat(productRow.querySelector("td:nth-child(3)").textContent.slice(1));
                addToCart(productName, productPrice);
            });

            document.addEventListener("click", event => {
                if (event.target.classList.contains("btn-plus")) {
                    const productRow = event.target.closest("tr");
                    const productName = productRow.querySelector("td:nth-child(2)").textContent;
                    const productPrice = parseFloat(productRow.querySelector("td:nth-child(3)").textContent.slice(1));
                    addToCart(productName, productPrice);
                } else if (event.target.classList.contains("btn-minus")) {
                    const productRow = event.target.closest("tr");
                    const productName = productRow.querySelector("td:nth-child(2)").textContent;
                    const existingItem = cart.find(item => item.name === productName);
                    if (existingItem && existingItem.quantity > 1) {
                        existingItem.quantity--;
                        total -= existingItem.price;
                        renderCart();
                    }
                } else if (event.target.classList.contains("fa-trash")) {
                    const productRow = event.target.closest("tr");
                    const productName = productRow.querySelector("td:nth-child(2)").textContent;
                    const existingItem = cart.find(item => item.name === productName);
                    if (existingItem) {
                        total -= existingItem.price * existingItem.quantity;
                        cart.splice(cart.indexOf(existingItem), 1);
                        productRow.remove();
                        renderCart();
                    }
                }
            });
        </script>


        <script>
            // Quantity update
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
                button.addEventListener('click',
                    () => {
                        const input = button.previousElementSibling;
                        input.value++;
                        updateTotal(button.closest('tr'));
                    });
            });

            // Delete item
            const deletes = document.querySelectorAll('.delete');
            deletes.forEach(del => {
                del.addEventListener('click',
                    () => {
                        del.closest('tr').remove();
                    });
            });

            // Update item
            const updates = document.querySelectorAll('.update');
            updates.forEach(upd => {
                upd.addEventListener('click',
                    () => {
                        const row = upd.closest('tr');
                        const name = row.querySelector('td:nth-child(2)').textContent;
                        const price = row.querySelector('td:nth-child(3)').textContent.replace('$', '');
                        const quantity = row.querySelector('.quantity').value;
                        alert(`Name: ${name}\nPrice: ${price}\nQuantity: ${quantity}`);
                    });
            });

            // Update total
            function updateTotal(row) {
                const price = parseFloat(row.querySelector('td:nth-child(3)').textContent.replace('$',
                    ''));
                const quantity = parseInt(row.querySelector('.quantity').value, 10);
                const total = (price * quantity).toFixed(2);
                row.querySelector('td:nth-child(5)').textContent = '$' + total;
            }
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