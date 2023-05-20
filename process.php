<?php
include 'database.php';

// check if form submitted
if(isset($_POST['submit'])){
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // set timezone
    date_default_timezone_set('Asia/Taipei');
    $time = date('h:i:s',time());
}

// validate input
if(!isset($user) || $user == '' || !isset($message) || $message == '') {
    $error = 'please fill out all input fields*';
    header ("Location: index.php?error=".urlencode($error));
    exit();
} else {
    $query = "INSERT INTO yaks (user, message, time)
    VALUES ('$user','$message','$time')";

    if(!mysqli_query($con, $query)) {
        die('Error: '.mysqli_error($con));
    } else {
        header("Location: index.php");
        exit();
    }
}
?>