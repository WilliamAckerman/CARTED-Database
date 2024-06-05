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
<title>Delete from Drugs Table</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="header">
    <a href="LogoImage.png" class="logo">Drugs</a>
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
        $counter=0;
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td><?php echo $row['drugID'] ?></td>
                    <td><?php echo $row['drugName'] ?></td>
                    <td><?php echo $row['drugType'] ?></td>
                    <td><?php echo $row['unit'] ?></td>
                    <td><?php echo $row['unitPrice'] ?></td>
                    </tr>
                <?php
                $counter++;
            }
        ?>
</table>
<br>
<div class="divText">Sample Drug pricing information obtained from UNODC (United Nations Office on Drugs and Crime)</div>
<a href="https://dataunodc.un.org/dp-drug-prices"><span style="color:darkblue"><div class="divText">Link</div></span></a>
<hr>
<div class="w3-container">
<div class="divText">
<h3>Please type in the ID number of the row you would like to delete.</h3>
<form action="confirmDeleteDrug.php" method="POST">
        <label for="deleteDrugID"><b>ID of row to be deleted</b></label>
        <input type="number" placeholder="Please enter the ID of the record you would like to delete." name="deleteDrugID" id="deleteDrugID">
        <button class = "button" value="Submit">Proceed to Delete Confirmation Screen</button>
        </div>
</div>
</form>
<hr>
<form action="drugs.php">
        <div class="divText">
        <button class = "button" value="Submit">Return to Drugs Table</button>
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