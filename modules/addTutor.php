<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//require '../classes/fileUpload.php';
require '../classes/newTutor.php';


//$fname = mysqli_escape_string($conn, "Chinoms");
//$lname = mysqli_escape_string($conn, "Ugwuanya");
$p1 = $_POST['password'];
$p2 = $_POST['password2'];



if ($p1 === $p2) { //check if passwords match. If they do, continue with the registration
    $password = hash("sha256", $p1);
    $errorExists = 0;

    $email = mysqli_escape_string($conn, $_POST['email']);
    $phoneNum = mysqli_escape_string($conn, $_POST['phonenum']);
    
    $createTutor->addNewTutor($conn, $email, $password, $phoneNum);
    session_start();
    $_SESSION['validuser'] = $email;
    header("Location: ".$baseURL."completeSignup.php?userID=".$email."");
} else {
    $error = "2";
    $errorExists = 1;
    header("Location:../signup.php?error=".$error."");
    die();
    
}


/**
  $fileSize = $_FILES['passport']['size'];
  $imageFileType = $_FILES['passport']['type'];
  $fieldName = $_FILES['passport']['name'];

 * */
//$file->sendFile($conn, $fieldName,$uploadDir, $fileType, $fileSize, $imageFileType);
?>
