<?php
include ('CARTEDConnect.php');
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Login</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="header">
    <a href="LogoImage.png" class="logo">Main Menu</a>
    <div class="header-right">
        <a class="active" href="mainPage.php">Home</a>
        <a href="#contact">Contact Us</a>
        <a href="about.php">About Us</a>
    </div>
</div>
    <br><img src="LogoImage.png" alt="Logo Image" class="center"><br>
    <div class="divText"><h2 text-align:center>Welcome, <?php echo $_SESSION['username']; ?></h2></div>
    <div class="divText"><h3 text-align:center>Role: <?php echo ucfirst($_SESSION['userPosition']); ?></h3></div>
    <hr>

    <form action="mainPage.php">
        <div class="divText">
            <button class="button" value="Submit">View Cartels</button>
        </div>
    </form>

    <form action="mainPage.php">
        <div class="divText">
            <button class="button" value="Submit">View Crimes</button>
        </div>
    </form>

    <form action="drugs.php">
        <div class="divText">
            <button class="button" value="Submit">View Drugs</button>
        </div>
    </form>

    <form action="mainPage.php">
        <div class="divText">
            <button class="button" value="Submit">View Suspects</button>
        </div>
    </form>

    <form action="drugs.php">
        <div class="divText">
            <button class="button" value="Submit">View Incidents</button>
        </div>
    </form>

    <hr>
    <?php
    if($_SESSION['userPosition'] == "owner" or  $_SESSION['userPosition'] == "admin") {
        ?>
            <form action="users.php">
                <div class="divText">
                <button class = "button" value="Submit">Manage Users</button>
                </div>
            </form>
        <?php
    }
    ?>
    <?php
    if($_SESSION['userPosition'] == "dataEntryClerk" or $_SESSION['userPosition'] == "owner") {
       ?> 
        <form action="defaultLoad.php">
        <div class="divText">
        <button class = "button" value="Submit">Load Tables with Sample Data</button>
        </div>
        </form>
        <?php
    }
    ?>
    <hr>
    <form action="logout.php">
        <div class="divText">
        <button class = "block" value="Submit">Log Out</button>
        </div>
    </form>
</body>
</html>