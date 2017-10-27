<?php

include_once 'Database.php';

include_once 'fileUpload.php';



class NewTutor extends Database {

// prepare and bind
   public function addNewTutor($conn, $email, $password, $phoneNum) {
        $sqlQuery = "SELECT * FROM tutors WHERE email = '$email' OR phone = '$phoneNum'";
        $this->selectRecord($conn, $sqlQuery);
        if(mysqli_affected_rows($conn) > 0){
            $formError = '1';
            header("Location: ../signup.php?error=".$formError."");
            die();
            
        }
        $sqlQuery = "INSERT INTO tutors (email, pword, phone) VALUES ('$email', '$password', '$phoneNum')";
        $this->insertRecord($conn, $sqlQuery);
    }

}

$createTutor = new NewTutor();
?>