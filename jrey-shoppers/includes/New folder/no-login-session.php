<?php
    if (isset($_SESSION['logged_in_client'])) {
    	
    	echo "Welcome" . $_SESSION['lname'] . ", " . $_SESSION['fname'] . " to Jrey Shoppers.";
    }