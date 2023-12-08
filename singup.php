<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1a75ff">
    <link rel="icon" href="./image/icon.png">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Login.css">
    <title>Register</title>
</head>
<body>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input
    if(empty($username) || empty($email) || empty($password)){
        $error = "Please fill all the fields";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "Invalid email format";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Connect to database
        require_once './PHP/database.php';
        $db = new Database();
        $con = $db->getConnection();

        // Check if email is already taken
        $stmt = $con->prepare("SELECT Email FROM users WHERE Email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows !== 0){
            $error = "This email is already taken, please try another one";
        } else {
            // Insert user into database
            $stmt = $con->prepare("INSERT INTO users(Username, Email, Password) VALUES(?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            if($stmt->execute()){
                $success = "Registration successful!";
            } else {
                $error = "Error occurred while registering";
            }
        }
    }
}
?>

<div class="container">
    <div class="box form-box">
        <header>Sign Up</header>
        <?php if(isset($error)): ?>
            <div class="alert alert-danger" role="alert">
                <p><?php echo $error ?></p>
            </div>
        <?php endif; ?>
        <?php if(isset($success)): ?>
            <div class="alert alert-success" role="alert">
                <p><?php echo $success ?></p>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Register">
            </div>
            <div class="links">
                Already a member? <a href="Login.php">Sign In</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>