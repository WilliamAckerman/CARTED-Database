<?php
include ('CARTEDConnect.php');
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Login Process</title>
<link rel="icon" type="image/x-icon" href="LogoImage.png">
</head>
<body class="body">
    <div class="w3-container w3-teal">
        <h1>Login Process</h1>
    <br></div>
    <div class="divText">
    <?php
    $error = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $userPassword = test_input($_POST["userPassword"]);
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        if(empty($username)) {
            $error = $error . "No username entered.<br>";
        } else {
            $username = trim($username);
            $username = htmlspecialchars($username);
        }

        if(empty($userPassword)) {
            $error = $error . "No password entered.<br>";
        } else {
            if(strlen($userPassword) < 8) {
                $error = $error . "Password should be at least 8 characters long.<br>";
            } elseif(!preg_match("#[0-9]+#", $userPassword)) {
                $error = $error . "Password should include at least one number.<br>";
            }
            elseif(!preg_match("#[A-Z]+#", $userPassword)) {
                $error = $error . "Password should include at least one uppercase letter.<br>";
            } elseif(!preg_match("#[a-z]+#", $userPassword)) {
                $error = $error . "Password should include at least one lowercase letter.<br>";
            }
        }

        if(!empty($error)) {
            echo $error;
            ?>
            <form action="RegiLog.php">
                <div class="w3-container">
                <button class = "button" value="Submit">Return</button>
                </div>
            </form>
            <?php
        }
        else {
            $query = mysqli_query($con, "SELECT * FROM USERS WHERE username = '$username'");
            $no = mysqli_num_rows($query);

            if($no>0) {
                $data = mysqli_fetch_assoc($query);
                if($data['userPassword']==$userPassword) {
                    echo "Successfully logged in.";
                    session_start();
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['userFName'] = $data['userFName'];
                    $_SESSION['userLName'] = $data['userLName'];
                    $_SESSION['userEmail'] = $data['userEmail'];
                    $_SESSION['userPhone'] = $data['userPhone'];
                    $_SESSION['userPosition'] = $data['userPosition'];
                    $_SESSION['userPassword'] = $data['userPassword'];
                    ?>
                    <form action="index.php">
                    <div class="w3-container">
                    <button class = "button" value="Submit">Continue</button>
                    </div>
                    </form>
                    <form action="logout.php">
                    <div class="w3-container">
                    <button class = "button" value="Submit">Return</button>
                    </div>
                    </form>
                    <div style="divText">
                    <?php
                } else {
                    echo "Wrong password entered.";
                    ?>
                        <form action="RegiLog.php">
                            <div class="w3-container">
                                <button class = "button" value="Submit">Return</button>
                            </div>
                        </form>
                    <?php
                }
            }
            else {
                echo "<br>Username/password combination does not exist.";
                ?>
            <form action="RegiLog.php">
                <div class="w3-container">
                <button class = "button" value="Submit">Return</button>
                </div>
            </form>
            <?php
            }
        }
    ?>
    </div>
</body>
</html>