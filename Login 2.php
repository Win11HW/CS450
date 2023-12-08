<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1a75ff">
    <link rel="icon" href="./image/icon.png">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Login 2.css">
    <title>Login</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <?php 


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $username, $password);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS ecommerce";
if ($con->query($sql) === TRUE) {

  // Select database
  mysqli_select_db($con,"ecommerce"); 

  // Create table
  $table ="CREATE TABLE IF NOT EXISTS users(
    Id int PRIMARY KEY AUTO_INCREMENT,
    Username varchar(200),
    Email varchar(200),
    Password varchar(200)
  )";
  
  mysqli_query($con, $table);

}             


if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email'") or die("Select Error");
    $row = mysqli_fetch_assoc($result);

    if(is_array($row) && !empty($row)){
        if(password_verify($password, $row['Password'])){
            $_SESSION['valid'] = $row['Email'];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['id'] = $row['Id'];
            header("Location: index.php");
            exit();
        } else {
            echo "<div class='messs'>
                  <p class='alert alert-danger' role='alert'>Wrong Username or Password</p>
                  </div> <br>";         
        }
    } else {
        echo "<div class='messs'>
              <p class='alert alert-danger'>Wrong Username or Password</p>
              </div> <br>";         
    }
}

?>
<header>Login</header>
<form action="" method="post">
    <div class="field input">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" autocomplete="off" required>
    </div>

    <div class="field input">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" autocomplete="off" required>
    </div>

    <div class="field">
        <input type="submit" class="btn" name="submit" value="Login" required>
    </div>

    <div class="links">
        Don't have an account? <a href="singup.php">Sign Up Now</a>
    </div>
</form>
        </div>
      </div>
</body>
</html>