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

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Delete the item from the database
    $deleteQuery = "DELETE FROM cart WHERE id = :id";
    $stmt = $pdo->prepare($deleteQuery);
    $stmt->execute([':id' => $id]);

    if ($stmt->rowCount() > 0) {
        echo json_encode(['status' => 'success', 'message' => 'Item deleted successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to delete item']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'No item ID provided']);
}
?>