<?php
include ('CARTEDConnect.php');
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Registration Process</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
    <div class="w3-container w3-teal">
        <h1>Registration Process</h1>
    <br></div>
    <img src="LogoImage.png" alt="Logo Image" class="center"><br>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = test_input($_POST["username"]);
            $userFName = test_input($_POST["userFName"]);
            $userLName = test_input($_POST["userLName"]);
            $userEmail = test_input($_POST["userEmail"]);
            $userPhone = test_input($_POST["userPhone"]);
            $userPosition = test_input($_POST["userPosition"]);
            $userPassword = test_input($_POST["userPassword"]);
            $userCPassword = test_input($_POST["userCPassword"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $sql = "INSERT INTO USERS (username, userFName, userLName, userEmail, userPhone, userPosition, userPassword)
        VALUES ('$username', '$userFName', '$userLName', '$userEmail', '$userPhone', '$userPosition', '$userPassword')";

        if($con->query($sql) === TRUE) {
            echo "New user successfully created.";
        } else {
            echo "Failed to create new user: <br>" . $con->error;
        }
        ?>
        <form action="RegiLog.php">
         <button class = "button" value="Submit">Return to Login/Registration Selection</button>
        </form>
</body>
</html>