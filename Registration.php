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
    if(fE != gE) {
        error+="Password do not match.\n";
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .center3 {
        margin: auto;
        width: 60%;
        align-items: center;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>

<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">CARTED</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
        </div>
    </div>
</nav>

<div class="bg-info p-3">
    <div class="container mt-3 rounded">
    <form name="registration" action="regProcess.php" class="was-validated" onsubmit="return validateUser()" method="POST">
    <h1>User Registration</h1>
    <p>Please fill in all fields to create an account.</p>
    <hr>
        <div class="mb-3 mt-3">
            <label for="username">Username:</label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="mb-3">
            <label for="userFName">First Name:</label>
            <input type="text" placeholder="Enter First Name:" name="userFName" id="userFName" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="mb-3">
            <label for="userLName">Last Name:</label>
            <input type="text" placeholder="Enter Last Name:" name="userLName" id="userLName" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="mb-3">
            <label for="userEmail">Business Email Address:</label>
            <input type="email" placeholder="Enter Business Email Address:" name="userEmail" id="userEmail" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="mb-3">
            <label for="userPhone">Phone Number:</label>
            <input type="number" placeholder="Enter Phone Number:" name="userPhone" id="userPhone" maxlength="10" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="mb-3">
            <label for="userPosition">User Position:</label>
            <select id="userPosition" name="userPosition" size="1">
                <option value="owner">Owner</option>
                <option value="admin">Admin</option>
                <option value="schemaOwner">Schema Owner</option>
                <option value="dataAnalystReader">Data Analyst/Reader</option>
                <option value="dataEntryClerk">Data Entry Clerk</option>
                <option value="applicationUser">Application User</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="userPassword">Password:</label>
            <input type="password" placeholder="Enter Password:" name="userPassword" id="userPassword" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="mb-3">
            <label for="userCPassword">Confirm Password:</label>
            <input type="password" placeholder="Re-Enter Password:" name="userCPassword" id="userCPassword" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    </div><br><br>

    <div class="btn-group center3">
        <a href="RegiLog.php" class="btn bg-primary text-light">Return</a>
    </div>
</div>

</body>
</html>