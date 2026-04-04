<?php
include "admin/db.php";

if(isset($_POST['order'])){
    $name = $_POST['name'];
    $food = $_POST['food'];
    $price = $_POST['price'];

    mysqli_query($conn,"INSERT INTO orders(name,food,price)
    VALUES('$name','$food','$price')");

    echo "Order Placed Successfully!";
}
?>

<form method="POST">
<h2>Order Now</h2>

<input type="text" name="name" placeholder="Your Name" required>

<input type="hidden" name="food" value="Burger">
<input type="hidden" name="price" value="150">

<button name="order">Place Order</button>

</form>
