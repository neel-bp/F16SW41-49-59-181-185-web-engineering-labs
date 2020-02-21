<?php
require_once('./cart.php');
require_once('./item.php');

# This is the demonstration of the scenario given in the tasks.
# unfortunately due to lake of i hava not built the user-interface of it but,
# this code simulates the actions described in the task. 



session_start(); # Start the session...


$cart = new Cart(); # Create an empty cart.

$_SESSION['cart'] = $cart;

# Printing the CART
echo "=========== Initially the CART will empty ==========" . "\n";
print_r($_SESSION['cart']); 

# Creating new Items...
$book = new Item('PHP Book',20);
$kb = new Item("Keyboard", 10);
$mouse = new Item("Mouse", 5,'This mouse is not jerry!!!');


# Adding items to CART.
$cart->addToCart($book);
$cart->addToCart($kb);
$cart->addToCart($mouse);

echo "================ After adding items to cart =================" . "\n";
print_r($cart);

echo "===============" . "\n";
echo "Total Items: " . $cart->totalItems() . "\n"; 
echo "Total Price: " . $cart->calculateTotal() . "\n";
echo "===============" . "\n";

echo "\n\n";

echo "Removing Book from the CART" . "\n";
$cart->removeFromCart($book);

echo "\n\n";

echo "================ After removing items from cart =================" . "\n";
print_r($cart);

echo "===============" . "\n";
echo "Total Items: " . $cart->totalItems() . "\n"; 
echo "Total Price: " . $cart->calculateTotal() . "\n";
echo "===============" . "\n";



// print_r($cart);

?>