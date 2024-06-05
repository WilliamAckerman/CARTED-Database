<?php
include ('CARTEDConnect.php');
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Delete Crime Process</title>
        <link rel="icon" type="image/x-icon" href="LogoImage.png">
    </head>
    <body class="body">
        <div class="header">
            <a href="LogoImage.png" class="logo">Delete a Record from Crimes</a>
                <div class="header-right">
                <a class="active" href="mainPage.php">Home</a>
                <a href="#contact">Contact Us</a>
                <a href="about.php">About Us</a>
        </div>
        </div>
        <?php
        include('functions.php');
        if(isset($_SESSION['username'])) {

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $deleteCrimeID=test_input($_POST['deleteCrimeID']);
            }

            $sql = "DELETE FROM CRIMES WHERE crimeID = $deleteCrimeID";
    
            if($con->query($sql) === TRUE) {
                echo "Record deleted from the crimes table.";
            } else {
                echo "Failed to delete specified record from the crime table: <br>" . $con->error;
            }
        ?>
        <form action="crimes.php">
                    <div class="divText">
                        <button class="button" value="Submit">Return to Crimes Table</button>
                    </div>
                </form>
        <form action="mainPage.php">
        <div class="divText">
        <button class = "button" value="Submit">Return to Main Menu</button>
        </div>
    </form>
        <?php
        }
        else {
        ?>
    <div style="divText">You are not logged in.</div>
    <hr>
    <form action="RegiLog.php">
        <div class="divText">
        <button class = "button" value="Submit">Go to Login/Registration</button>
        </div>
    </form>
    <?php
}
?>
    </body>
</html>