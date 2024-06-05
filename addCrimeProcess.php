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
        <title>Add Crime Process</title>
        <link rel="icon" type="image/x-icon" href="LogoImage.png">
    </head>
    <body class="body">
        <div class="header">
            <a href="LogoImage.png" class="logo">Add a Record to Crimes</a>
                <div class="header-right">
                <a class="active" href="mainPage.php">Home</a>
                <a href="#contact">Contact Us</a>
                <a href="about.php">About Us</a>
        </div>
        </div>
        <?php
        if(isset($_SESSION['username'])) {

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $crimeName = test_input($_POST['crimeName']);
                $crimeDesc=test_input($_POST['crimeDesc']);
            }
    
            $error = "";
    
            if(empty($_POST["crimeName"])) {
                $error = $error . "No crime name entered.<br>";
            }

            if(empty($_POST["crimeDesc"])) {
                $error = $error . "No crime description entered.<br>";
            }
        
            if(empty($error)) {
                $check = validateInsert("crimeName",$crimeName,"crimes",$con);
                if($check == 1) {
                    echo "A record with a unique value of $crimeName already exists in the crime table.";
                }
                else {
                    $stmt=$con->prepare("INSERT INTO CRIMES (crimeName, crimeDesc)
                    VALUES (?,?)");
                    $stmt->bind_param("ss",$cName,$cDesc);

                    $cName=$crimeName;
                    $cDesc=$crimeDesc;
                    $stmt->execute();
                    
                    echo "New record inserted into crimes table.";
                    $stmt->close();
                }
            }
            else {
                echo $error;
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