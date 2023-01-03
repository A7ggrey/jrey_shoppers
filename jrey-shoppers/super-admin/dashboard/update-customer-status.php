<?php

    session_start();

    if (!isset($_SESSION['super_login'])) {
    	
    	header('location: ./');
    	exit;
    }

     //required pages
    require("./../../includes/shoppers-database.php");

    if (isset($_POST['block'])) {
    	
    	$userid = $_POST['userid'];
    	$userstatus = "0";

    	$updateuserstatusquery = "UPDATE users SET userstatus = '$userstatus' WHERE userid = '$userid'";
    	$updateuserstatusresult = mysqli_query($database, $updateuserstatusquery);

    	if ($updateuserstatusresult) {
    		
    		echo "
    		<script>
    		    alert('User blocked successfully!');
    		    history.back();
    		</script>";
    	} else {

    		echo "
    		<script>
    		    alert('Could not block user. Try again later!');
    		    history.back();
    		</script>";
    	}
    }

    
    if (isset($_POST['unblock'])) {
        
        $userid = $_POST['userid'];
        $userstatus = "1";

        $updateuserstatusquery = "UPDATE users SET userstatus = '$userstatus' WHERE userid = '$userid'";
        $updateuserstatusresult = mysqli_query($database, $updateuserstatusquery);

        if ($updateuserstatusresult) {
            
            echo "
            <script>
                alert('User unblocked successfully!');
                history.back();
            </script>";
        } else {

            echo "
            <script>
                alert('Could not unblock user. Try again later!');
                history.back();
            </script>";
        }
    }


?>