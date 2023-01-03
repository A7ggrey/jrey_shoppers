<?php

    session_start();

    require("./../includes/shoppers-database.php");


    if (isset($_POST['admin-login'])) {
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $eml = mysqli_real_escape_string($database, $email);
        $pwd = mysqli_real_escape_string($database, $password);

        $selectuserquery = "SELECT * FROM admin WHERE adminemail = '$eml'";
        $selectuserresult = mysqli_query($database, $selectuserquery);

        if (mysqli_num_rows($selectuserresult) > 0) {

            while ($userselected = mysqli_fetch_assoc($selectuserresult)) {
                
                $admid = $userselected['adminid'];
                $admemail = $userselected['adminemail'];
                $admpass = $userselected['adminpassword'];
                $admstatus = $userselected['adminstatus'];
            }

            if ($admstatus == '0') {
                
                echo "Your account was blocked. contact the system admin.";
            } else {

                if ($pwd == password_verify($pwd, $admpass)) {

                $logn = "Admin Login";
                $logst = "Successful";

                date_default_timezone_set("Africa/Nairobi");

                $logd = date('d/m/Y');
                $logt = date('h:i:sa');

                $insertqueryuserlogs = "INSERT INTO adminlogs(logname, logstatus, logdate, logtime, userid) VALUES('$logn', '$logst', '$logd', '$logt', '$admid')";
                $insertresultuserlogs = mysqli_query($database, $insertqueryuserlogs);
                    
                    session_regenerate_id();

                    $_SESSION['login-admin'] = TRUE;
                    $_SESSION['admid'] = $admid;
                    $_SESSION['admmail'] = $admemail;

                    if (isset($_SESSION['url_page'])) {
                        $urlLocation = $_SESSION['url'];

                        header('location: ' .$urlLocation);
                        exit;
                    } else {
                        header('location: ./dashboard/');
                        exit;
                    }
                } else {

                    $logn = "Admin Login";
                    $logsta = "Unsuccessful";
                    date_default_timezone_set("Africa/Nairobi");
                    
                    $logd = date('d/m/Y');
                    $logt = date('h:i:sa');
                    
                    $insertqueryuserlogs2 = "INSERT INTO adminlogs(logname, logstatus, logdate, logtime, userid) VALUES('$logn', '$logsta', '$logd', '$logt', '$admid')";
                    $insertresultuserlogs2 = mysqli_query($database, $insertqueryuserlogs2);
                   
                    echo "Wrong username or password.";
                }
            }
            
            
    } else {

        echo "No account exists with the username";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jrey Shoppers Admin - Login</title>
    <link rel="stylesheet" type="text/css" href="./../includes/css/bootstrap.css">
</head>
<body>

    <div class="container" style="margin-top: 7rem;">
        <form action="" method="POST">
            <center><h3 style="color: orange;">Administator Login</h3></center>
            <p>Username: *</p>
            <p><input type="email" name="email" placeholder="enter your email" class="form-control"></p>
            <p>Password: *</p>
            <p><input type="password" name="password" placeholder="enter password" class="form-control"></p>
            <p><input type="submit" name="admin-login" value="Login" class="btn btn-primary"></p>
        </form>

        <p><a href="#" class="btn btn-warning">Forgot Password?</a></p>

        <div><center><b>Powered by </b><a href="https://www.jrey.co.ke" class="alert-link text-decoration-none">Jrey Enterprises</a> | copyright &copy; 2023</center></div>
    </div>

</body>
</html>