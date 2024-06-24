<?php
include ('CARTEDConnect.php');
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Login Process</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">

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

    <div class="divText">
    <?php
    $error = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $userPassword = test_input($_POST["userPassword"]);
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        if(empty($username)) {
            $error = $error . "No username entered.<br>";
        } else {
            $username = trim($username);
            $username = htmlspecialchars($username);
        }

        if(empty($userPassword)) {
            $error = $error . "No password entered.<br>";
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

        if(!empty($error)) {
            echo $error;
            ?>

            <div class="container-md p-2 my-3 bg-light text-black rounded">
        <h2 class="divText">Functions</h2><br>

        <div class="btn-group center3">
        <a href="RegiLog.php" class="btn bg-success text-light">Search for a Record</a>
        </div><br>
            </div>

            <form action="RegiLog.php">
                <div class="w3-container">
                <button class = "button" value="Submit">Return</button>
                </div>
            </form>
            <?php
        }
        else {
            $query = mysqli_query($con, "SELECT * FROM USERS WHERE username = '$username'");
            $no = mysqli_num_rows($query);

            if($no>0) {
                $data = mysqli_fetch_assoc($query);
                if($data['userPassword']==$userPassword) {
                    ?>

                        <div class="alert alert-success">
                            <strong>Successfully logged in.</strong>
                        </div>
                    <?php
                    session_start();
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['userFName'] = $data['userFName'];
                    $_SESSION['userLName'] = $data['userLName'];
                    $_SESSION['userEmail'] = $data['userEmail'];
                    $_SESSION['userPhone'] = $data['userPhone'];
                    $_SESSION['userPosition'] = $data['userPosition'];
                    $_SESSION['userPassword'] = $data['userPassword'];
                    ?>

                    <div class="container-md p-2 my-3 bg-light text-black rounded">
                        <h2 class="divText">Select an Option</h2><br><br>

                        <div class="btn-group center3">
                        <a href="index.php" class="btn bg-success text-light">Continue</a>
                        </div><br><br>

                        <div class="btn-group center3">
                        <a href="logout.php" class="btn bg-success text-light">Log Out</a>
                        </div><br>

                        </div>
                    <div style="divText">
                    <?php
                } else {
                    ?>

                    <div class="alert alert-danger">
                        <strong>Wrong password entered.<br>
                        Click <a href="login.php">here</a> to log in.</strong>
                    </div>

                    <div class="container-md p-2 my-3 bg-light text-black rounded">
                    <h2 class="divText">Login/Registration</h2><br><br>

                    <div class="btn-group center3">
                        <a href="login.php" class="btn bg-success text-light">Return to Login Screen</a>
                    </div><br>

                    <div class="btn-group center3">
                        <a href="RegiLog.php" class="btn bg-success text-light">Return to Login/Registration Selection</a>
                    </div>

                    </div>
                    <?php
                }
            }
            else {
                ?>
                <div class="alert alert-danger">
                    <strong>Username/password combination does not exist.<br>
                    Click <a href="login.php">here</a> to log in.
                </strong>
                </div>
                <div class="container-md p-2 my-3 bg-light text-black rounded">
                    <h2 class="divText">Login/Registration</h2><br><br>

                    <div class="btn-group center3">
                        <a href="login.php" class="btn bg-success text-light">Return to Login Screen</a>
                        <a href="RegiLog.php" class="btn bg-success text-light">Return to Login/Registration Selection</a>
                    </div><br>

                </div>
            <?php
            }
        }
    ?>
</body>
</html>