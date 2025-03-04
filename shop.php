<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="shop.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
 <div class="shop1">
  <div class="shop2"> 
    <div class="shop3">
        <!--Grid template-->
        <div class="shop31"><img src="image/one.jpg"></div>
        <div class="shop32">
            <h2>Apple iPhone 15 Pro Max (1 TB) - Natural Titanium</h2>
            <h2>FREE delivery Thu, 13 Jun for Premium members</h2>
            <h3>Only 1 left in stock.</h3>
            <h3>Service: Installation</h3>
            <div class="shopb">
            <button class="add-to-cart" data-id="1">Add to Cart</button>
            <button class="ibutton">Tech Specs</button>
            </div>
        </div>
    </div>

    

    <div class="shop3">
        <!--Grid template-->
        <div class="shop31"><img src="image/i14.jpg"></div>
        <div class="shop32">
            <h2>Apple iPhone 14 (128 GB) - Blue</h2>
            <h2>FREE delivery Mon, 10 Jun</h2>
            <h3>Only 5 left in stock</h3>
            <h3>Service: Installation</h3>
            <div class="shopb">
                <button class="add-to-cart" data-id="2">Add to Cart</button>
                <button class="ibutton">Tech Specs</button>
                </div>
        </div>
    </div>

    <div class="shop3">
        <!--Grid template-->
        <div class="shop31"><img src="image/pixel8uh.jpg"></div>
        <div class="shop32">
            <h2>Pixel 8 Pro 5G (Obsidian Black, 12GB RAM, 256GB Storage) New</h2>
            <h2>Upto 10% Off on select cardsUpto 10% Off on select cards</h2>
            <h3>FREE delivery 11 - 13 Jun for Premium Members</h3>
            <h3>Service: Installation</h3>
            <div class="shopb">
                <button class="add-to-cart" data-id="3">Add to Cart</button>
                <button class="ibutton">Tech Specs</button>
                </div>
        </div>
    </div>

    <div class="shop3">
        <!--Grid template-->
        <div class="shop31"><img src="image/s24ul.jpg"></div>
        <div class="shop32">
            <h2>Samsung Galaxy S24 Ultra 5G AI Smartphone (Titanium Black, 12GB, 256GB Storage)
                4.4 out of 5 stars 190</h2>
            <h2>Save extra with No Cost EMISave extra with No Cost EMI</h2>
            <h3>FREE delivery Mon, 10 Jun</h3>
            <h3>Service: Installation</h3>
            <div class="shopb">
                <button class="add-to-cart" data-id="4">Add to Cart</button>
                <button class="ibutton">Tech Specs</button>
                </div>
        </div>
    </div>

    <div class="shop3">
        <!--Grid template-->
        <div class="shop31"><img src="image/oneplus.jpg"></div>
        <div class="shop32">
            <h2>OnePlus 12 (Flowy Emerald, 16GB RAM, 512GB Storage)</h2>
            <button class="sum">Limited time deal</button>
            <h2>Save ₹2,000 with coupon</h2>
            <h3>FREE delivery Mon, 10 Jun</h3>
            <h3>Service: Installation</h3>
            <div class="shopb">
                <button class="add-to-cart" data-id="5">Add to Cart</button>
                <button class="ibutton">Tech Specs</button>
                </div>
        </div>
    </div>

  </div>
 </div>
 <script>
    $(document).ready(function() {
        $('.add-to-cart').on('click', function() {
            var productId = $(this).data('id');
            $.ajax({
                url: 'add_to_cart.php',
                method: 'POST',
                data: { id: productId },
                success: function(response) {
                    alert(response);
                }
            });
        });
    });
</script>
</body>
</html>