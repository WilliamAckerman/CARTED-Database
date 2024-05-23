<?php
include ('CARTEDConnect.php');
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Login</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<form action="logProcess.php" method="POST">
    <div class="w3-container w3-teal">
        <h1>User Login</h1>
    </div>
    <div class="w3-container">
        <h3>Please enter your username and password to log in.</h3>
        <hr>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>

        <label for="userPassword"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="userPassword" id="userPassword" required>
        <hr>
        <button type="submit" class="block">Log In</button>
        <hr>
    </div>
</form>
<form action="RegiLog.php">
    <div class="divText">
    <button class = "button" value="Submit">Return</button>
    </div>
</form>
</body>
</html>