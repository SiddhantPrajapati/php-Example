<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ets";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "ALTER TABLE servicesuser MODIFY passwd VARCHAR(60);

    if ($conn->query($sql) === TRUE) {
    echo "new record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>