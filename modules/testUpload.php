<?php
require '../classes/Conn.php';
require '../classes/fileUpload.php';

/* 
 
 */
if(isset($_POST['sendFile'])){
 
$file->imageUpload($_FILES['photo']);
}

?>