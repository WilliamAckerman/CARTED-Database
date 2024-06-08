<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = new mysqli($servername, $username, $password);
if($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Database Setup</title>

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
        </div>
    </div>
</nav>

<div class="bg-info p-3">

    <img class="img-fluid mx-auto d-block" src="LogoImage.png">



<?php
$sql = "CREATE DATABASE IF NOT EXISTS CARTED";
if($con->query($sql) === TRUE){
    ?>
    <div class="divText">Database created successfully.<br></div>
    <?php
    $target = 'setupTables.php';
    $linkname = "Click this link to set up tables.<br>";
    ?><div class="divText"><?php
    echo "<a href='".$target."'>Link</a>";?>
    </div><?php
}
else {
    ?>Error creating database: <?php echo $con->error;
}

$con->close();
?>

</div>

</body>
</html>
