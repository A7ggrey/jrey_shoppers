<?php

   //included and required pages


   
   //calculating discount from an amount

$targetperc = '';

if (isset($_POST['submit'])) {
	
$percentage = $_POST['percentage'];
$amount = $_POST['amount'];
$percentage2 = '5';
$percentage3 = '10';
$total = '100';
$target = '1000';
$commodities = '10';

//$dis = mysqli_real_escape_string($conn, $percentage);
//$dis = mysqli_real_escape_string($conn, $amount);

$disperc = ($percentage / $total) * $amount;

$discount = $amount - $disperc;

if ($discount >= $target) {
	
	$targetpercs = ($percentage2 / $total) * $discount;

	$targetperc = $discount - $targetpercs;

} else {

	$targetperc = $discount;
}

}





?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculation discount</title>
</head>
<body>

	<form method="POST" action="">
		<p>amount:</p>
		<p><input type="text" name="amount" placeholder="enter amount"></p>
		<p>Percentage:</p>
		<p>
			<select name="percentage">
				<option>-- Choose the percentage --</option>
				<option>0</option>
				<option>5</option>
				<option>10</option>
				<option>15</option>
				<option>20</option>
				<option>25</option>
				<option>30</option>
				<option>35</option>
				<option>40</option>
				<option>45</option>
				<option>50</option>
				<option>55</option>
				<option>60</option>
				<option>65</option>
				<option>70</option>
				<option>75</option>
				<option>80</option>
				<option>85</option>
				<option>90</option>
				<option>95</option>
				<option>100</option>
			</select>
		</p>

		<p><input type="submit" name="submit" value="Submit"></p>
	</form>

	<input type="text" name="" value="Your new price is Ksh. <?php echo $targetperc;?>" readonly>
	<input type="" name="">

</body>
</html>


<script type="text/javascript">
	
	//Use javascript to get the difference of commodities available verses those commodities to be purchased by the curstomer.
</script>