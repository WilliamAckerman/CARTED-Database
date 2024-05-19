<?php
include ('CARTEDConnect.php');
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Table Setup</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="w3-container w3-teal">
        <h1>Database Table Setup</h1>
    </div>
    <br><img src="LogoImage.png" alt="Logo Image" class="center"><br>
    <?php
$sql = "DROP TABLE IF EXISTS CARTELS";
if($con->query($sql) === TRUE)
    echo "Cartels table being initialized...<br>";

$sql2 = "CREATE TABLE CARTELS (
    cartelID INT PRIMARY KEY AUTO_INCREMENT,
    cartelName VARCHAR(50) NOT NULL UNIQUE,
    stateAbbr CHAR(2) NOT NULL,
    city VARCHAR(30) NOT NULL,
    country VARCHAR(30) NOT NULL
    )";
if($con->query($sql2) === TRUE) {
    echo "Cartels table initialized.<br>";
}
else {
    echo "Failed to initialize cartels table: " . $con->error . "<br>";
}

$sql3 = "DROP TABLE IF EXISTS CRIMES";
if($con->query($sql3) === TRUE) {
    echo "Crimes table being initialized...<br>";
}
$sql4 = "CREATE TABLE CRIMES (
    crimeID INT PRIMARY KEY AUTO_INCREMENT,
    crimeName VARCHAR(24) UNIQUE,
    crimeDesc VARCHAR(100) NOT NULL
    )";
if($con->query($sql4) === TRUE) {
    echo "Cartels table initialized.<br>";
}
else {
    echo "Failed to initialize crimes table: " . $con->error . "<br>";
}

$sql5 = "DROP TABLE IF EXISTS DRUGS";
if($con->query($sql5) === TRUE) {
    echo "Drugs table being initialized...<br>";
}
$sql6 = "CREATE TABLE DRUGS (
    drugID INT PRIMARY KEY AUTO_INCREMENT,
    drugName VARCHAR(20) UNIQUE,
    drugType VARCHAR(24),
    pricePerGram DECIMAL (10, 2)
    )";
if($con->query($sql6) === TRUE) {
    echo "Drugs table initialized.<br>";
}
else {
    echo "Failed to initialize drugs table: " . $con->error . "<br>";
}

$sql7 = "DROP TABLE IF EXISTS SUSPECTS";
if($con->query($sql7) === TRUE) {
    echo "Suspects table being initialized...<br>";
}

$sql8 = "CREATE TABLE SUSPECTS (
    suspectID INT PRIMARY KEY AUTO_INCREMENT,
    fName VARCHAR(20) NOT NULL,
    mName VARCHAR(20),
    lName VARCHAR(50),
    nickname VARCHAR(50),
    arrested BOOLEAN,
    arrestedPrior BOOLEAN,
    height_cm INT NOT NULL,
    weight_kg INT NOT NULL,
    suspectAddress VARCHAR(200),
    tattoos VARCHAR(150),
    gender CHAR(1)
    )";
if($con->query($sql8) === TRUE) {
    echo "Suspects table intialized.<br>";
}

$sql9 = "DROP TABLE IF EXISTS INCIDENTS";
if($con->query($sql9) === TRUE) {
    echo "Incidents table being initialized...<br>";
}

$sql10 = "CREATE TABLE INCIDENTS (
    incidentID INT PRIMARY KEY AUTO_INCREMENT,
    incidentTime TIME,
    incidentDate DATE,
    incidentLocation VARCHAR(30) NOT NULL,
    incidentState CHAR(2) NOT NULL,
    drugWeight DECIMAL(10, 2),
    estPrice DECIMAL(10, 2),
    gangAffiliation BOOLEAN,
    narrative VARCHAR(300)
    )";
if($con->query($sql10) === TRUE) {
    echo "Incidents table intialized.<br>";
}
else {
    echo "Failed to initialize incidents table: " . $con->error . "<br>";
}

$sql11 = "DROP TABLE IF EXISTS USERS";
if($con->query($sql11) === TRUE) {
    echo "Users table being initialized...<br>";
}

$sql12 = "CREATE TABLE USERS (
    userID INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) UNIQUE,
    userFName VARCHAR(20) NOT NULL,
    userLName VARCHAR(50),
    userEmail VARCHAR(60) NOT NULL,
    userPhone CHAR(10) NOT NULL,
    userPosition VARCHAR(20) NOT NULL,
    userPassword VARCHAR(20) NOT NULL,
    PRIMARY KEY (userID)
    )";
if($con->query($sql12) === TRUE) {
    echo "Users table initialized.<br>";
}
else {
    echo "Failed to initialize users table: " . $con->error . "<br>";
}

$con->close();
?>
<form action="RegiLog.php">
    <button class = "button" value="Submit">Continue</button>
</form>
</body>
</html>