<?php
include ('CARTEDConnect.php');
session_start();
?>
<html>
<script>
    function validateCrime() {
    let error="";

    let x=document.forms["addCrime"]["crimeName"].value;
    let xE=x.trim();

    let y=document.forms["addCrime"]["crimeDesc"].value;
    let yE=y.trim();

    if(xE=="") {
        error+="Crime name must be filled out.\n";
    }
    if(yE=="") {
        error+="Crime description must be filled out.\n";
    }
    
    if(error=="") {
        return true;
    }
    else {
        alert(error);
        return false;
    }
}
</script>
<head>
<style>
    th {
        background-color: gold;
    }
    td {
        background-color: yellow;
    }
    a {
    text-align: center;
    vertical-align: center;
    }
</style>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Add a Record to Crimes</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="header">
    <a href="LogoImage.png" class="logo">Add a Record to Crimes</a>
    <div class="header-right">
        <a class="active" href="mainPage.php">Home</a>
        <a href="#contact">Contact Us</a>
        <a href="about.php">About Us</a>
    </div>
</div>
<?php if(isset($_SESSION['username'])) {
?>
<form name="addCrime" action="addCrimeProcess.php" onsubmit="return validateCrime()" method="POST">
<div class="w3-container">
<h3>Please fill in all fields to add a new record to the crimes table.</h3>
<hr>
    <label for="crimeName"><b>Crime Name</b></label>
    <input type="text" placeholder="Enter Crime Name" name="crimeName" id="crimeName" maxlength="24">

    <label for="crimeDesc"><b>Crime Description</b></label>
    <input type="text" placeholder="Enter Crime Description" name="crimeDesc" id="crimeDesc" maxlength="250">

    <button type="submit" class="block">Add a New Record</button>
    <hr>
</div>
</form>
    <form action="crimes.php">
        <div class="divText">
        <button class = "button" value="Submit">Return to Crimes Table</button>
        </div>
    </form>
    <form action="index.php">
        <div class="divText">
        <button class = "button" value="Submit">Return to Main Menu</button>
        </div>
    </form>
<?php
}
else {
    ?>
    <div style="divText">You are not logged in.</div>
    <hr>
    <form action="RegiLog.php">
        <div class="divText">
        <button class = "button" value="Submit">Go to Login/Registration</button>
        </div>
    </form>
    <?php
}
?>
</body>
</html>