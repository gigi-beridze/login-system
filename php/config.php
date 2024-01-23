<?php 
    $con = mysqli_connect("localhost", "phpmyadmin", "password", "phpmyadmin") or die("Count't connect");
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
?>