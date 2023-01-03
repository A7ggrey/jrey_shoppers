<?php

/*


     echo "" . count($_COOKIE). "<br><br>User Name is " . $_COOKIE[$cookieN]. " ";

?>

*/

//if (isset($_POST['submit'])) {
		
		if (!isset($_COOKIE[$cookieN])) {
	   	
	   	echo "Cookie named is not set!";
	   } else {

	   	echo "Cookie value(s):" . $_COOKIE[$cookieN] . "<br><br>";
	   }

//	}

	?>
