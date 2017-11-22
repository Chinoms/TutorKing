<?php

/* 
 * This file holds the database connection and other configurations
 *
***/
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "tutorking";
$baseURL = "http://localhost/tutorking/";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>