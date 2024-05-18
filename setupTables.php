<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'CARTED';

$con = new mysqli($servername, $username, $password, $db);
if($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}

$sql = "DROP TABLE IF EXISTS CARTELS";
if($con->query($sql) === TRUE) {
    echo "Cartels table being initialized...";
}
$sql2 = "CREATE TABLE CARTELS (
    cartelID INT PRIMARY KEY AUTO_INCREMENT,
    cartelName VARCHAR(50) NOT NULL UNIQUE,
    stateAbbr CHAR(2) NOT NULL,
    city VARCHAR(30) NOT NULL,
    country VARCHAR(30) NOT NULL
    )";
if($con->query($sql2) === TRUE) {
    echo "Cartels table initialized.";
}
else {
    echo "Failed to initialize cartels table: " . $con->error;
}

$sql3 = "DROP TABLE IF EXISTS CRIMES";
if($con->query($sql3) === TRUE) {
    echo "Crimes table being initialized...";
}
$sql4 = "CREATE TABLE CRIMES (
    crimeID INT PRIMARY KEY AUTO_INCREMENT,
    crimeName VARCHAR(24) UNIQUE,
    crimeDesc VARCHAR(100) NOT NULL
    )";
if($con->query($sql4) === TRUE) {
    echo "Crimes table initialized."
}
else {
    echo "Failed to initialized crimes table: " . $con->error;
}

$sql5 = "DROP TABLE IF EXISTS DRUGS";
if($con->query($sql5) === TRUE) {
    echo "Drugs table being initialized.";
}

$con->close();
?>