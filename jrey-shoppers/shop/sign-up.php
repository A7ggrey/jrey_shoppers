<?php

session_start();
    
    require("./../includes/no-login-session.php");
    require("./../includes/shoppers-database.php");
    require("./../includes/session-messages.php");


    if (isset($_POST['btn-sign-up'])) {
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $oname = $_POST['oname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $agree = $_POST['agree'];

        $f = mysqli_real_escape_string($database, $fname);
        $l = mysqli_real_escape_string($database, $lname);
        $o = mysqli_real_escape_string($database, $oname);
        $g = mysqli_real_escape_string($database, $gender);
        $d = mysqli_real_escape_string($database, $dob);
        $e = mysqli_real_escape_string($database, $email);
        $ph = mysqli_real_escape_string($database, $phone);
        $pa = mysqli_real_escape_string($database, $password);
        $ag = mysqli_real_escape_string($database, $agree);
        $cunt = "NO";
        $twn = "NO";
        $st = "1";

        $checkuserquery = "SELECT useremail, userphone FROM users WHERE useremail = '$e'";
        $checkuserresult = mysqli_query($database, $checkuserquery);

        if (mysqli_num_rows($checkuserresult) > 0) {
                    
                    echo "an account already exists.";
                } else {

                    $insertuserquery = "INSERT INTO users(userfname, userlname, useroname, usergender, userdob, useremail, userphone, usercounty, usertown, userstatus, userterms, userpassword) VALUES('$f', '$l', '$o', '$g', '$d', '$e', '$ph', '$cunt', '$twn', '$st', '$ag', '$pa')";
                    $insertuserresult = mysqli_query($database, $insertuserquery);

                    if ($insertuserresult) {
                        
                        echo "User registration successfully";
                    } else {
                        echo "Something went wrong. try again later";
                    }
                }
    }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./../includes/css/bootstrap.css">
    <title>Jrey Shoppers - Sign Up Page</title>
</head>
<body>

    <div class="container" style="margin-top: 3rem;">
        
        <form action="" method="POST" class="login-form">
        <center><h3 style="color: orange;">Sign Up now</h3></center>
        <p>First Name: *</p>
        <p><input type="text" name="fname" placeholder="enter your first name" class="form-control"></p>
        <p>Last Name: *</p>
        <p><input type="text" name="lname" placeholder="enter your last name" class="form-control"></p>
        <p>Other Name:(Optional)</p>
        <p><input type="text" name="oname" placeholder="enter your other name" class="form-control"></p>
        <p>Gender: *</p>
        <p>
            <input type="radio" name="gender" value="Male" class="form-check-input"> Male &nbsp;&nbsp;
            <input type="radio" name="gender" value="Female" class="form-check-input"> Female
        </p>
        <p>Date of Birth: *</p>
        <p><input type="date" name="dob" class="form-control"></p>
        <p>Email: *</p>
        <p><input type="email" name="email" placeholder="enter your email" class="form-control"></p>
        <p>Phone Number: *</p>
        <p><input type="number" name="phone" placeholder="enter your Phone number" class="form-control"></p>
        <p>Password: *</p>
        <p><input type="password" name="password" placeholder="enter your password" class="form-control"></p>
        <p>Confirm Password: *</p>
        <p><input type="password" name="password1" placeholder="confirm your password" class="form-control"></p>
        <p><input type="checkbox" name="agree" value="I agree" class="form-check-input"> I agree with the <a href="#" class="alert-link" style="text-decoration: none;">terms of use</a></p>
        <p><input type="submit" name="btn-sign-up" value="Sign Up" class="btn btn-success"></p>
        <p><a href="./login.php" class="btn btn-secondary">I have an account</a></p>
        
    </form>

    <div style="margin-bottom: 1rem"><center><b>Powered by </b><a href="#" class="alert-link text-decoration-none">Jrey Enterprises</a> | copyright &copy; 2022</center></div>
    
    </div>

</body>
</html>