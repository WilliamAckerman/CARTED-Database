<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = new mysqli($servername, $username, $password);
if($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS CARTED";
if($con->query($sql) === TRUE){
    echo "Database created successfully";
}
else {
    echo "Error creating database: " . $con->error;
}

$con->close();
?>