<?php
include ('CARTEDConnect.php');
session_start();
session_unset();
session_destroy();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<title>Login/Registration Selection</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="w3-container w3-teal">
        <h1>Registration/Login Selection</h1>
    </div>
    <br>
        <h2>Welcome to CARTED</h2>
    <img src="LogoImage.png" alt="Logo Image" class="center"><br><br>
<div class="divText">
<form action="login.php">
        <div class="divText">
        <button class = "button" value="Submit">Log In</button>
        </div>
</form>
<form action="Registration.php">
        <div class="divText">
        <button class = "button" value="Submit">Register</button>
        </div>
</form>
</div>
</body>
</html>