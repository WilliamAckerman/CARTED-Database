<?php
include ('CARTEDConnect.php');
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Login</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="w3-container w3-teal">
        <h1>Login Successful</h1>
    </div>
    <div class="divText">
    <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
    <form action="mainPage.php">
    <div class="divText">
        <button class = "button" value="Submit">Continue</button>
        </div>
    </form>
    <form action="logout.php">
    <div class="divText">
        <button class = "button" value="Submit">Log Out</button>
        </div>
    </form>
    </div>
</body>
</html>