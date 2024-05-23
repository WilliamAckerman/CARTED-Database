<?php
include ('CARTEDConnect.php');
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Table Setup</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="w3-container w3-teal">
        <h1>Database Table Setup</h1>
    </div>
    <br><img src="LogoImage.png" alt="Logo Image" class="center"><br>
    <div class="divText">
    <?php
    $sql = "INSERT INTO DRUGS (drugName, drugType, unit, unitPrice) VALUES
    ('Ecstasy', 'Ecastasy', 'Pill', 19.5),
    ('Amphetamine', 'ATS', 'Gram', 203),
    ('Methamphetamine', 'ATS', 'Tablet', 19.5),
    ('Hashish (resin)', 'Cannabis', 'Gram', 40),
    ('Marijuana (herb)', 'Cannabis', 'Gram', 200),
    ('Cocaine salts', 'Cocaine', 'Gram', 120),
    ('Crack', 'Cocaine', 'Gram', 80),
    ('LSD', 'Hallucinogen', 'Dose', 22),
    ('Fentanyl', 'Opioid', 'Kilograms', 34500),
    ('Heroin', 'Opioid', 'Kilograms', 35500),
    ('Pharmaceutical opioids', 'Opioid', 'Pill', 31),
    ('GBL', 'Sedatives/Tranquilizers', 'Ounce', 4.5),
    ('GHB', 'Sedatives/Tranquilizers', 'Ounce', 25)
    ";
if(isset($_POST['drugs'])) {
if($con->query($sql) === TRUE)
    echo "Successfully inserted default data into drugs table.<br>";
}
else {
    echo "error";
}

$con->close();
?>
</div>
<form action="defaultLoad.php">
    <div class="divText">
    <button class = "button" value="Submit">Return to Load Tables Screen</button>
    </div>
</form>
</body>
</html>