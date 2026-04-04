<?php


$conn = mysqli_connect("localhost", "root", "", "restaurant_db");

if($conn->connect_error){
    die("Connection failed");
}

?>
