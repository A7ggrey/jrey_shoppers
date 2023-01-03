<?php


session_start();
require("./../includes/shoppers-database.php");

$logid = $_SESSION['uid'];

$logn = "User Logout";
$logsta = "Logout Successful";
            
date_default_timezone_set("Africa/Nairobi");
                    

$logd = date('d/m/Y');
$logt = date('h:i:sa');
                    
$insertqueryuserlogs2 = "INSERT INTO userlogs(logname, logstatus, logdate, logtime, userid) VALUES('$logn', '$logsta', '$logd', '$logt', '$logid')";
$insertresultuserlogs2 = mysqli_query($database, $insertqueryuserlogs2);

if ($insertresultuserlogs2) {
	
	session_destroy();
	header('location: ./');
	exit;
}