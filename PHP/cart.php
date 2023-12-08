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

// Get the JSON data from the request body
$jsonData = file_get_contents('php://input');

// Decode the JSON data
$data = json_decode($jsonData);

// Sanitize and validate the user input
$id = intval($data->id);
$product_name = $data->product_name;
$image = $data->image;
$size = mysqli_real_escape_string($conn, $data->size);
$color = mysqli_real_escape_string($conn, $data->color);
$quantity = intval($data->quantity);
$price = floatval($data->price);

// Check if the item already exists in the cart
$checkSql = "SELECT * FROM cart WHERE id = ?";
$checkStmt = $conn->prepare($checkSql);
$checkStmt->bind_param("i", $id);
$checkStmt->execute();
$result = $checkStmt->get_result();

if ($result->num_rows > 0) {
    // If the item exists, update the quantity
    $sql = "UPDATE cart SET product_name = ?, image = ?, price = ?, size = ?, color = ?, quantity = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $product_name, $image, $price, $size, $color, $quantity, $id);
} else {
    $sql = "INSERT INTO cart (id, product_name, image, price, size, color, quantity) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssi", $id, $product_name, $image, $price, $size, $color, $quantity);
}

// Execute the statement
$stmt->execute();

// Close the statements
$checkStmt->close();
$stmt->close();

// Send a response back to the client
echo "Data saved successfully";

// Close the database connection
$conn->close();

?>