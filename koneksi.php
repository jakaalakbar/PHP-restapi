<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rshb_api";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_query($conn,"SET NAMES UTF8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
