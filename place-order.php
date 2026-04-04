<?php

include "db.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$items = $_POST['items'];
$total = $_POST['total'];

$sql = "INSERT INTO orders 
(customer_name, phone, address, items, total)
VALUES
('$name','$phone','$address','$items','$total')";

if($conn->query($sql)){
    echo "Order placed successfully";
}else{
    echo "Error";
}


$conn = mysqli_connect("localhost", "root", "", "foodsite");

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$food = $_POST['food'];
$qty = $_POST['qty'];
$total = $_POST['total'];

$sql = "INSERT INTO orders (customer_name, phone, address, food_name, quantity, total_price)
VALUES ('$name', '$phone', '$address', '$food', '$qty', '$total')";

mysqli_query($conn, $sql);

echo "Order placed successfully";

?>


