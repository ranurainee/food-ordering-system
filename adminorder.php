<?php
include "db.php";
$result = mysqli_query($conn,"SELECT * FROM orders");
?>

<h2>All Orders</h2>

<table border="1">
<tr>
<th>Name</th>
<th>Food</th>
<th>Price</th>
<th>Status</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['food']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>
</table>
