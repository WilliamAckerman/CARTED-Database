<?php
include ('CARTEDConnect.php');
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Load Tables with Sample Data</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="header">
    <a href="LogoImage.png" class="logo">Load Tables with Sample Data</a>
    <div class="header-right">
        <a class="active" href="mainPage.php">Home</a>
        <a href="#contact">Contact Us</a>
        <a href="about.php">About Us</a>
    </div>
</div>
<div class="divText">
<h3 text-align="center">Select which tables you would like to import sample data into.</h3>
<form action="loadProcess.php" method="POST">
    
    <input type="checkbox" id="cartels" name="cartels" value="Cartels">
    <label for="cartels">Cartels</label><br>

    <input type="checkbox" id="crimes" name="crimes" value="Crimes">
    <label for="crimes">Crimes</label><br>

    <input type="checkbox" id="drugs" name="drugs" value="Drugs">
    <label for="drugs">Drugs</label><br>

    <input type="checkbox" id="suspects" name="suspects" value="Suspects">
    <label for="suspects">Suspects</label><br>

    <button type="submit" class="button">Load Sample Data</button>
</form>
</div>
<hr>
    <form action="mainPage.php">
        <div class="divText">
        <button class = "button" value="Submit">Return to Main Menu</button>
        </div>
    </form>
</body>
</html>