<?php
    session_start();
    if(isset($_SESSION['message'])) unset($_SESSION['message']);
    if(!isset($_POST['submit'])) {
        header('location: ../');
        die();
    }
    $name = $_POST['name'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $wa = $_POST['whatsapp'];
    if($wa=="") $wa=0;
    $type = $_POST['type'];
    $code = $_POST['code'];

    $con = mysqli_connect('localhost','root','','acm_registration');
    $query = "select status from codes where code='$code';";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);

    if($row[0]!=0) {
        $_SESSION['message'] = 'This code has already been used to register a member. For any discrepency, please contact UPES ACM/ACM-W Chapter Representatives.';

    }
    else {
        $query = "insert into member_info VALUES('$code','$name','$branch',$year,'$email',$phone,$wa,$type);";
        $result = mysqli_query($con, $query);
        $query = "UPDATE codes SET status = 1 WHERE code = '$code';";
        $result = mysqli_query($con, $query);
        $_SESSION['message'] = 'Registration complete. Thank you for enrolling with us. Welcome to ACM :)';
    }
    header('location: ../../../verify');
?>
