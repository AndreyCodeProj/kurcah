<?php 

    $db = new PDO("mysql:host=localhost;dbname=sportpeople", "root", "mysql");

    if (mysqli_connect_errno()) {
        die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    } else {
       # echo "Connection = success!/n" . mysqli_get_host_info($db) . "<br />";
    }
    
