<?php

    if (isset($_POST['submit'])) {
    	
    	$cookieN = $_POST['numbeR'];
        $cookieV = $_POST['namE'];

        setcookie("cookie[$cookieN]", "cookie[$cookieV]", time() + (86400 * 30), "/");

      /*if (!isset($_COOKIE[$cookieN])) {

      	foreach ($_COOKIE['cookieN'] as $name => $value) {
      		
      		$name = htmlspecialchars($name);
      		$value = htmlspecialchars($value);

      		$echo "$name : $value<br>\n";
      	}
	   	
	   	//echo "Cookie named is not set!";
	   } else {

	   	foreach ($_COOKIE['cookieN'] as $name => $value) {
      		
      		$name = htmlspecialchars($name);
      		$value = htmlspecialchars($value);

      		echo "$name : $value<br>\n";

	   	echo "" .count($_COOKIE). " ";
	   	echo "Cookie set. Value(s): " . $_COOKIE[$cookieN] . "<br><br>";
	   }
	}*/

    //header('location: cookie-read.php');
    //exit;

    }

    if ($_COOKIE[$cookieN]) {
    	
    	foreach ($_COOKIE[$cookieV] as $name => $value) {
    		$name = htmlspecialchars($name);
    		$value = htmlspecialchars($value);

    		echo "$name : $value";
    	}
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookies Setting</title>
</head>
<body>

	<form action="" method="POST">
		<p>Cookie Number:</p>
		<p><input type="number" name="numbeR" placeholder="cookie Number"></p>
		<p>Cookie Name:</p>
		<p><input type="text" name="namE" placeholder="cookie Name"></p>
		<p><input type="submit" value="Submit Cookie" name="submit"></p>
	</form>

</body>
</html>