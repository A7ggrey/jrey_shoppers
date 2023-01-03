<?php

    session_start();

    require("./../includes/shoppers-database.php");


    if (isset($_POST['user-login'])) {
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $eml = mysqli_real_escape_string($database, $email);
        $pwd = mysqli_real_escape_string($database, $password);

        $selectuserquery = "SELECT * FROM users WHERE useremail = '$eml'";
        $selectuserresult = mysqli_query($database, $selectuserquery);

        if (mysqli_num_rows($selectuserresult) > 0) {

            while ($userselected = mysqli_fetch_assoc($selectuserresult)) {
                
                $uid = $userselected['userid'];
                $uemail = $userselected['useremail'];
                $upass = $userselected['userpassword'];
                $ustatus = $userselected['userstatus'];
            }

            if ($ustatus == '0') {
                
                echo "Your account was blocked. contact the system admin.";
            } else {

                if ($pwd == password_verify($pwd, $upass)) {

                $logn = "User Login";
                $logst = "Successful";

                date_default_timezone_set("Africa/Nairobi");

                $logd = date('d/m/Y');
                $logt = date('h:i:sa');

                $insertqueryuserlogs = "INSERT INTO userlogs(logname, logstatus, logdate, logtime, userid) VALUES('$logn', '$logst', '$logd', '$logt', '$uid')";
                $insertresultuserlogs = mysqli_query($database, $insertqueryuserlogs);
                    
                    session_regenerate_id();

                    $_SESSION['login-user'] = TRUE;
                    $_SESSION['uid'] = $uid;
                    $_SESSION['umail'] = $uemail;

                    if (isset($_SESSION['url_page'])) {
                        $urlLocation = $_SESSION['url'];

                        header('location: ' .$urlLocation);
                        exit;
                    } else {
                        header('location: ./');
                        exit;
                    }
                } else {

                    $logn = "User Login";
                    $logsta = "Unsuccessful";
                    date_default_timezone_set("Africa/Nairobi");
                    
                    $logd = date('d/m/Y');
                    $logt = date('h:i:sa');
                    
                    $insertqueryuserlogs2 = "INSERT INTO userlogs(logname, logstatus, logdate, logtime, userid) VALUES('$logn', '$logsta', '$logd', '$logt', '$uid')";
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
    <title>Jrey Shoppers - Login</title>
    <link rel="stylesheet" type="text/css" href="./../includes/css/bootstrap.css">
</head>
<body>

    <div class="container" style="margin-top: 7rem;">
        <form action="" method="POST">
            <center><h3 style="color: orange;">Login</h3></center>
            <p>Username: *</p>
            <p><input type="email" name="email" placeholder="enter your email" class="form-control"></p>
            <p>Password: *</p>
            <p><input type="password" name="password" placeholder="enter password" class="form-control"></p>
            <p><input type="submit" name="user-login" value="Login" class="btn btn-primary"></p>
        </form>

        <p><a href="sign-up.php" class="btn btn-secondary">Create an account with us</a></p>

        <div><center><b>Powered by </b><a href="#" class="alert-link text-decoration-none">Jrey Enterprises</a> | copyright &copy; 2022</center></div>
    </div>

</body>
</html>