<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE test_c8 (
        Username VARCHAR(255) not null,
        email VARCHAR(255) not null,
        mobile_no INT(13) not null,
        Passwd VARCHAR(255) not null,
        ServiceName VARCHAR(20) not null,
        Shop_name VARCHAR(255) not null,
        -- SAddress VARCHAR(255) not null
         Website VARCHAR(255) not null,
         Destination VARCHAR(255) not null 
    )";

    if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
    } else {
    echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?>