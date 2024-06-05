<?php
include ('CARTEDConnect.php');
session_start();
?>
<html>
<script>
    function validateDrug() {
    let error="";

    let x=document.forms["addDrug"]["drugName"].value;
    let xE=x.trim();

    let y=document.forms["addDrug"]["drugType"].value;
    let yE=y.trim();

    let z=document.forms["addDrug"]["unit"].value;
    let zE=z.trim();

    let a=document.forms["addDrug"]["unitPrice"].value;
    let aE=a.trim();

    if(xE=="") {
        error+="Drug name must be filled out.\n";
    }
    if(yE=="") {
        error+="Drug type must be filled out.\n";
    }
    if(zE=="") {
        error+="Drug unit must be filled out.\n";
    }
    if(aE=="") {
        error+="Drug unit price must be filled out.\n";
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
<form name ="addDrug" action="addDrugProcess.php" onsubmit="return validateDrug()" method="POST">
<div class="w3-container">
<h3>Please fill in all fields to add a new record.</h3>
<hr>
    <label for="drugName"><b>Drug Name</b></label>
    <input type="text" placeholder="Enter Drug Name" name="drugName" id="drugName" maxlength="24">

    <label for="drugType"><b>Drug Type</b></label>
    <input type="text" placeholder="Enter Drug Type" name="drugType" id="drugType" maxlength="32">

    <label for="unit"><b>Unit</b></label>
    <input type="text" placeholder="Enter Drug Unit" name="unit" id="unit" maxlength="12">

    <label for="unitPrice"><b>Unit Price</b></label>
    <input type="number" placeholder="Enter Drug Unit Price" name="unitPrice" id="unitPrice">

    <button type="submit" class="block">Add a Record</button>
    <hr>
</div>
</form>
    <form action="drugs.php">
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