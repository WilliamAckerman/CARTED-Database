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
    echo "Database created successfully.<br>";
    $target = 'setupTables.php';
    $linkname = "Click this link to set up tables.<br>";
    echo "<a href='".$target."'>Link</a>";
}
else {
    echo "Error creating database: " . $con->error;
}

$con->close();
?>