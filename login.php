<?php
include ('CARTEDConnect.php');
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
function validate() {
    let error="";

    let u=document.forms["login"]["username"].value;
    let uN=u.trim();

    let p=document.forms["login"]["userPassword"].value;
    let pW=p.trim();

    if(uN=="") {
        error+="Username must be filled out.\n";
        
    }

    if(pW=="") {
        error+="Password must be filled out.\n";
        
    }

    alert(uN);
    alert(pW);
    alert(error);

    if(error=="") {
        return true;
    }
    else {
        alert(error);
        return false;
    }
}
</script>

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
        <h2>User Login</h2>
        <p>Please enter your username and password to log in.</p>
        <form action="logProcess.php" class="was-validated" onsubmit="return validate()" method="POST">
            <div class="mb-3 mt-3">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3">
                <label for="userPassword">Password:</label>
                <input type="password" class="form-control" id="userPassword" placeholder="Enter password" name="userPassword" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
    </div>
    <br>

    <div class="d-grid">
        <a href="RegiLog.php" class="btn bg-primary text-light">Return</a>
    </div>
</div>

</body>
</html>