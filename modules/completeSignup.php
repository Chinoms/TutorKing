<?php

require '../classes/Database.php';
/*
 * This file runs the completeSignup.php file that is located
 * in the root folder of this project
 */

function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['savedetails'])) {
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $edu = mysqli_real_escape_string($conn, $_POST['edu']);
    $states =  mysqli_real_escape_string($conn, $_POST['states']);
    $location =  mysqli_real_escape_string($conn, $_POST['subjTwo']);
    $subjThree =  mysqli_real_escape_string($conn, $_POST['subjThree']);
    $subjFour =  mysqli_real_escape_string($_POST['subjFour']);
    $earning =  mysqli_real_escape_string($conn, $_POST['earning']);
    $userID = mysqli_real_escape_string($conn, $_REQUEST['userID']);
    $fname =  mysqli_real_escape_string($conn, $_REQUEST['fname']);
    $lname =  mysqli_real_escape_string($conn, $_REQUEST['lname']);
    $aboutSelf = mysqli_real_escape_string($conn, $_POST['aboutself']);

    $sqlQuery = "Update tutors SET gender = '$gender', education = '$edu',fname = '$fname', lname = '$lname', state = '$states',"
            . "location = '$location', subjOne = '$subjOne', subjTwo = '$subjTwo', subjThree = '$subjThree',"
            . "subjFour = '$subjFour', charge = '$earning', aboutself = '$aboutSelf' WHERE email ='$userID'";
    //die($userID);
    $conn->query($sqlQuery); //or die($query->error);
    header("Location:../join/finalStep.php?userID=".$userID."&fname=".$fname);
}else{
    die();
}