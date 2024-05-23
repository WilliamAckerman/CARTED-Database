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
<style>
a:link, a:visited {
    background-color: slategray;
    color: white;
    padding: 10px 10px;
    text-align: center;
    vertical-align: center;
    text-decoration: none;
    display: inline-block;
}

a:hover, a:active {
    background-color: slateblue;
}
</style>
</head>
<body class="body">
<div class="w3-container w3-teal">
        <h1>Main Menu</h1>
    </div>
    <div class="w3-bar w3-gray">
        <a href="about.php">About</a>
        <a href="#">Contact Us</a>
    </div>
    <br><img src="LogoImage.png" alt="Logo Image" class="center"><br>
    <div class="divText"><h2 text-align:center>Welcome, <?php echo $_SESSION['username']; ?></h2></div>
    <div class="divText"><h3 text-align:center>Role: <?php echo ucfirst($_SESSION['userPosition']); ?></h3></div>
    <hr>
    <form action="drugs.php">
        <div class="divText">
            <button class="button" value="Submit">View Drugs</button>
        </div>
    </form>
    <hr>
    <?php
    if($_SESSION['userPosition'] == "owner") {
        ?>
            <form action="users.php">
                <div class="divText">
                <button class = "button" value="Submit">Manage Users</button>
                </div>
            </form>
        <?php
    }
    ?>
    <form action="defaultLoad.php">
        <div class="divText">
        <button class = "button" value="Submit">Load Tables with Sample Data</button>
        </div>
    </form>
    <hr>
    <form action="logout.php">
        <div class="divText">
        <button class = "block" value="Submit">Log Out</button>
        </div>
    </form>
</body>
</html>