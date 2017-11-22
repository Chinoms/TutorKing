<?php

//require '../classes/fileUpload.php';
require '../classes/newTutor.php';


//$fname = mysqli_escape_string($conn, "Chinoms");
//$lname = mysqli_escape_string($conn, "Ugwuanya");
$p1 = $_POST['password'];
$p2 = $_POST['password2'];
if(empty($_REQUEST['password1']) || empty($_REQUEST['password2']) || empty($_REQUEST['email']) || empty($_REQUEST['phonenum'])){
    $error = 2;
    header("Location:".$baseURL."join/signup.php?error=".$error);
}



if ($p1 === $p2) { //check if passwords match. If they do, continue with the registration
    $password = hash("sha256", $p1);
    $errorExists = 0;

    $email = mysqli_escape_string($conn, $_POST['email']);
    $phoneNum = mysqli_escape_string($conn, $_POST['phonenum']);
    
    $createTutor->addNewTutor($conn, $email, $password, $phoneNum);
    session_start();
    $_SESSION['validuser'] = $email;
    header("Location: ".$baseURL."join/completeSignup.php?userID=".$_SESSION['validuser']."");
} else {
    $error = "2";
    $errorExists = 1;
    header("Location:".$baseURL."join/signup.php?error=".$error."");
    die();
    
}


?>
