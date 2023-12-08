<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1a75ff">
    <link rel="icon" href="./image/icon.png">

    <title>Login & Registration Form</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="custom.css">

    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">


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


        .card {
            border: none;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card-title {
            font-size: 2rem;
            font-weight: bold;
        }

        .form-control {
            border-radius: 20px;
            border-color: #ccc;
        }

        .form-control:focus {
            border-color: #6c757d;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 20px;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .signup-link,
        .login-link {
            color: #007bff;
            text-decoration: none;
        }

        .signup-link:hover,
        .login-link:hover {
            text-decoration: underline;
        }

        .input-group-text {
            height: 40px;
            width: 45px;
            border-radius: 0 20px 20px 0;
            border-color: Transparent;
        }

        .showHidePw {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
            border-radius: 20px;
            width: 45px;
        }

        .showHidePw:focus {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
            border-radius: 20px;
            width: 45px;
        }

        .card {
            width: 390px;
        }

        .Logins {
          margin-top: 70%;
          margin-bottom: -37%;
        }

@media (min-width: 360px) and (max-width: 640px) {

            .Logins {
                margin-top: 20%;
                margin-bottom: 20%;
            }


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






        label {
            margin-bottom: 10px;
            font-weight: 700;

        }

        footer {
            background-color: #1a75ff;
            padding: 80px 10px;
            height: 350px;
            margin-bottom: 0px;
            margin-top: 820px;

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
                    <a class="nav-link" href="cart 2.html">
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
 
    

        <div class="container">
           <div class="row justify-content-center Logins">
               
                    <div class="card" id="login-card">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">Login</h2>
                            <form action="#">
                                <div class="mb-3">
                                    <label for="login-email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="login-email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="login-password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control password" id="login-password" placeholder="Enter password" required>
                                        <button class="btn btn-outline-secondary showHidePw" type="button">
                                            <i class="fas fa-eye-slash"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="logCheck">
                                    <label class="form-check-label" for="logCheck">Remember me</label>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Login Now</button>
                                </div>
                            </form>

                            <div class="signup mt-3">
                                <p class="text-center mb-0">
                                    Not a member? <a href="#" class="signup-link">Signup now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                

                    <div class="card" id="registration-card" style="display:none;">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">Registration</h2>
                            <form action="#">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="signup-email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="signup-email" placeholder="Enter email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="signup-password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control password" id="signup-password" placeholder="Create a password" required>
                                        <button class="btn btn-outline-secondary showHidePw" type="button">
                                            <i class="fas fa-eye-slash"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="sigCheck">
                                    <label class="form-check-label" for="sigCheck">Remember me</label>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Signup Now</button>
                                </div>
                            </form>

                            <div class="login mt-3">
                                <p class="text-center mb-0">
                                    Already a member? <a href="#" class="login-link">Login here</a>
                                </p>
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

        <!-- Add Font Awesome and Bootstrap JS -->
        <script src="./JavaScript/all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="./JavaScript/popper.min.js"></script>
        <script src="./JavaScript/bootstrap.min.js"></script>
        <script src="./JavaScript/bootstrap.bundle.min.js"></script>
        <script src="./JavaScript/all.min.js"></script>


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

// Show/hide password on click of eye icon
var showHidePwBtns = document.querySelectorAll('.showHidePw');
showHidePwBtns.forEach(function(btn) {
  btn.addEventListener('click', function() {
    var pwdField = this.parentNode.querySelector('.password');
    var pwdFieldType = pwdField.getAttribute('type');
    if (pwdFieldType === 'password') {
      pwdField.setAttribute('type', 'text');
      this.innerHTML = '<i class="fas fa-eye"></i>';
    } else {
      pwdField.setAttribute('type', 'password');
      this.innerHTML = '<i class="fas fa-eye-slash"></i>';
    }
  });
});

</script>
        <script>
            // Select the signup and login links
            const signupLink = document.querySelector('.signup-link');
            const loginLink = document.querySelector('.login-link');

            // Select the registration and login cards
            const registrationCard = document.querySelector('#registration-card');
            const loginCard = document.querySelector('#login-card');

            // Add event listener to the signup link
            signupLink.addEventListener('click', (event) => {
                event.preventDefault();
                registrationCard.style.display = 'block';
                loginCard.style.display = 'none';
            });

            // Add event listener to the login link
            loginLink.addEventListener('click', (event) => {
                event.preventDefault();
                registrationCard.style.display = 'none';
                loginCard.style.display = 'block';
            });
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

    </body>
</html>