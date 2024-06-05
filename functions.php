<?php

function validateInsert($name, $nameValue, $table, $c) {
    $check=0;
    $sql="SELECT * FROM $table WHERE $name = '$nameValue'";
    if($result=mysqli_query($c,$sql)) {
        $check=mysqli_num_rows($result);
        mysqli_free_result($result);
    }

    if($check == 1) {
        return 1;
    }
    else {
        return 0;
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>