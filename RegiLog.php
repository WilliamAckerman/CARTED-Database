<?php
include ('CARTEDConnect.php');
session_start();
session_unset();
session_destroy();
?>
<html>
<head>

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

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<title>Login/Registration Selection</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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

    <div class="mt-4 p-5 bg-primary text-black rounded">
        <h2 class="divText">Welcome to CARTED</h2>
    </div><br>

    <img class="img-fluid mx-auto d-block" src="LogoImage.png"><br>

    <div class="container-md p-2 my-3 bg-light text-black rounded">
        <h2 class="divText">Login/Registration</h2><br>

        <div class="btn-group center3">
        <a href="login.php" class="btn bg-success text-light">Log In</a>
        </div><br><br>

        <div class="btn-group center3">
        <a href="Registration.php" class="btn bg-success text-light">Register</a>
        </div>
</div>

</div>

</div>

</body>
</html>