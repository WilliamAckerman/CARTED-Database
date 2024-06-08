<?php
include ('CARTEDConnect.php');
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>About Us</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<div>

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
<img class="img-fluid mx-auto d-block" src="LogoImage.png"><br>
    <h2 class="divText">Our Mission</h2>
    <p class="divText">[Description goes here.]</p>
    <form action="index.php">
        <div class="divText">
        <button class = "button" value="Submit">Return</button>
        </div>
    </form>
</div>
</body>
</html>