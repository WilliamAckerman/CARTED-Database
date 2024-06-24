<?php
include ('CARTEDConnect.php');
session_start();
        if($_SESSION['userPosition'] == "owner" or $_SESSION['userPosition'] == "admin") {
             $enable1 = "";
        }
        else {
            $enable1 = "disabled";
        }

        if($_SESSION['userPosition'] == "owner" or $_SESSION['userPosition'] == "dataEntryClerk") {
            $enable2 = "";
        }
        else {
            $enable2 = "disabled";
        }
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Main Menu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
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
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="bg-info p-3">

    <img class="img-fluid mx-auto d-block" src="LogoImage.png">

    <div class="mt-4 p-5 bg-primary text-black rounded">
        <h2 class="divText">Welcome, <?php echo $_SESSION['username']; ?></h2>
        <h3 class="divText">Role: <?php echo ucfirst($_SESSION['userPosition']); ?></h3>
    </div>

    <hr>

    <div class="container-md p-2 my-3 bg-light text-black rounded">
        <h2 class="divText">Tables</h2><br>
        <div class="btn-group center3">
            <a href="cartels.php" class="btn bg-warning">View Cartels</a>
            <a href="crimes.php" class="btn bg-secondary text-light">View Crimes</a>
            <a href="drugs.php" class="btn bg-warning">View Drugs</a>
            <a href="#" class="btn bg-secondary text-light">View Suspects</a>
            <a href="#" class="btn bg-warning">View Incidents</a>
        </div>
    </div>

    <hr>

    <div class="container-md p-2 my-3 bg-success text-black rounded">
        <h2 class="divText">User-Specific Functions</h2><br>
        <div class="btn-group center3">
            <a href="users.php" class="btn btn-primary <?php echo $enable1; ?>">Manage Users</a>
            <a href="defaultLoad.php" class="btn btn-primary <?php echo $enable2; ?>">Load Tables with Sample Data</a>
        </div>
    </div>

    <hr>
    
    <div class="d-grid">
        <a href="logout.php" class="btn bg-primary text-light">Log Out</a>
    </div>
</div>
</body>
</html>