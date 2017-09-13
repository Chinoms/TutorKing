<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../classes/newTutor.php';

$fname = mysqli_escape_string($conn, "Chinoms");
$lname = mysqli_escape_string($conn, "Ugwuanya");
$email = mysqli_escape_string($conn, "chinoms925@gmail.com");

$createTutor->addNewTutor($conn, $fname, $lname, $email);

?>
