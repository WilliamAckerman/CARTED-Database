<?php
include ('CARTEDConnect.php');
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Delete Suspect Process</title>
        <link rel="icon" type="image/x-icon" href="LogoImage.png">
    </head>
    <body class="body">
        <div class="header">
            <a href="LogoImage.png" class="logo">Delete a Record from Drugs</a>
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
                $deleteSuspectID=test_input($_POST['deleteSuspectID']);
            }

            $sql = "DELETE FROM Suspects WHERE suspectID = $deleteSuspectID";
    
            if($con->query($sql) === TRUE) {
                echo "Record deleted from the Suspects table.";
            } else {
                echo "Failed to delete specified record from the Suspects table: <br>" . $con->error;
            }
        ?>
        <form action="suspects.php">
                    <div class="divText">
                        <button class="button" value="Submit">Return to Suspects Table</button>
                    </div>
                </form>
        <form action="index.php">
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