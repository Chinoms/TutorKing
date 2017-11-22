<?php

require '../classes/Conn.php';

/*
 * Just to get the locations after state has been selected
 */


if (isset($_REQUEST['get_option'])) {
    $state = $_REQUEST['get_option'];
    $sqlQuery = "SELECT * FROM locations WHERE state_id=$state";
    $locationQuery = $conn->query($sqlQuery);
    while ($locations = $locationQuery->fetch_object()) {
        echo "<option value='" . $locations->id . "'>" . $locations->name . "</option>";
    }
} else {
    echo"couldn't get anything";
}
?>
