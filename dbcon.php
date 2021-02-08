<?php
    $conn = mysqli_connect("localhost","root","","students");

// Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        //echo ("มาจร่ะ: ");
    }
    //connect db
?>