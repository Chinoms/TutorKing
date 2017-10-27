
/***
The purpose of this class is to save new hospitals to the database

***/
<?php
class AddHostpital{
public $a, $b, $c, $d, $e, $f;
   function saveHospital($conn){
       $sqlStatement = $conn->prepare("INSERT INTO tablename(colOne, colTwo, colThree, colFour) VALUES (?, ?, ?, ?, ?)");
       $sqlStatement->bind_param("sss", $a, $b, $c, $d, $e, $f);
       if($sqlStatement->execute()){
           $_SESSION['message'] = "Successfuly created record";
       }else{
           $_SESSION['message'] = mysqli_error()." Unable to create record.";
       }

}

}
$newHospital = new AddHostpital;


?>