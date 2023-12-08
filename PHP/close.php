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

// Check if the request contains the favorite ID
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Delete the favorite from the database
    $deleteQuery = "DELETE FROM favorites WHERE id = ?";
    $stmt = $pdo->prepare($deleteQuery);
    $stmt->execute([$id]);

    // Return a response if needed
    echo "Favorite deleted successfully!";
}
?>