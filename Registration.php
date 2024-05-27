<?php
include ('CARTEDConnect.php');
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Registration</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<form action="regProcess.php" method="POST">
    <div class="w3-container w3-teal">
        <h1>User Registration</h1>
    </div>
    <div class="w3-container">
        <h3>Please fill in all fields to create an account.</h3>
        <hr>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>
        
        <label for="userFName"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="userFName" id="userFName" required>

        <label for="userLName"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="userLName" id="userLName" required>

        <label for="userEmail"><b>Business Email Address</b></label>
        <input type="email" placeholder="Enter Business Email Address" name="userEmail" id="userEmail" required>

        <label for="userPhone"><b>Phone Number</b></label>
        <input type="number" placeholder="Enter Phone Number" name="userPhone" id="userPhone" maxlength="10" reqiored>

        <label for="userPosition"><b>User Position</b></label>
        <select id="userPosition" name="userPosition" size="1" required>
            <option value="owner">Owner</option>
            <option value="admin">Admin</option>
            <option value="schemaOwner">Schema Owner</option>
            <option value="dataAnalystReader">Data Analyst/Reader</option>
            <option value="dataEntryClerk">Data Entry Clerk</option>
            <option value="applicationUser">Application User</option>
        </select><br><br>

        <label for="userPassword"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="userPassword" id="userPassword" required>

        <label for="userCPassword"><b>Confirm Password</b></label>
        <input type="password" placeholder="Re-Enter Password" name="userCPassword" id="userCPassword" required>
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