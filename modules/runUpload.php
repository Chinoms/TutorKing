<?php
require '../inc/header.php';
require '../classes/fileUpload.php';
require '../classes/Database.php';
require '../classes/mailerClass.php';

/* 
 
 */
if(isset($_POST['sendFile'])){
 
$file->imageUpload($_FILES['photo']);
$file->cvUpload($_FILES['cv']);
$userID = $_REQUEST['userID'];
$email=$userID;
$fname = $_REQUEST['fname'];
$timeJoined = date("Y-M-D");
$query = "UPDATE tutors SET profilepic = '$picDestination', cv = '$cvDestination', joined = '$timeJoined' WHERE email = '$userID'";
$runQuery->UpdateRecord($conn,$query);//update database records and complete signup
$sendMail->welcomeTutor($email, $fname);//Send user an email

?>
<script>window.alert("Signup complete! You'll hear from us soon.");</script>
<?php
//$authMethods->signupLogout();
}

?>