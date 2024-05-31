<?php
include ('CARTEDConnect.php');
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>About</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="header">
    <a href="LogoImage.png" class="logo">About Us</a>
    <div class="header-right">
        <a class="active" href="mainPage.php">Home</a>
        <a href="#contact">Contact Us</a>
        <a href="about.php">About Us</a>
    </div>
</div>
    <br><img src="LogoImage.png" alt="Logo Image" class="center">
    <div class="divText">
        <h2>Our Mission</h2>
    <p>
        [Description goes here.]
    </p>
    </div>
    <form action="mainPage.php">
        <div class="divText">
        <button class = "button" value="Submit">Return</button>
        </div>
    </form>
</body>
</html>