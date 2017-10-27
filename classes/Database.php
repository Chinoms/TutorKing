<?php

include_once 'Conn.php'; //COnfiguration file



class Database { //This class handles all databse operations for the app. 
    
    function insertRecord($conn, $sqlQuery) {//This function handles all INSERT database selections
        
        if ($conn->query($sqlQuery)) {
          //  echo 'Successful!';
        } else {
            echo 'Unsuccessful';
        }
    }

   public function selectRecord($conn, $sqlQuery) { //This function handles all SELECT databse operations
        
        if ($conn->query($sqlQuery)) {
         //  echo 'Successfully SELECTED';
        } else {
            echo 'SELECTION Unsuccessful';
        }
    }

}

$runQuery = new Database();
?>