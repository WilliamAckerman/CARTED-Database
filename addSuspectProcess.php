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
            <a href="LogoImage.png" class="logo">Add a Record to Suspects</a>
                <div class="header-right">
                <a class="active" href="mainPage.php">Home</a>
                <a href="#contact">Contact Us</a>
                <a href="about.php">About Us</a>
        </div>
        </div>
        <?php
        if(isset($_SESSION['username'])) {
            echo($_POST['arrested']);
            echo($_POST['arrestedPrior']);
            echo($_POST['gender']);


            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $fName = test_input($_POST['fName']);
                $mName=test_input($_POST['mName']);
                $lName=test_input($_POST['lName']);
                $nickname=test_input($_POST['nickname']);
                $arrested=test_input($_POST['arrested']);
                $arrestedPrior =test_input($_POST['arrestedPrior']);
                $height_cm =test_input($_POST['height_cm']);
                $weight_kg =test_input($_POST['weight_kg']);
                $suspectAddress = test_input($_POST['suspectAddress']);
                $tattoos = test_input($_POST['tattoos']);
                $gender = test_input($_POST['gender']);



            }
    
            $error = "";
    
            if(empty($_POST["fName"])) {
                $error = $error . "No first name entered.<br>";
            }

            if(empty($_POST["mName"])) {
                $error = $error . "No middle name entered.<br>";
            }

            if(empty($_POST["lName"])) {
                $error = $error . "No last name was entered.<br>";
            }

            if(empty($_POST["nickname"])) {
                $error = $error . "No unit price entered.<br>";
            }

            if(empty($_POST["arrested"])) {
                $error = $error . "No arrested entered.<br>";
            }

            if(empty($_POST["arrestedPrior"])) {
                $error = $error . "No arrestedPrior entered.<br>";
            }

            if(empty($_POST["height_cm"])) {
                $error = $error . "No height entered.<br>";
            }

            if(empty($_POST["weight_kg"])) {
                $error = $error . "No weight entered.<br>";
            }

            if(empty($_POST["suspectAddress"])) {
                $error = $error . "No address entered.<br>";
            }

            if(empty($_POST["tattoos"])) {
                $error = $error . "No tattoos entered.<br>";
            }

            if(empty($_POST["gender"])) {
                $error = $error . "No gender entered.<br>";
            }
        
            if(empty($error)) {
                $check1 = validateInsert("fName",$fName,"suspects",$con);
                $check2 = validateInsert("mName",$mName,"suspects",$con);
                if($check1 == 1) {
                    echo "A record with a unique value of $drugName already exists.";
                }
                else {
                    $stmt=$con->prepare("INSERT INTO SUSPECTS (fName, mName, lName, nickname, arrested, arrestedPrior, height_cm, weight_kg, suspectAddress, tattoos, gender)
                    VALUES (?,?,?,?,?,?,?,?,?,?,?)");
                    $stmt->bind_param("sssssssssss",$sfName, $smName, $slName, $snickname, $sarrested, $sarrestedPrior, $sheight_cm, $sweight_kg, $ssuspectAddress, $stattoos, $sgender);

                    $sfName=$fName;
                    $smName=$mName;
                    $slName=$lName;
                    $snickname=$nickname;
                    $sarrested=$arrested;
                    $sarrestedPrior=$arrestedPrior;
                    $sheight_cm=$height_cm;
                    $sweight_kg=$weight_kg;
                    $ssuspectAddress=$suspectAddress;
                    $stattoos=$tattoos;
                    $sgender=$gender;

                    $stmt->execute();
                    
                    echo "New record inserted into drugs table.";
                    $stmt->close();
                }
            }
            else {
                echo $error;
            }
        ?>
        <form action="suspects.php">
                    <div class="divText">
                        <button class="button" value="Submit">Return to Drugs Table</button>
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