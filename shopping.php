<?php
// Start the session 
session_start();

// Database connection info
$servername = "localhost";
$username = "root";  
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create carts table if not exists
$createTable = "CREATE TABLE IF NOT EXISTS cart (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(255),
    price DECIMAL(10, 2),
    size VARCHAR(10),
    color VARCHAR(20),
    quantity INT,
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

    <title>Bootstrap shopping</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="./CSS/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">

    <!-- SweetAlert2 -->
    <link href="./CSS/sweetalert2.min.css" rel="stylesheet" type="text/css"/>


    <style>
        
@media (min-width: 1440px) {

    .col-lg-4 {
        flex: 0 0 auto;
        width: 94%;
    }

    #details {
        margin-right: 7%;
    }    
  
}

@media (min-width: 992px) {
    .col-lg-4 {
        flex: 0 0 auto;
        width: 95.333333%;
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
 
    .col-lg-4 {
        flex: 0 0 auto;
        width: 100%;
    }

    #details {
        margin-right: -18%;
    } 
    
}
  
@media (min-width: 425px) and (max-width: 768px) {

    .col-lg-4 {
        flex: 0 0 auto;
        width: 103.333333%;
    }

    #details {
        margin-right: -5%;
    } 

}

@media (min-width: 320px) and (max-width: 425px) {

    .col-lg-4 {
        flex: 0 0 auto;
        width: 97.333333%;
    }

    #details {
        margin-right: -8%;
    } 

}

        body {
            font-family: 'Roboto Condensed', sans-serif;
            background-color: #f5f5f5;
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
                margin-top: 0%;
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




        .hedding {
            font-size: 20px;
            color: #ab8181;
        }
        .main-section {
            position: relative;
        }
        .left-side-product-box img {
            width: 100%;
        }
        .left-side-product-box .sub-img img {
            margin-top: 5px;
            width: 100px;
            height: 100px;
        }
        .right-side-pro-detail span {
            font-size: 15px;
        }
        .right-side-pro-detail p {
            font-size: 25px;
            color: #a1a1a1;
        }
        .right-side-pro-detail .price-pro {
            font-size: 35px;
            color: #1a75ff;
        }
        .right-side-pro-detail .tag-section {
            font-size: 18px;
            color: #5D4C46;
        }
        .pro-box-section .pro-box img {
            width: 100%;
            height: 200px;
        }
@media (min-width: 360px) and (max-width: 640px) {
            .pro-box-section .pro-box img {
                height: auto;
            }
        }








        .sub-img {
            display: flex;
            justify-content: space-between;
        }
        .border {
            border-radius: 10px;
        }
        .border2 {
            border-radius: 10px;
        }
        .border2:hover {
            border: 2px solid #1a75ff;
        }
        .btn-outline-secondary {
            color: #1a75ff;
            border-radius: 70%;
        }
        .input-group {
            width: 115px;
        }
@media (min-width: 360px) and (max-width: 640px) {
            .input-group {
                width: 113px
            }
        }

        .form-control {
            color: #1a75ff;
            background-color: #f5f5f5;
            border: none;
            border-radius: 20px;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            box-shadow: none;
        }

        #pay {
            width: 163px;
            border-radius: 50px;
        }
        .btn-love i {
            font-size: 2rem;
            color: #dc3545;
        }
        .btn-love i.fill {
            color: red;
        }
        .btn-love2 {
            position: absolute;
            top: 0;
            right: 0;
            margin: 1rem;
        }

        .btn-love2 i {
            font-size: 2rem;
            color: #dc3545;
        }
        .btn-love2 i.fill {
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
            margin: 0 0.5em;
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

        #modal {
            z-index: 2;
        }








        * {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            outline: 0 none;
        }

        .swatch {
            float: left;
            margin-right: 40px;
        }

        .swatch:nth-last-child(2) {
            margin-right: 0;
        }

        .swatch .header {
            font-family: "montserratbold", sans-serif;
            text-transform: uppercase;
        }

        .swatch input {
            display: none;
        }

        .swatch .swatch-element {
            float: left;
            margin: 5px 8px 0 0;
            position: relative;
        }

        .swatch .color label {
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            border: 1px solid;
            cursor: pointer;
            display: block;
            height: 42px;
            padding: 7px 0 0 7px;
            width: 42px;
        }

        .swatch .color label span {
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            display: block;
            height: 26px;
            position: relative;
            width: 26px;
        }

        .swatch .color label span:after {
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background: transparent url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjEycHgiIGhlaWdodD0iOXB4IiB2aWV3Qm94PSIwIDAgMTIgOSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpza2V0Y2g9Imh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaC9ucyI+CiAgICA8ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTIzMS4wMDAwMDAsIC0xMzAyLjAwMDAwMCkiIGZpbGw9IiNGRkZGRkYiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMy4wMDAwMDAsIDEyNDYuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMTIzNS45MzgzNyw1OC40NTA1ODYxIEwxMjM0LjUyMTE2LDU5LjM5NTUzMDcgTDEyMzcuNTQ4NDgsNjMuOTM2NzE1OCBMMTI0NS45MjIyNSw1OC4zNTM5MTk4IEwxMjQ0Ljk3NzczLDU2LjkzNjcxNTggTDEyMzguMDIxMTYsNjEuNTc0NTY3MSBMMTIzNS45MzgzNyw1OC40NTA1ODYxIEwxMjM1LjkzODM3LDU4LjQ1MDU4NjEgWiIgaWQ9ImZhamZrYSIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTI0MC4yMjE3MDYsIDYwLjQzNjcxNikgcm90YXRlKC0xMC4wMDAwMDApIHRyYW5zbGF0ZSgtMTI0MC4yMjE3MDYsIC02MC40MzY3MTYpIj48L3BhdGg+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==") no-repeat center center;
            bottom: 0;
            content: "";
            display: block;
            height: 100%;
            left: 0;
            opacity: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .swatch .plain label {
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            font-family: "montserratbold", sans-serif;
            border: 1px solid #086fcf;
            color: #086fcf;
            cursor: pointer;
            display: block;
            height: 42px;
            padding-top: 8px;
            text-align: center;
            width: 42px;
        }

        .swatch .color input:checked + label span:after {
            opacity: 1;
        }

        .swatch input:not(:checked) + label {
            border-color: #edeff2 !important;
        }

        .swatch input:not(:checked) + label:hover {
            border-color: #b5b6bd !important;
        }

        .swatch .plain input:not(:checked) + label {
            color: #16161a !important;
        }

        .swatch .blue input:checked + label {
            border-color: #086fcf !important;
        }

        .swatch .yellow input:checked + label {
            border-color: #f5c81f !important;
        }

        .swatch .red input:checked + label {
            border-color: #d9332e !important;
        }

        .swatch .blue label span {
            background-color: #086fcf !important;
        }

        .swatch .yellow label span {
            background-color: #f5c81f !important;
        }

        .swatch .red label span {
            background-color: #d9332e !important;
        }

        .crossed-out {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
        }

        .swatch .swatch-element .crossed-out {
            display: none;
        }


        .swatch .swatch-element.soldout label {
            filter: alpha(opacity=60);
            -khtml-opacity: 0.6;
            -moz-opacity: 0.6;
            opacity: 0.6;
        }

        .swatch .tooltip {
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            text-align: center;
            background-color: rgba(22, 22, 26, 0.93);
            color: #fff;
            bottom: 100%;
            padding: 10px;
            display: block;
            position: absolute;
            width: 100px;
            left: -23px;
            margin-bottom: 15px;
            filter: alpha(opacity=0);
            -khtml-opacity: 0;
            -moz-opacity: 0;
            opacity: 0;
            visibility: hidden;
            -webkit-transform: translateY(10px);
            -moz-transform: translateY(10px);
            -ms-transform: translateY(10px);
            -o-transform: translateY(10px);
            transform: translateY(10px);
            -webkit-transition: all 0.25s ease-out;
            -moz-transition: all 0.25s ease-out;
            -ms-transition: all 0.25s ease-out;
            -o-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
            -webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
            -moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
            -ms-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
            -o-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
            z-index: 10000;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .swatch .tooltip:before {
            bottom: -20px;
            content: " ";
            display: block;
            height: 20px;
            left: 0;
            position: absolute;
            width: 100%;
        }

        .swatch .tooltip:after {
            border-left: solid transparent 10px;
            border-right: solid transparent 10px;
            border-top: solid rgba(22, 22, 26, 0.93) 10px;
            bottom: -10px;
            content: " ";
            height: 0;
            left: 50%;
            margin-left: -13px;
            position: absolute;
            width: 0;
        }

        .swatch .swatch-element:hover .tooltip {
            filter: alpha(opacity=100);
            -khtml-opacity: 1;
            -moz-opacity: 1;
            opacity: 1;
            visibility: visible;
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            -ms-transform: translateY(0px);
            -o-transform: translateY(0px);
            transform: translateY(0px);
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

      

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['image']) && isset($_POST['image2']) && isset($_POST['image3']) && isset($_POST['price']) && isset($_POST['details'])) {
      
        $id = $_POST['id'];
        $name = $_POST['name'];
        $image = $_POST['image'];
        $image2 = $_POST['image2'];
        $image3 = $_POST['image3'];             						
      	$price = $_POST['price'];
        $details = $_POST['details'];
        
?>



    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="col-lg-4 left-side-product-box pb-3">
                            <img id="main-image" src="<?php echo $image; ?>" alt="Women's Velvet Dress" class="border image" onclick="zoomImage(this)">
                            <div class="sub-img">
                            <img src="<?php echo $image; ?>" class="border2" onclick="changeImage(this)">
                            <img src="<?php echo $image2; ?>" class="border2" onclick="changeImage(this)">
                            <img src="<?php echo $image3; ?>" class="border2" onclick="changeImage(this)">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col-lg-8">
                        <div class="right-side-pro-detail border p-3" id="details">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="m-0 p-0 product_name">
                                        <?php echo $name; ?>
                                    </h4>
                                </div>
                                <div class="col-lg-12">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                            <p class="m-0 p-0 price-pro text-end">$<span class="price" style="font-size: 100%;"><?php echo $price; ?></span></p>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex flex-row-reverse bd-highlight">                                                
                                                    <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                                    <button class="btn btn-love" data-toggle="collapse" name="heart" value="1" onclick="toggleLove('love1');">
                                                        <i id="love1" class="bi bi-heart"></i>
                                                    </button>
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                                                    <input type="hidden" name="price" value="<?php echo $price; ?>">
                                                    <input type="hidden" name="image" value="<?php echo $image; ?>">
                                                </form>                                           
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                </div>
                                <div class="col-lg-12 pt-2">
                                    <h5>Product Detail</h5>
                                    <p class="m-0 p-0">
                                        <?php echo $details; ?>
                                    </p>
                                    <hr class="my-2">
                                </div>




                                <!-- Add color switch input -->
                                <div class="swatches">
                                    <div class="swatch clearfix" data-option-index="0">
                                        <br>
                                        <h6>Size:</h6>
                                        <div data-value="M" class="swatch-element plain m available">
                                            <input id="swatch-0-m" type="radio" name="option-0" value="M" checked />
                                            <label for="swatch-0-m">
                                                M
                                                <img class="crossed-out" />
                                            </label>
                                        </div>
                                        <div data-value="L" class="swatch-element plain l available">
                                            <input id="swatch-0-l" type="radio" name="option-0" value="L" />
                                            <label for="swatch-0-l">
                                                L
                                                <img class="crossed-out" />
                                            </label>
                                        </div>
                                        <div data-value="XL" class="swatch-element plain xl available">
                                            <input id="swatch-0-xl" type="radio" name="option-0" value="XL" />
                                            <label for="swatch-0-xl">
                                                XL
                                                <img class="crossed-out" />
                                            </label>
                                        </div>
                                        <div data-value="XXL" class="swatch-element plain xxl available">
                                            <input id="swatch-0-xxl" type="radio" name="option-0" value="XXL" />
                                            <label for="swatch-0-xxl">
                                                XXL
                                                <img class="crossed-out" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="swatch clearfix" data-option-index="1">
                                        <br>
                                        <h6>Color: </h6>
                                        <div data-value="Blue" class="swatch-element color blue available">
                                            <div class="tooltip">
                                                Blue
                                            </div>
                                            <input quickbeam="color" id="swatch-1-blue" type="radio" name="option-1" value="Blue" checked />
                                            <label for="swatch-1-blue" style="border-color: blue;">
                                                <img class="crossed-out" />
                                                <span style="background-color: blue;"></span>
                                            </label>
                                        </div>
                                        <div data-value="Red" class="swatch-element color red available">
                                            <div class="tooltip">
                                                Red
                                            </div>
                                            <input quickbeam="color" id="swatch-1-red" type="radio" name="option-1" value="Red" />
                                            <label for="swatch-1-red" style="border-color: red;">
                                                <img class="crossed-out" />
                                                <span style="background-color: red;"></span>
                                            </label>
                                        </div>
                                        <div data-value="Yellow" class="swatch-element color yellow available">
                                            <div class="tooltip">
                                                Yellow
                                            </div>
                                            <input quickbeam="color" id="swatch-1-yellow" type="radio" name="option-1" value="Yellow" />
                                            <label for="swatch-1-yellow" style="border-color: yellow;">
                                                <img class="crossed-out" />
                                                <span style="background-color: yellow;"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <h6 style="color: Transparent;">pay </h6>

                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-primary" id="myButton" type="button">ADD TO CART</button>
                                        </div>
                                        <div class="col">
                                            <div class="input-group">
                                                <button class="btn btn-outline-secondary btn-minus" type="button">-</button>
                                                <input type="number" value="1" class="form-control quantity" />
                                                <button class="btn btn-outline-secondary btn-plus" type="button">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End size switch select -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br>


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
                            
                            <form id="productForm10" action="shopping.php" method="POST">
                            <img class="card-img-top" src="./image/tshirt-28.png" alt="Product Image" onclick="submitForm('productForm10')">

                                <input type="hidden" name="id" value="10">
                                <input type="hidden" name="name" value="OBLIQUE JACKET">
                                <input type="hidden" name="image" value="./image/tshirt-28.png">
                                <input type="hidden" name="image2" value="./image/tshirt-29.png">
                                <input type="hidden" name="image3" value="./image/tshirt-30.png">
                                <input type="hidden" name="price" value="37.99">
                                <input type="hidden" name="details" value="Unveiled at the Winter 2023-2024 fashion show, the Oblique jacket revisits House codes of tailoring with a modern edge. Crafted in anthracite gray wool, it showcases peak lapels and side welt pockets. The vertical chest pocket lends originality to the classic menswear silhouette. The jacket will elevate dressy attire with a sophisticated touch.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love2" data-toggle="collapse" name="heart" value="10" onclick="toggleLove('love10');">
                                    <i id="love10" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="10">
                                <input type="hidden" name="name" value="OBLIQUE JACKET">
                                <input type="hidden" name="price" value="37.99">
                                <input type="hidden" name="image" value="./image/tshirt-28.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">OBLIQUE JACKET</h5>

                                    <h5 class="card-title mb-0">$37.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$20.99</del></h6>
                                </div>
                            </div>
                        </div>
                        <div class="card">

                                    <form id="productForm11" action="shopping.php" method="POST">
                                    <img class="card-img-top" src="./image/tshirt-31.png" alt="Product Image" onclick="submitForm('productForm11')">

                                        <input type="hidden" name="id" value="11">                              
                                        <input type="hidden" name="name" value="RELAXED-FIT T-SHIRT">
                                        <input type="hidden" name="image" value="./image/tshirt-31.png">
                                        <input type="hidden" name="image2" value="./image/tshirt-32.png">
                                        <input type="hidden" name="image3" value="./image/tshirt-33.png">
                                        <input type="hidden" name="price" value="77.99">
                                        <input type="hidden" name="details" value="The T-shirt is inspired by 1970s space operas and channels an intergalactic desert universe. Crafted in gray slub cotton jersey, it stands out with a black AsteroDior signature. The ribbed crew neck and relaxed cut allow the T-shirt to elevate jeans or track pants.">
                                    </form>
                                
                                    <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                        <button class="btn btn-love2" data-toggle="collapse" name="heart" value="11" onclick="toggleLove('love11');">
                                            <i id="love11" class="bi bi-heart"></i>
                                        </button>
                                        <input type="hidden" name="id" value="11">
                                        <input type="hidden" name="name" value="RELAXED-FIT T-SHIRT">
                                        <input type="hidden" name="price" value="77.99">
                                        <input type="hidden" name="image" value="./image/tshirt-31.png">
                                    </form>

                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">

                                            <h5 class="card-title mb-2">RELAXED-FIT T-SHIRT</h5>

                                            <h5 class="card-title mb-0">$77.99</h5>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">

                                            <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                            <h6><del style="color: red;">$20.99</del></h6>
                                        </div>
                                    </div>
                        </div>
                        <div class="card d-none d-md-block">

                            <form id="productForm12" action="shopping.php" method="POST">
                            <img class="card-img-top" src="./image/tshirt-34.png" alt="Product Image" onclick="submitForm('productForm12')">

                                <input type="hidden" name="id" value="12">
                                <input type="hidden" name="name" value="OVERSIZED T-SHIRT">
                                <input type="hidden" name="image" value="./image/tshirt-34.png">
                                <input type="hidden" name="image2" value="./image/tshirt-35.png">
                                <input type="hidden" name="image3" value="./image/tshirt-36.png">
                                <input type="hidden" name="price" value="26.99">
                                <input type="hidden" name="details" value="The T-shirt revisits an essential item with unique savoir-faire. Crafted in anthracite gray cotton-blend knit with floating thread, it offers a lightweight and minimal silhouette. The style is accented by a crew neck and tonal Dior Italic label on the side. Relaxed and versatile, the T-shirt will complete any casual attire.">
                            </form>
                            
                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love2" data-toggle="collapse" name="heart" value="12" onclick="toggleLove('love12');">
                                    <i id="love12" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="12">
                                <input type="hidden" name="name" value="OVERSIZED T-SHIRT">
                                <input type="hidden" name="price" value="26.99">
                                <input type="hidden" name="image" value="./image/tshirt-34.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">OVERSIZED T-SHIRT</h5>

                                    <h5 class="card-title mb-0">$26.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$20.99</del></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">

                            <form id="productForm13" action="shopping.php" method="POST">
                            <img class="card-img-top" src="./image/tshirt-37.png" alt="Product Image" onclick="submitForm('productForm13')">

                                <input type="hidden" name="id" value="13">
                                <input type="hidden" name="name" value="OVERSHIRT JACKET">
                                <input type="hidden" name="image" value="./image/tshirt-37.png">
                                <input type="hidden" name="image2" value="./image/tshirt-38.png">
                                <input type="hidden" name="image3" value="./image/tshirt-39.png">
                                <input type="hidden" name="price" value="33.99">
                                <input type="hidden" name="details" value="Unveiled at the Winter 2023-2024 fashion show, the Oblique jacket revisits House codes of tailoring with a modern edge. Crafted in anthracite gray wool, it showcases peak lapels and side welt pockets. The vertical chest pocket lends originality to the classic menswear silhouette. The jacket will elevate dressy attire with a sophisticated touch.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love2" data-toggle="collapse" name="heart" value="13" onclick="toggleLove('love13');">
                                    <i id="love13" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="13">
                                <input type="hidden" name="name" value="OVERSHIRT JACKET">
                                <input type="hidden" name="price" value="33.99">
                                <input type="hidden" name="image" value="./image/tshirt-37.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">OVERSHIRT JACKET</h5>

                                    <h5 class="card-title mb-0">$33.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$20.99</del></h6>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                                    <form id="productForm14" action="shopping.php" method="POST">
                                    <img class="card-img-top" src="./image/tshirt-40.png" alt="Product Image" onclick="submitForm('productForm14')">

                                        <input type="hidden" name="id" value="14">
                                        <input type="hidden" name="name" value="OVERSHIRT">
                                        <input type="hidden" name="image" value="./image/tshirt-40.png">
                                        <input type="hidden" name="image2" value="./image/tshirt-41.png">
                                        <input type="hidden" name="image3" value="./image/tshirt-42.png">
                                        <input type="hidden" name="price" value="47.99">
                                        <input type="hidden" name="details" value="New for Winter 2023, the overshirt plays on the codes of utilitarian attire. Crafted in blue cotton denim, it features two patch pockets, a Dior embroidery on the chest and buttons engraved with the Dior signature. The zipper details at the hem and cuffs lend a unique touch. The overshirt can be worn with the matching jeans to complete a modern look.">
                                    </form>

                                    <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                        <button class="btn btn-love2" data-toggle="collapse" name="heart" value="14" onclick="toggleLove('love14');">
                                            <i id="love14" class="bi bi-heart"></i>
                                        </button>
                                        <input type="hidden" name="id" value="14">
                                        <input type="hidden" name="name" value="OVERSHIRT">
                                        <input type="hidden" name="price" value="47.99">
                                        <input type="hidden" name="image" value="./image/tshirt-40.png">
                                    </form>

                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">

                                            <h5 class="card-title mb-2">OVERSHIRT</h5>

                                            <h5 class="card-title mb-0">$47.99</h5>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">

                                            <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                            <h6><del style="color: red;">$20.99</del></h6>
                                        </div>
                                    </div>
                        </div>
                        <div class="card d-none d-md-block">

                            <form id="productForm15" action="shopping.php" method="POST">
                            <img class="card-img-top" src="./image/tshirt-43.png" alt="Product Image" onclick="submitForm('productForm15')">

                                <input type="hidden" name="id" value="15">
                                <input type="hidden" name="name" value="POBLIQUE JACKET">
                                <input type="hidden" name="image" value="./image/tshirt-43.png">
                                <input type="hidden" name="image2" value="./image/tshirt-44.png">
                                <input type="hidden" name="image3" value="./image/tshirt-45.png">
                                <input type="hidden" name="price" value="50.99">
                                <input type="hidden" name="details" value="Unveiled at the Winter 2023-2024 fashion show, the Oblique jacket revisits House codes of tailoring with a modern edge. Crafted in anthracite gray wool, it showcases peak lapels and side welt pockets. The vertical chest pocket lends originality to the classic menswear silhouette. The jacket will elevate dressy attire with a sophisticated touch.">
                            </form>

                            <form method="POST" action="./PHP/favorite.php" onsubmit="addToFavorites(event, this)">
                                <button class="btn btn-love2" data-toggle="collapse" name="heart" value="16" onclick="toggleLove('love15');">
                                    <i id="love15" class="bi bi-heart"></i>
                                </button>
                                <input type="hidden" name="id" value="15">
                                <input type="hidden" name="name" value="POBLIQUE JACKET">
                                <input type="hidden" name="price" value="50.99">
                                <input type="hidden" name="image" value="./image/tshirt-43.png">
                            </form>

                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">

                                    <h5 class="card-title mb-2">POBLIQUE JACKET</h5>

                                    <h5 class="card-title mb-0">$50.99</h5>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">

                                    <h6 class="card-subtitle mb-2 text-muted">Add to Cart</h6>

                                    <h6><del style="color: red;">$20.99</del></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>


    </div>

    <br>

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


  
<script>
    function submitForm(formId) {
        document.getElementById(formId).submit();
    }
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var button = document.getElementById('myButton');
        button.addEventListener('click', function() {
            if (document.getElementById("username-item")) {

                var id = '<?php echo $id; ?>'; // Get the id from PHP variable
                var price = parseFloat(document.querySelector('.price').textContent.trim());
                var product_name = document.querySelector('.product_name').textContent.trim();
                var image = '<?php echo $image; ?>'; // Get the image URL from PHP variable
                var size = document.querySelector('input[name="option-0"]:checked').value;
                var color = document.querySelector('input[name="option-1"]:checked').value;
                var quantity = parseInt(document.querySelector('.quantity').value);

                var data = {
                    id: id,
                    product_name: product_name,
                    image: image,
                    price: price,
                    size: size,
                    color: color,
                    quantity: quantity
                };

                swal(
                    'Success',
                    'Item added to Cart!',
                    'success'
                );

                var xhr = new XMLHttpRequest();
                xhr.open('POST', './PHP/cart.php', true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        console.log(xhr.responseText);
                    }
                };
                xhr.send(JSON.stringify(data));

            } else {
                swal(
                    'Warning!',
                    'Please login before adding to Cart!',
                    'warning'
                );
            }
        });
    });
