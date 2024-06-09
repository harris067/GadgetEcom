<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
// Connecting to the database
$conn = new mysqli('localhost', 'root', '', 'login');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    // Prepare and execute the SQL query
    $stmt = $conn->prepare("SELECT password, username FROM signup WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password, $username);
        $stmt->fetch();

        echo "Fetched hashed password: " . htmlspecialchars($hashed_password) . "<br>";
                echo "Fetched username: " . htmlspecialchars($username) . "<br>";
                echo "Entered password: " . htmlspecialchars($password) . "<br>";
                $password = trim($password);
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            header("location: home.php");
            exit();
        } else {
            echo "Invalid credentials";
        }
    } else {
        echo "Invalid credentials";
    }
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
