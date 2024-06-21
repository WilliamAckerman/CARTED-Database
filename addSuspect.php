<?php
include ('CARTEDConnect.php');
session_start();
?>
<html>
<script>
    function validateSuspect() {
    let error="";

    let x=document.forms["addSuspect"]["fName"].value;
    let xE=x.trim();

    let y=document.forms["addSuspect"]["mName"].value;
    let yE=y.trim();

    let z=document.forms["addSuspect"]["lName"].value;
    let zE=z.trim();

    let a=document.forms["addSuspect"]["nickname"].value;
    let aE=a.trim();

    let b=document.forms["addSuspect"]["arrested"].value;
    let bE=b.trim();

    let c=document.forms["addSuspect"]["arrestedPrior"].value;
    let cE=c.trim();

    let da=document.forms["addSuspect"]["height_cm"].value;
    let dE=d.trim();

    let e=document.forms["addSuspect"]["weight_kg"].value;
    let eE=e.trim();

    let f=document.forms["addSuspect"]["suspectAddress"].value;
    let fE=f.trim();

    let g=document.forms["addSuspect"]["tattoos"].value;
    let gE=g.trim();

    let h=document.forms["addSuspect"]["gender"].value;
    let hE=h.trim();

    if(xE=="") {
        error+="first name must be filled out.\n";
    }
    if(yE=="") {
        error+="middle name must be filled out.\n";
    }
    if(zE=="") {
        error+="last name must be filled out.\n";
    }
    if(aE=="") {
        error+="nick name price must be filled out.\n";
    }
    if(bE=="") {
        error+="first name must be filled out.\n";
    }
    if(cE=="") {
        error+="middle name must be filled out.\n";
    }
    if(dE=="") {
        error+="last name must be filled out.\n";
    }
    if(eE=="") {
        error+="nick name price must be filled out.\n";
    }
    if(fE=="") {
        error+="middle name must be filled out.\n";
    }
    if(gE=="") {
        error+="last name must be filled out.\n";
    }
    if(hE=="") {
        error+="nick name price must be filled out.\n";
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
        background-color: green;
    }
    td {
        background-color: lime;
    }
    a {
    text-align: center;
    vertical-align: center;
    }
</style>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Add a Record to Drugs</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="header">
    <a href="LogoImage.png" class="logo">Add a Record to Drugs</a>
    <div class="header-right">
        <a class="active" href="mainPage.php">Home</a>
        <a href="#contact">Contact Us</a>
        <a href="about.php">About Us</a>
    </div>
</div>
<?php if(isset($_SESSION['username'])) {
?>
<form name ="addSuspect" action="addSuspectProcess.php" onsubmit="return validateSuspect()" method="POST">
<div class="w3-container">
<h3>Please fill in all fields to add a new record.</h3>
<hr>
    <label for="fName"><b>First Name</b></label>
    <input type="text" placeholder="Enter First name" name="fName" id="fName" maxlength="24">

    <label for="mName"><b>Middle Name</b></label>
    <input type="text" placeholder="Enter Middle Name" name="mName" id="mName" maxlength="32">

    <label for="lName"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lName" id="lName" maxlength="24">

    <label for="nickname"><b>Nick Name</b></label>
    <input type="text" placeholder="Enter Nick Name" name="nickname" id="nickname" max length="32">

    <label for="arrested"><b>IsArrested</b></label>
    <input type="radio" name="arrested" value="yes">
    <input type="radio" name="arrested" value="no">

    <label for="arrestedPrior"><b>IsArrested</b></label>
    <input type="radio" name="arrestedPrior" value="yes">
    <input type="radio" name="arrestedPrior" value="no">

    <label for="height_cm"><b>Height</b></label>
    <input type="number" name="height_cm" id="height_cm">

    <label for="weight_kg"><b>Height</b></label>
    <input type="number" name="weight_kg" id="weight_kg">

    <label for="suspectAddress"><b>Suspect Address</b></label>
    <input type="text" placeholder="Enter Nick Name" name="suspectAddress" id="suspectAddress">

    <label for="tattoos"><b>Tattoos</b></label>
    <input type="text" placeholder="Enter Nick Name" name="tattoos" id="tattoos">

    <label for="gender"><b>Gender</b></label>
    <input type="radio" name="gender" value="male">
    <input type="radio" name="gender" value="female">

    <button type="submit" class="block">Add a Record</button>
    <hr>
</div>
</form>
    <form action="suspects.php">
        <div class="divText">
        <button class = "button" value="Submit">Return to Drugs Table</button>
        </div>
    </form>
    <form action="mainPage.php">
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