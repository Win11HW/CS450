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
?>