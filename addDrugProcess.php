<?php
include ('CARTEDConnect.php');
include ('functions.php');
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Add Drug Process</title>
        <link rel="icon" type="image/x-icon" href="LogoImage.png">
    </head>
    <body class="body">
        <div class="header">
            <a href="LogoImage.png" class="logo">Add a Record to Drugs</a>
                <div class="header-right">
                <a class="active" href="mainPage.php">Home</a>
                <a href="#contact">Contact Us</a>
                <a href="about.php">About Us</a>
        </div>
        </div>
        <?php
        if(isset($_SESSION['username'])) {

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $drugName = test_input($_POST['drugName']);
                $drugType=test_input($_POST['drugType']);
                $unit=test_input($_POST['unit']);
                $unitPrice=test_input($_POST['unitPrice']);
            }
    
            $error = "";
    
            if(empty($_POST["drugName"])) {
                $error = $error . "No drug name entered.<br>";
            }

            if(empty($_POST["drugType"])) {
                $error = $error . "No drug type entered.<br>";
            }

            if(empty($_POST["unit"])) {
                $error = $error . "No unit entered.<br>";
            }

            if(empty($_POST["unitPrice"])) {
                $error = $error . "No unit price entered.<br>";
            }
        
            if(empty($error)) {
                $check = validateInsert("drugName",$drugName,"drugs",$con);
                if($check == 1) {
                    echo "A record with a unique value of $drugName already exists.";
                }
                else {
                    $stmt=$con->prepare("INSERT INTO DRUGS (drugName, drugType, unit, unitPrice)
                    VALUES (?,?,?,?)");
                    $stmt->bind_param("sssd",$dName,$dType,$dUnit,$dUnitPrice);

                    $dName=$drugName;
                    $dType=$drugType;
                    $dUnit=$unit;
                    $dUnitPrice=$unitPrice;
                    $stmt->execute();
                    
                    echo "New record inserted into drugs table.";
                    $stmt->close();
                }
            }
            else {
                echo $error;
            }
        ?>
        <form action="drugs.php">
                    <div class="divText">
                        <button class="button" value="Submit">Return to Drugs Table</button>
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