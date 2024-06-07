<?php
include ('CARTEDConnect.php');
session_start();
$query = "SELECT * FROM CRIMES";
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
<title>Delete from Crimes Table</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="header">
    <a href="LogoImage.png" class="logo">Delete from Crimes Table</a>
    <div class="header-right">
        <a class="active" href="mainPage.php">Home</a>
        <a href="#contact">Contact Us</a>
        <a href="about.php">About Us</a>
    </div>
</div>
<?php if(isset($_SESSION['username'])) {
?>
<h2 class="display-6 text-center">Crimes</h2>
<table>
    <tr>
        <th>Crime ID</th>
        <th>Crime Name</th>
        <th>Crime Description</th>
    </tr>
    <tr>
        <?php
        $counter=0;
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td><?php echo $row['crimeID'] ?></td>
                    <td><?php echo $row['crimeName'] ?></td>
                    <td><?php echo $row['crimeDesc'] ?></td>
                    </tr>
                <?php
                $counter++;
            }
        ?>
</table>
<br>
<div class="divText">Sample Crime Information obtained from Grabel & Associates Michigan Criminal Lawyers</div>
<a href="https://www.grabellaw.com/drug-crime-glossary-of-terms.html"><span style="color:darkblue"><div class="divText">Link</div></span></a>
<hr>
<div class="w3-container">
<div class="divText">
<h3>Please type in the ID number of the row you would like to delete.</h3>
<form action="confirmDeleteCrime.php" method="POST">
        <label for="deleteCrimeID"><b>ID of row to be deleted</b></label>
        <input type="number" placeholder="Please enter the ID of the record you would like to delete." name="deleteCrimeID" id="deleteCrimeID">
        <button class = "button" value="Submit">Proceed to Delete Confirmation Screen</button>
        </div>
</div>
</form>
<hr>
<form action="crimes.php">
        <div class="divText">
        <button class = "button" value="Submit">Return to Crimes Table</button>
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