<?php
include ('CARTEDConnect.php');
include ('functions.php');
session_start();
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
<title>Confirm Deletion</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="header">
    <a href="LogoImage.png" class="logo">Confirm Deletion</a>
    <div class="header-right">
        <a class="active" href="mainPage.php">Home</a>
        <a href="#contact">Contact Us</a>
        <a href="about.php">About Us</a>
    </div>
</div>
<?php 
if(isset($_SESSION['username'])) {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $deleteCrimeID = test_input($_POST['deleteCrimeID']);
    }
    $query = "SELECT * FROM CRIMES WHERE crimeID = $deleteCrimeID";
    $result = mysqli_query($con, $query);
?>
<h2 class="display-6 text-center">Crimes</h2>
<?php
$check=validateInsert("crimeID",$deleteCrimeID,"crimes",$con);
if($check==1) {
?>
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
            <hr>
            <div class="w3-container">
            <div class="divText">
            <h3>Please confirm you would like to delete this record.</h3>
            <form action="deleteCrimeProcess.php" method="POST">
                    <label for="deleteCrimeID"><b>ID of row to be deleted</b></label>
                    <input type="checkbox" placeholder="Please enter the ID of the record you would like to delete." name="deleteCrimeID" id="deleteCrimeID" value=<?php echo $_POST['deleteCrimeID']?> required><br>
                    <button class = "button" value="Submit">Confirm Record Deletion</button>
                    </div>
            </div>
            </form>
            <?php
        }
        else {
            echo "No record was found with the specified drug ID.";
        }
        ?>
<br>
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