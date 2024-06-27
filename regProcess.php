<?php
include ('CARTEDConnect.php');
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Registration Process</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

    <img class="img-fluid mx-auto d-block" src="LogoImage.png"><br>

    <div class="divText">

    
    <?php
    include ('functions.php');
        
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = test_input($_POST["username"]);
            $userFName = test_input($_POST["userFName"]);
            $userLName = test_input($_POST["userLName"]);
            $userEmail = test_input($_POST["userEmail"]);
            $userPhone = test_input($_POST["userPhone"]);
            $userPosition = test_input($_POST["userPosition"]);
            $userPassword = test_input($_POST["userPassword"]);
            $userCPassword = test_input($_POST["userCPassword"]);
        }

        $error = "";

        if(empty($_POST["username"])) {
            $error = $error . "No username entered.<br>";
        }
        if(empty($_POST["userFName"])) {
            $error = $error . "Please enter a first name.<br>";
        }
        if(empty($_POST["userLName"])) {
            $error = $error . "Please enter a last name.<br>";
        }

        if(empty($_POST["userEmail"])) {
            $error = $error . "Please enter an email address.<br>";
        }
        else if(!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $error = $error . "Invalid email format.<br>";
        }

        if(empty($_POST["userPhone"])) {
            $error = $error . "Please enter a phone number.<br>";
        }

        if(empty($_POST["userPassword"])) {
            $error += "Please enter a password.<br>";
        } else {
            if(strlen($userPassword) < 8) {
                $error = $error . "Password should be at least 8 characters long.<br>";
            } elseif(!preg_match("#[0-9]+#", $userPassword)) {
                $error = $error . "Password should include at least one number.<br>";
            }
            elseif(!preg_match("#[A-Z]+#", $userPassword)) {
                $error = $error . "Password should include at least one uppercase letter.<br>";
            } elseif(!preg_match("#[a-z]+#", $userPassword)) {
                $error = $error . "Password should include at least one lowercase letter.<br>";
            }
        }
        if(strcmp($userPassword, $userCPassword) != 0) {
            $error = $error . "Passwords do not match.<br>";
        } else {
            if(strlen($userCPassword) < 8) {
                $error = $error . "Password for re-enter password field should be at least 8 characters long.<br>";
            } elseif(!preg_match("#[0-9]+#", $userCPassword)) {
                $error = $error . "Password for re-enter password field should include at least one number.<br>";
            }
            elseif(!preg_match("#[A-Z]+#", $userCPassword)) {
                $error = $error . "Password for re-enter password field should include at least one uppercase letter.<br>";
            } elseif(!preg_match("#[a-z]+#", $userCPassword)) {
                $error = $error . "Password for re-enter password field should include at least one lowercase letter.<br>";
            }
        }

        if(empty($error)) {
            $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);
            $sql = "INSERT INTO USERS (username, userFName, userLName, userEmail, userPhone, userPosition, userPassword)
            VALUES ('$username', '$userFName', '$userLName', '$userEmail', '$userPhone', '$userPosition', '$userPassword')";
    
            if($con->query($sql) === TRUE) {
                ?>
                <div class="alert alert-success">
                    <strong>New user successfully created.</strong>
                </div>
                <?php
            } else {
                ?>

                <div class="alert alert-danger">
                    <strong>Failed to create new user: <br> <?php echo $con->error; ?></strong>
                </div>
                <?php
            }
        }
        else {
            ?>

            <div class="alert alert-danger">
                <strong>
                    <?php echo $error; ?>
                </strong>
            </div>
            <?php
        }

        ?>
        </div>

        <div class="container-md p-2 my-3 bg-light text-black rounded">
        <h2 class="divText">Login/Registration</h2><br>

        <div class="btn-group center3">
        <a href="RegiLog.php" class="btn bg-success text-light">Return to Login/Registration Selection</a>
        </div><br>

        </div>
        
        </div>
</body>
</html>