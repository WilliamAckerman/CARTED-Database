<?php
include ('CARTEDConnect.php');
?>
<html>
<script>
    function validateUser() {
    let error="";

    let a=document.forms["registration"]["username"].value;
    let aE=a.trim();

    let b=document.forms["registration"]["userFName"].value;
    let bE=b.trim();

    let c=document.forms["registration"]["userLName"].value;
    let cE=c.trim();

    let d=document.forms["registration"]["userEmail"].value;
    let dE=d.trim();

    let e=document.forms["registration"]["userPhone"].value;
    let eE=e.trim();

    let f=document.forms["registration"]["userPassword"].value;
    let fE=f.trim();

    let g=document.forms["registration"]["userCPassword"].value;
    let gE=g.trim();

    if(aE=="") {
        error+="Username must be filled out.\n";
        
    }

    if(bE=="") {
        error+="First name must be filled out.\n";
        
    }

    if(cE=="") {
        error+="Last name must be filled out.\n";
        
    }

    if(dE=="") {
        error+="Business email address must be filled out.\n";
    }

    if(eE=="") {
        error+="Phone number must be filled out.\n";
        
    }

    if(fE=="") {
        error+="Password must be filled out.\n";
        
    }

    if(gE=="") {
        error+="Confirm password field must be filled out.\n";
        
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
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Registration</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<form name="registration" action="regProcess.php" onsubmit="return validateUser()" method="POST">
    <div class="w3-container w3-teal">
        <h1>User Registration</h1>
    </div>
    <div class="w3-container">
        <h3>Please fill in all fields to create an account.</h3>
        <hr>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username">
        
        <label for="userFName"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="userFName" id="userFName">

        <label for="userLName"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="userLName" id="userLName">

        <label for="userEmail"><b>Business Email Address</b></label>
        <input type="email" placeholder="Enter Business Email Address" name="userEmail" id="userEmail">

        <label for="userPhone"><b>Phone Number</b></label>
        <input type="number" placeholder="Enter Phone Number" name="userPhone" id="userPhone" maxlength="10">

        <label for="userPosition"><b>User Position</b></label>
        <select id="userPosition" name="userPosition" size="1">
            <option value="owner">Owner</option>
            <option value="admin">Admin</option>
            <option value="schemaOwner">Schema Owner</option>
            <option value="dataAnalystReader">Data Analyst/Reader</option>
            <option value="dataEntryClerk">Data Entry Clerk</option>
            <option value="applicationUser">Application User</option>
        </select><br><br>

        <label for="userPassword"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="userPassword" id="userPassword">

        <label for="userCPassword"><b>Confirm Password</b></label>
        <input type="password" placeholder="Re-Enter Password" name="userCPassword" id="userCPassword">
        <hr>

        <button type="submit" class="block">Register</button>
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