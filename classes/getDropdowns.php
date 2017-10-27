<?php

require 'Database.php';

/**
 * The purpose of this class is to fetch data from
 * database tables and populate dropdowns
 *
 * @author Chinoms
 */
class GetDropdowns extends Database {

    public function getLocations($conn, $stateID) {
//This method fetches locations based on user selection of the state from the dropdown.
        $sqlQuery = "SELECT * FROM locations WHERE state_id = '$stateID'";
        $dataPack = $this->selectRecord($conn, $sqlQuery);
    }

    public function getStates($conn) {
//This method fetches states from the database table containing them
        $sqlQuery = "SELECT * FROM states";
        $stateQuery = $conn->query($sqlQuery);
        while ($stateData = $stateQuery->fetch_object()) {
            echo '<option value="'.$stateData->id.'">' . $stateData->state_name . '</option>';

        }
    }

}

$runDropdowns = new GetDropdowns();
