<?php
    $code = $_POST['code'];
    $con = mysqli_connect('localhost','root','','acm_registration');
    $query = "select count(*) from codes where code='$code';";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if($row[0]==0) echo "red";
    else {
        $query = "select status, type from codes where code='$code';";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_array($result);
        if($row[0] == 1) echo "red";
        else echo $row[1];
    }
?>
