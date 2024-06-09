<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
<header>
      <?php
         include 'urset.php';
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
            <a href="#">Account</a>
            <input type="search" class="search-bar"  placeholder="Search" /> 
             
            <div class="dropdown">
                <button><img src="image/user.png" height="30px" width="30px"></button>
                <div class="dropdown-content">
                <?php
                   include 'username.php';
                    ?>
                    <a href="#">Learn More</a>
                   
                </div>
            </div>
            <?php
             include 'lastofus.php';
            ?>


        </nav>
</header>
<div class="totalcart">
<?php
$total_price=0.0;
 function calculateTotalCartPrice() {
    $total = 0.0;
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $price = str_replace(',', '', $item['price']);
            $total += (float)$price;
        }
    }
    return number_format($total, 2);
}

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $total_price = calculateTotalCartPrice();
    echo '<h1>Total price to be paid:'.$total_price.'</h1>';
}
 
?>
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div class="sp1" id="cartuh">

     <div class="sp2" id="cart-items">

     </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Load cart items dynamically
            $.ajax({
                url: 'get_cart_items.php',
                method: 'GET',
                success: function(response) {
                    $('#cart-items').html(response);
                }
            });
        });
    </script>
</body>
</html>
