<?php
include ('CARTEDConnect.php');
include ('functions.php');
session_start();
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
<title>Confirm Deletion</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
<div class="header">
    <a href="LogoImage.png" class="logo">Confirm Deletion</a>
    <div class="header-right">
        <a class="active" href="index.php">Home</a>
        <a href="#contact">Contact Us</a>
        <a href="about.php">About Us</a>
    </div>
</div>
<?php 
if(isset($_SESSION['username'])) {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $deletesuspectID = test_input($_POST['deleteSuspectID']);
    }
    $query = "SELECT * FROM suspects WHERE suspectID = $deletesuspectID";
    $result = mysqli_query($con, $query);
?>
<h2 class="display-6 text-center">Sus[ects</h2>
<?php
$check=validateInsert("suspectID",$deletesuspectID,"suspects",$con);
if($check==1) {
?>
<table>
    <tr>
        <th>Suspect ID</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Nick Name</th>
        <th>Arrested</th>
        <th>Arrested Prior</th>
        <th>Height</th>
        <th>Weight</th>
        <th>Address</th>
        <th>Tattoos</th>
        <th>Gender</th>
    </tr>
    <tr>
        <?php
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <td><?php echo $row['suspectID'] ?></td>
                    <td><?php echo $row['fName'] ?></td>
                    <td><?php echo $row['mName'] ?></td>
                    <td><?php echo $row['lName'] ?></td>
                    <td><?php echo $row['nickname'] ?></td>
                    <td><?php echo $row['arrested'] ?></td>
                    <td><?php echo $row['arrestedPrior'] ?></td>
                    <td><?php echo $row['height_cm'] ?></td>
                    <td><?php echo $row['weight_kg'] ?></td>
                    <td><?php echo $row['suspectAddress'] ?></td>
                    <td><?php echo $row['tattoos'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    </tr>
                <?php
            }
            ?>
            </table>
            <hr>
            <div class="w3-container">
            <div class="divText">
            <h3>Please confirm you would like to delete this record.</h3>
            <form action="deleteSuspectProcess.php" method="POST">
                    <label for="deleteSuspectID"><b>ID of row to be deleted</b></label>
                    <input type="checkbox" placeholder="Please enter the ID of the record you would like to delete." name="deleteSuspectID" id="deleteSuspectID" value=<?php echo $_POST['deleteSuspectID']?> required><br>
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
<form action="suspects.php">
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