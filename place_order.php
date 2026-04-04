<?php

$conn = new mysqli("localhost","root","","foodsite");

$data = json_decode(file_get_contents("php://input"), true);

$name = $data["name"];
$phone = $data["phone"];
$address = $data["address"];
$items = json_encode($data["cart"]);
$total = $data["total"];

$conn->query("INSERT INTO orders(name,phone,address,items,total)
VALUES('$name','$phone','$address','$items','$total')");

echo "done";

?>
