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
            margin-top: 3.5%;
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
 
@media (min-width: 360px) and (max-width: 640px) {
        .offcanvas-end {
           width: 92%;
        }

}

        .modal-header {
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

       @media (max-width: 767px) {
         .mobile-hide {
           display: none;
         }
       }

       #login {
           margin-top: 40%;
           margin-bottom: 10%;
       }

@media (min-width: 360px) and (max-width: 640px) {
   
       #login {
           margin-top: 20%;
           margin-bottom: 20%;
       }

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
            margin-top: 60%;

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
    
<div class="container" id="login">
  <div class="row">
    <div class="col-12 col-md-5 d-flex align-items-center">
   <img src="./image/cover-4.png" class="flex-shrink-0 me-3 mobile-hide" height="100%" width="109%" alt="...">
    </div>
    <div class="col-12 col-md-7">
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
              Not a member? <a href="./Registration.html" class="signup-link">Signup now</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

     
        <!-- Add Font Awesome and Bootstrap JS -->
        <script src="./JavaScript/all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="./JavaScript/popper.min.js"></script>
        <script src="./JavaScript/bootstrap.min.js"></script>
        <script src="./JavaScript/bootstrap.bundle.min.js"></script>
        <script src="./JavaScript/all.min.js"></script>

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

    </body>
</html>