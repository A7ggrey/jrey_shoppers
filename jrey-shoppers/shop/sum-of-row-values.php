<?php
session_start();

include('./../includes/shoppers-database.php');

$select = "SELECT * FROM items";
$select1 = "SELECT sum(items.itemprice) as totalprice FROM items";
$result = mysqli_query($database, $select);
$result1 = mysqli_query($database, $select1);

$rows1 = mysqli_fetch_assoc($result1);

echo "
<table border='1'>
<tr>
<th>Item Name</th>
<th>Item Price</th>
</tr>
";

if (mysqli_num_rows($result) > 0) {
	while ($rows = mysqli_fetch_assoc($result)) {

		$totalp = $rows1['totalprice'];
		$norows = mysqli_num_rows($result);
		
		?>

		<tr>
			<td><?php echo $rows['itemname'];?></td>
			<td><?php echo $rows['itemprice'];?></td>
		</tr>

		<?php
	}
}

$average = $totalp / $norows;

echo "
<tr>
<th>Total</th>
<td>".$totalp."</td>
</tr>";

echo"
<tr>
<th>Average</th>
<td>".$average."</td>
</tr>";
echo "</table>";



?>