</script>



<?php
    }
}
?>

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
        // function to change the main image
        function changeImage(img) {
            document.getElementById("main-image").src = img.src;
        }

        // function to zoom the main image and enable panning
        function zoomImage(img) {
            // create a modal element to display the zoomed image
            var modal = document.createElement("div");
            modal.id = "modal";
            modal.style.position = "fixed";
            modal.style.top = "0";
            modal.style.left = "0";
            modal.style.width = "100%";
            modal.style.height = "100%";
            modal.style.backgroundColor = "rgba(0,0,0,0.8)";
            modal.style.display = "flex";
            modal.style.alignItems = "center";
            modal.style.justifyContent = "center";

            // create a close button to exit the modal
            var closeBtn = document.createElement("span");
            closeBtn.innerHTML = "&times;";
            closeBtn.style.position = "absolute";
            closeBtn.style.top = "10px";
            closeBtn.style.right = "20px";
            closeBtn.style.color = "white";
            closeBtn.style.fontSize = "40px";
            closeBtn.style.cursor = "pointer";

            // create a zoomed image element with the same source as the main image
            var zoomedImg = document.createElement("img");
            zoomedImg.src = img.src;
            zoomedImg.style.maxWidth = "80%";
            zoomedImg.style.maxHeight = "80%";

            // append the elements to the modal and the modal to the body
            modal.appendChild(closeBtn);
            modal.appendChild(zoomedImg);
            document.body.appendChild(modal);

            // add an event listener to the close button to remove the modal
            closeBtn.addEventListener("click", function() {
                document.body.removeChild(modal);
            });

            // add an event listener to the zoomed image to enable panning
            zoomedImg.addEventListener("mousedown", function(e) {
                // get the initial mouse position and image position
                var mouseX = e.clientX;
                var mouseY = e.clientY;
                var imgX = zoomedImg.offsetLeft;
                var imgY = zoomedImg.offsetTop;

                // add a mousemove event listener to the document to update the image position
                document.addEventListener("mousemove", moveImage);

                // add a mouseup event listener to the document to stop moving the image
                document.addEventListener("mouseup", function() {
                    document.removeEventListener("mousemove", moveImage);
                });

                // define the function to move the image based on the mouse movement
                function moveImage(e) {
                    // calculate the difference between the current and initial mouse positions
                    var dx = e.clientX - mouseX;
                    var dy = e.clientY - mouseY;

                    // update the image position by adding the difference
                    zoomedImg.style.left = (imgX + dx) + "px";
                    zoomedImg.style.top = (imgY + dy) + "px";
                }

            });
        }
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
    document.addEventListener('DOMContentLoaded', function() {
        var payButton = document.getElementById("pay");
        if(payButton) {
            payButton.addEventListener("click", addToCart);
        }

        function addToCart() {
            if (document.getElementById("username-item").classList.contains('d-none')) {
                swal(
                    'Warning!',
                    'Please login before adding to cart!',
                    'warning'
                );
            } else {
                // Add the item to the cart
                // ...
            }
        }
    });

    function addToFavorites(event, form) {
        event.preventDefault();
        var formData = new FormData(form);

        if (document.getElementById("username-item")) {
            var xhr = new XMLHttpRequest();
            xhr.open(form.method, form.action, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    var loveID = form.querySelector('.btn i').id;
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

    // Add event listener to heart buttons
    var loveButtons = document.querySelectorAll('.btn-love, .btn-love2');
    loveButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Fetch favorites from the database using AJAX
            fetchFavorites();
        });
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
        const mainImage = document.getElementById('main-image');
        function changeImage(img) {
            mainImage.src = img.src;
        }
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
                }
            });
        });

        plusButtons.forEach(button => {
            button.addEventListener('click',
                () => {
                    const input = button.previousElementSibling;
                    input.value++;
                });
        });

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

    <!-- Add Font Awesome and Bootstrap JS -->
    <script src="./JavaScript/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="./JavaScript/popper.min.js"></script>
    <script src="./JavaScript/bootstrap.min.js"></script>
    <script src="./JavaScript/bootstrap.bundle.min.js"></script>
    <script src="./JavaScript/all.min.js"></script>
    <script src="./JavaScript/jquery.min.js"></script>
   <script src="./JavaScript/sweetalert2.all.min.js"></script>



</body>
</html>