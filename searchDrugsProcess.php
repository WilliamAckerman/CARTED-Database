<?php
include ('CARTEDConnect.php');
include ('functions.php');
session_start();
if(isset($_POST['drugAttribute']) && isset($_POST['dSearchValue'])) {
    $drugAttribute = test_input($_POST['drugAttribute']);
    $dSearchValue = test_input($_POST['dSearchValue']);
    $query = "SELECT * FROM DRUGS WHERE " . $drugAttribute . " = '" . $dSearchValue . "'";
}
$result = mysqli_query($con, $query);
?>
<html>
<head>
<style>
    th {
        background-color: green;
    }
    td {
        background-color: lime;
    }
    a {
    text-align: center;
    vertical-align: center;
    }
</style>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Drugs</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="header">
    <a href="LogoImage.png" class="logo">Search Drugs</a>
    <div class="header-right">
        <a class="active" href="mainPage.php">Home</a>
        <a href="#contact">Contact Us</a>
        <a href="about.php">About Us</a>
    </div>
</div>
<?php if(isset($_SESSION['username'])) {
?>
<h2 class="display-6 text-center">Search Results</h2>
<table>
    <tr>
        <th>Drug ID</th>
        <th>Drug Name</th>
        <th>Drug Type</th>
        <th>Unit</th>
        <th>Average Unit Price</th>
    </tr>
    <tr>
        <?php
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td><?php echo $row['drugID'] ?></td>
                    <td><?php echo $row['drugName'] ?></td>
                    <td><?php echo $row['drugType'] ?></td>
                    <td><?php echo $row['unit'] ?></td>
                    <td><?php echo $row['unitPrice'] ?></td>
                    </tr>
                <?php
            }
        ?>
</table>
<br>
<div class="divText">Sample Drug pricing information obtained from UNODC (United Nations Office on Drugs and Crime)</div>
<a href="https://dataunodc.un.org/dp-drug-prices"><span style="color:darkblue"><div class="divText">Link</div></span></a>
<hr>
<div class="w3-container">
<div class="divText">
    <form action="drugs.php">
        <div class="divText">
        <button class = "button" value="Submit">Return to Drugs Table</button>
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