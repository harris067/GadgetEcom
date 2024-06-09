<?php
session_start();
// Include your database connection file
//include 'db_connection.php';
$conn = new mysqli('localhost', 'root', '', 'login');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
// Retrieve product ID from request
if(isset($_POST['id'])) {
    $productId = $_POST['id'];

    // Prepare and execute SQL query to fetch product details from the database
    $stmt = $conn->prepare("SELECT description, colour, size, price, image FROM phones WHERE phoneid = ?");
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $stmt->store_result();

    // Check if product exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($description, $colour,$size,$price,$image);
        $stmt->fetch();

        // Add product to cart
        $_SESSION['cart'][] = array(
            'description' => $description,
            'colour' => $colour,
            'size' => $size,
            'price'=>$price,
            'image'=>$image
        );
        echo '<pre>';
        print_r($_SESSION['cart']);
        echo '</pre>';
        echo "Product added to cart successfully!";
    } else {
        echo "Product not found!";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Product ID not provided!";
}

// Close the database connection
$conn->close();
}
?>
