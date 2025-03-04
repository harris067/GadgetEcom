<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
    <?php 
    include 'urset.php';
/*session_start();
if(isset($_GET['logout'])) {
  $_SESSION = array();
    session_destroy();
    header("Location: home.php");
    exit();
}*/
?>
        <nav>

            <a href="home.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="#">Categories</a>
            <a href="#">Deals</a>
            <a href="new_arrivals.html">New Arrivals</a>
            <a href="#">Contact</a>
            <a href="#">About Us</a>
            <a href="cart.php">Cart</a>
            <input type="search" class="search-bar"  placeholder="Search" /> 
            <div class="dropdown">
                <button><img src="image/user.png" height="30px" width="30px"></button>
                <div class="dropdown-content">
                <?php
                   include 'username.php';
                    /*// Check if the user is logged in
                    if(isset($_SESSION['username'])){
                        // If logged in, display username and log out link
                        $username=$_SESSION['username'];
                        echo '<a href="?logout">Log Out</a>';
                    } else {
                        // If not logged in, display Sign In link
                        echo '<a href="sign.html">Sign In</a>';
                    }*/
                    ?>
                    <a href="#">Learn More</a>
                   
                </div>
            </div>

            <?php
              include 'lastofus.php';
           /*  if(isset($_SESSION['username'])){
              $username=$_SESSION['username'];
              echo "<h1>$username</h1>";
            }*/          
            ?>
            
        </nav>
    </header>

    <!-- Carousel Section -->
    <section class="carousel">
        <div class="carousel-container">
            <div class="carousel-slide">
                <img src="image/img1.jpg" alt="Slide 1">
            </div>
            <div class="carousel-slide">
                <img src="image/img2.jpg" alt="Slide 2">
            </div>
            <div class="carousel-slide">
                <img src="image/img3.jpg" alt="Slide 3">
            </div>
            <div class="carousel-slide">
                <img src="image/img4.jpg" alt="Slide 4">
            </div>
        </div>
        <button class="carousel-btn prev" id="prevBtn">&#10094;</button>
        <button class="carousel-btn next" id="nextBtn">&#10095;</button>
    </section>

    <!-- Product Cards Section -->
    <section class="product-cards">
        <a href="index.html">
            <div class="card">
                <div class="card-image">
                    <img src="image/apple15promax.jpg" alt="iPhone 15 Pro Max">
                </div>
                <div class="card-content">
                    <h3>iPhone 15 Pro Max</h3>
                    <p>Latest technology and design</p>
                </div>
            </div>
        </a>
        
        <a href="S24U.html">
            <div class="card">
                <div class="card-image">
                    <img src="image/samsungs24.jpg" alt="Galaxy S24 Ultra">
                </div>
                <div class="card-content">
                    <h3>Samsung Galaxy S24 Ultra</h3>
                    <p>High performance and sleek design</p>
                </div>
            </div>
        </a>
       <a href="Gp8P.html">
        <div class="card">
            <div class="card-image">
                <img src="image/pixel8.jpg" alt="Google Pixel 8 Pro">
            </div>
            <div class="card-content">
                <h3>Google Pixel 8 Pro </h3>
                <p>Smart and powerful</p>
            </div>
        </div>
       </a>
        <a href="Op12P.html">
            <div class="card">
                <div class="card-image">
                    <img src="image/oneplus12.png" alt="OnePlus 12 Pro">
                </div>
                <div class="card-content">
                    <h3>OnePlus 12 Pro</h3>
                    <p>Fast and smooth experience</p>
                </div>
            </div>
        </a>
       
    </section>

    <script src="home.js"></script>
</body>

</html>
