<?php
$conn = mysqli_connect("localhost", "root", "", "foodsite");

$result = mysqli_query($conn, "SELECT * FROM orders ORDER BY order_date DESC");
?>

<h2>Today's Orders</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Food</th>
    <th>Qty</th>
    <th>Total</th>
    <th>Date</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['customer_name']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['food_name']."</td>";
    echo "<td>".$row['quantity']."</td>";
    echo "<td>".$row['total_price']."</td>";
    echo "<td>".$row['order_date']."</td>";
    echo "</tr>";
}
?>

</table>
