<?php
include ('CARTEDConnect.php');
session_start();
$query = "SELECT * FROM Suspects";
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
<?php if (isset($_SESSION['username'])) {
            ?>

            
                <h2 class="divText">Suspects</h2>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-dark">
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
                        </thead>
                        å <tbody class="table-success">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
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
                        </tbody>
                    </table>
                </div>


                    </span></a>
                

<br>
<div class="divText">Sample Drug pricing information obtained from UNODC (United Nations Office on Drugs and Crime)</div>
<a href="https://dataunodc.un.org/dp-drug-prices"><span style="color:darkblue"><div class="divText">Link</div></span></a>
<hr>
<div class="w3-container">
<div class="divText">
<h3>Please type in the ID number of the row you would like to delete.</h3>
<form action="confirmDeleteSuspect.php" method="POST">
        <label for="deleteSuspectID"><b>ID of row to be deleted</b></label>
        <input type="number" placeholder="Please enter the ID of the record you would like to delete." name="deleteSuspectID" id="deleteSuspectID">
        <button class = "button" value="Submit">Proceed to Delete Confirmation Screen</button>
        </div>
</div>
</form>
<hr>
<form action="suspects.php">
        <div class="divText">
        <button class = "button" value="Submit">Return to Suspects Table</button>
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