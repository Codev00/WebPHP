<?php
    $mysqli = mysqli_connect("localhost","root","","my_data");

    // Check connection
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
    }
?>