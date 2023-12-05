<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../account/index.php');
    exit();
}

require '../connection.php';

// Get user_id from the session
$user_id = $_SESSION['user_id'];

// Get product_id and other details from the form submission
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$selected_color = $_POST['selectedColor'];
$selected_size = $_POST['selectedSize'];
$product_price = floatval($_POST['product_price']);
$product_quantity = intval($_POST['product_quantity']);

// Calculate the total price
$product_finalprice = $product_quantity * $product_price;

// Prepare and bind the SQL statement with parameterized queries
$sql = "INSERT INTO cart (user_id, product_id, product_name, selected_size, selected_color, product_price, product_quantity, product_finalprice)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $con->prepare($sql);

if (!$stmt) {
    die("Error in preparing statement: " . $con->error);
}

$stmt->bind_param("iisssidi", $user_id, $product_id, $product_name, $selected_size, $selected_color, $product_price, $product_quantity, $product_finalprice);

// Execute the statement
if ($stmt->execute()) {
    echo "Product added to cart successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and the database connection
$stmt->close();
$con->close();
?>
