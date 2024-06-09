<?php
// Check if the user is logged in
if(isset($_SESSION['username'])){
    // If logged in, display username and log out link
    $username=$_SESSION['username'];
    echo '<a href="?logout">Log Out</a>';
} else {
    // If not logged in, display Sign In link
    echo '<a href="sign.html">Sign In</a>';
}

?>