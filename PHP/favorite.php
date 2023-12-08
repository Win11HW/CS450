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
    $response = [
        'success' => false,
        'message' => 'Database connection failed: ' . $e->getMessage()
    ];

    echo json_encode($response);
    exit;
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    try {
        // Check if the item already exists in the favorites table
        $stmt = $pdo->prepare("SELECT id FROM favorites WHERE id = ?");
        $stmt->execute([$id]);
        $existingFavorite = $stmt->fetch();

        if ($existingFavorite) {
            // If the item exists, delete it from the favorites table
            $stmt = $pdo->prepare("DELETE FROM favorites WHERE id = ?");
            $stmt->execute([$id]);

            $response = [
                'success' => true,
                'favorite' => false
            ];
        } else {
            // If the item doesn't exist, insert it into the favorites table
            $stmt = $pdo->prepare("INSERT INTO favorites (id, name, price, image) VALUES (?, ?, ?, ?)");
            $stmt->execute([$id, $name, $price, $image]);

            $response = [
                'success' => true,
                'favorite' => true
            ];
        }

        echo json_encode($response);
        exit;
    } catch (PDOException $e) {
        $response = [
            'success' => false,
            'message' => 'Error saving favorite: ' . $e->getMessage()
        ];

        echo json_encode($response);
        exit;
    }
}

$response = [
    'success' => false,
    'message' => 'Invalid request method'
];

echo json_encode($response);
exit;
?>