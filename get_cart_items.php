<?php
session_start();
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Generate HTML for cart items
    $cart_html = '';
    foreach ($_SESSION['cart'] as $item) {
        $cart_html .= '<div class=sp3>';
       // $cart_html .= '<p class=c2>' . $item['name'] . ' - $' . $item['price'] . '</p>';
        $cart_html .='<div class="sp31"><img src="'.$item['image'].'"></div>';
        $cart_html .='<div class="sp32">';
        $cart_html .='<h2>'.$item['description'].'</h2>';
        $cart_html .='<h2>Colour:'.$item['colour'].'</h2>';
        $cart_html .='<h2>Size:'.$item['size'].'</h2>';
        $cart_html .='<h3>Price:'.$item['price'].'</h3>';
        $cart_html .='</div>';
        $cart_html .= '</div>';
    }
    echo $cart_html;
} else {
    echo '<p>No items in cart</p>';
}
?>
