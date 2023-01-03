<?php

   $dbhost = "localhost";
   $dbuser = "root";
   $dbpassword = "";
   $dbname = "jrey_shoppers";

   $database = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

   if (!$database) {
   	
   	echo "Could not connect to the database. Please contact the System Admin";
   }