<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Conn.php';

class NewTutor
{
// prepare and bind
    function addNewTutor($conn, $fname, $lname, $email){
        $sql = "INSERT INTO tutors (fname, lname, email) VALUES ('$fname', '$lname', '$email')";
        if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    }
}

$createTutor = new NewTutor();
?>