<?php
include ('CARTEDConnect.php');
include ('functions.php');
session_start();
if(isset($_POST['crimeAttribute']) && isset($_POST['crSearchValue'])) {
    $crimeAttribute = test_input($_POST['crimeAttribute']);
    $crSearchValue = test_input($_POST['crSearchValue']);
    $query = "SELECT * FROM CRIMES WHERE " . $crimeAttribute . " = '" . $crSearchValue . "'";
}
$result = mysqli_query($con, $query);
?>
<html>
<head>
<style>
    th {
        background-color: gold;
    }
    td {
        background-color: yellow;
    }
    a {
    text-align: center;
    vertical-align: center;
    }
</style>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Crimes Search Results</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="header">
    <a href="LogoImage.png" class="logo">Search Crimes</a>
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
        <th>Crime ID</th>
        <th>Crime Name</th>
        <th>Crime Description</th>
    </tr>
    <tr>
        <?php
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td><?php echo $row['crimeID'] ?></td>
                    <td><?php echo $row['crimeName'] ?></td>
                    <td><?php echo $row['crimeDesc'] ?></td>
                    </tr>
                <?php
            }
        ?>
</table>
<br>
<div class="divText">Sample Crime Information obtained from Grabel & Associates Michigan Criminal Lawyers</div>
<a href="https://www.grabellaw.com/drug-crime-glossary-of-terms.html"><span style="color:darkblue"><div class="divText">Link</div></span></a>
<hr>
<div class="w3-container">
<div class="divText">
    <form action="crimes.php">
        <div class="divText">
        <button class = "button" value="Submit">Return to Crimes Table</button>
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