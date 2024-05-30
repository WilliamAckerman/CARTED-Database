<?php
include ('CARTEDConnect.php');
session_start();
$query = "SELECT * FROM DRUGS";
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
<h2 class="display-6 text-center">Drugs</h2>
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
<div class="divText">Drug pricing information obtained from UNODC (United Nations Office on Drugs and Crime)</div>
<a href="https://dataunodc.un.org/dp-drug-prices"><span style="color:darkblue"><div class="divText">Link</div></span></a>
<hr>
<div class="w3-container">
<div class="divText">
<h3>Standard Search</h3>
<form action="drugs.php">
        <label for="drugAttribute"><b>Drug Attribute</b></label>
        <select id="drugAttribute" name="drugAttribute" size="1">
            <option value="drugName">Drug Name</option>
            <option value="drugType">Drug Type</option>
            <option value="unit">Unit</option>
        </select><br><br>
        
        <label for="dSearchValue"><b>Searching for...</b></label>
        <input type="text" placeholder="What value are you searching for?" name="dSearchValue" id="dSearchValue">
        <button class = "button" value="Submit">Search for a Record</button>
        </div>
</div>
<hr>
    <form action="drugs.php">
        <div class="divText">
        <button class = "button" value="Submit">Return to Drugs Table</button>
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