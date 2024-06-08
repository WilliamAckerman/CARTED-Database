<?php
include ('CARTEDConnect.php');
session_start();
$query = "SELECT * FROM DRUGS";
$result = mysqli_query($con, $query);

if($_SESSION['userPosition'] == "owner" or $_SESSION['userPosition'] == "admin" or $_SESSION['userPosition'] == "dataEntryClerk") {
    $enable1 = "";
}
else {
   $enable1 = "disabled";
}

if($_SESSION['userPosition'] == "owner" or $_SESSION['userPosition'] == "admin") {
   $enable2 = "";
}
else {
   $enable2 = "disabled";
}

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
    .center3 {
        margin: auto;
        width: 60%;
        align-items: center;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Drugs</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">CARTED</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="bg-info p-3">


<?php if(isset($_SESSION['username'])) {
?>

<div class="container mt-3">
    <h2 class="divText">Drugs</h2>
    <div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>Drug ID</th>
                <th>Drug Name</th>
                <th>Drug Type</th>
                <th>Unit</th>
                <th>Average Unit Price</th>
            </tr>
        </thead>
        <tbody class="table-success">
                <?php
                    while($row=mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                        <td><?php echo $row['drugID'] ?></td>
                        <td><?php echo $row['drugName'] ?></td>
                        <td><?php echo $row['drugType'] ?></td>
                        <td><?php echo $row['unit'] ?></td>
                        <td><?php echo $row['unitPrice'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
        </tbody>
    </table>
    </div>
    <div class="divText">Sample Drug pricing information obtained from UNODC (United Nations Office on Drugs and Crime)</div>
    <a href="https://dataunodc.un.org/dp-drug-prices"><span style="color:darkblue"><div class="divText">Link</div></span></a>
</div>

<br>

<hr>

<div class="container-md p-2 my-3 bg-light text-black rounded">
        <h2 class="divText">Functions</h2><br>
        <div class="btn-group center3">
            <a href="searchDrugs.php" class="btn bg-success text-light">Search for a Record</a>
            <a href="searchDrugsPrice.php" class="btn bg-success text-light">Search for a Record by Price</a>
        </div><br><br>

        <div class="btn-group center3">
        <a href="addDrug.php" class="btn bg-danger text-light <?php echo $enable1; ?>">Add a Record</a>
        </div><br><br>

        <div class="btn-group center3">
        <a href="deleteDrug.php" class="btn bg-primary text-light <?php echo $enable2; ?>">Delete a Record</a>
        </div>
</div>

<hr><br>

<div class="btn-group center3">
    <a href="index.php" class="btn bg-primary text-light">Return to Main Menu</a>
</div>

<?php
}
else {
    ?>
    <div style="divText">You are not logged in.</div>
    <hr>
    <div class="btn-group center3">
    <a href="RegiLog.php" class="btn bg-primary text-light">Go To Login/Registration</a>
    </div>
    <?php
}
?>

</div>

</body>
</html>