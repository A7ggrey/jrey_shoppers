<?php
    
    if (!isset($_SESSION['logged_in_client'])) {
    	
    	header('location: ./../errors/');
    	exit;
    }