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

    	$updateuserstatusquery = "UPDATE superadmin SET superadminstatus = '$userstatus' WHERE superadminid = '$userid'";
    	$updateuserstatusresult = mysqli_query($database, $updateuserstatusquery);

    	if ($updateuserstatusresult) {
    		
    		echo "
    		<script>
    		    alert('Super Adminstrator blocked successfully!');
    		    history.back();
    		</script>";
    	} else {

    		echo "
    		<script>
    		    alert('Could not block Super Adminstrator. Try again later!');
    		    history.back();
    		</script>";
    	}
    }

    
    if (isset($_POST['unblock'])) {
        
        $userid = $_POST['userid'];
        $userstatus = "1";

        $updateuserstatusquery = "UPDATE superadmin SET superadminstatus = '$userstatus' WHERE superadminid = '$userid'";
        $updateuserstatusresult = mysqli_query($database, $updateuserstatusquery);

        if ($updateuserstatusresult) {
            
            echo "
            <script>
                alert('Super Adminstrator unblocked successfully!');
                history.back();
            </script>";
        } else {

            echo "
            <script>
                alert('Could not unblock Super Adminstrator. Try again later!');
                history.back();
            </script>";
        }
    }


?>