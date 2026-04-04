<?php

$conn = new mysqli("localhost","root","","foodsite");

$result = $conn->query("SELECT * FROM orders");

while($row = $result->fetch_assoc()){

echo "Name: ".$row["name"]."<br>";
echo "Phone: ".$row["phone"]."<br>";
echo "Address: ".$row["address"]."<br>";
echo "Total: ₹".$row["total"]."<br>";

echo "<hr>";

}

?>
