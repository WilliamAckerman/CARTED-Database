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
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
    <div class="w3-container w3-teal">
        <h1>Database Setup</h1>
    <br></div><br>
    <img src="LogoImage.png" alt="Logo Image" class="center"><br>
</body>
</html>
<?php
$sql = "CREATE DATABASE IF NOT EXISTS CARTED";
if($con->query($sql) === TRUE){
    echo "Database created successfully.<br>";
    $target = 'setupTables.php';
    $linkname = "Click this link to set up tables.<br>";
    echo "<a href='".$target."'>Link</a>";
}
else {
    echo "Error creating database: " . $con->error;
}

$con->close();
?>
