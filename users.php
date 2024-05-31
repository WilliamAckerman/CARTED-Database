<?php
include ('CARTEDConnect.php');
session_start();
$query = "SELECT * FROM USERS";
$result = mysqli_query($con, $query);
?>
<html>
<head>
<style>
    th {
        background-color: hotpink;
    }
    td {
        background-color: pink;
    }
</style>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Users</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="header">
    <a href="LogoImage.png" class="logo">Users</a>
    <div class="header-right">
        <a class="active" href="mainPage.php">Home</a>
        <a href="#contact">Contact Us</a>
        <a href="about.php">About Us</a>
    </div>
</div>
<h2 class="display-6 text-center">Users</h2>
<table>
    <tr>
        <th>User ID</th>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email Address</th>
        <th>Phone Number</th>
        <th>Position</th>
        <th>Password</th>
    </tr>
    <tr>
        <?php
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td><?php echo $row['userID'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['userFName'] ?></td>
                    <td><?php echo $row['userLName'] ?></td>
                    <td><?php echo $row['userEmail'] ?></td>
                    <td><?php echo $row['userPhone'] ?></td>
                    <td><?php echo $row['userPosition'] ?></td>
                    <td><?php echo $row['userPassword'] ?></td>
                    </tr>
                <?php
            }
        ?>
</table>
<hr>
    <form action="mainPage.php">
        <div class="divText">
        <button class = "button" value="Submit">Return to Main Menu</button>
        </div>
    </form>
</body>
</html>