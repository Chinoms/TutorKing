<?php

include_once 'Database.php';


class NewTutor extends Database {

    public function addNewTutor($conn, $email, $password, $phoneNum) {
        $sqlQuery = "SELECT * FROM tutors WHERE email = '$email' OR phone = '$phoneNum'";
        $this->selectRecord($conn, $sqlQuery);
        if (mysqli_affected_rows($conn) > 0) {
            $formError = '1'; //prompt user to sign in since details already exist
            session_start();
            session_destroy();
            header("Location: ../join/signup.php?error=" . $formError . "");
            die();
        } else {
            $sqlQuery = "INSERT INTO tutors (email, pword, phone) VALUES ('$email', '$password', '$phoneNum')";
            $this->insertRecord($conn, $sqlQuery);
        }
    }

}

$createTutor = new NewTutor();
?>