<?php

class FileUpload {

    function imageUpload($imageName) {
        global $picDestination;
        /*
         * Handles the upload image files
         * @param $imageName 
         */
        if (!$_FILES['photo']['error']) {
            $prefix = mt_rand(0, 9999) . date('is');
            $new_file_name = $prefix . strtolower($_FILES['photo']['name']); //rename file
            $new_file_name = str_replace(" ", "_", $new_file_name);
            if ($_FILES['photo']['size'] > (1048576)) { //can't be larger than 1 MB
                $valid_file = false;
                ?>
                <script>alert("Your CV is too large. Make sure it is less than 8MB in size then try again."); window.history.back();</script>
                <?php

                die();
            }
            $mime_filter = array(
                'image/gif',
                'image/jpeg',
                'image/png');
            if (!in_array($_FILES['photo']['type'], $mime_filter)) {
                echo $_FILES['photo']['type'];
                header("Location:../join/finalStep.php?error='File must be an image'");
                die();
            }
            move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/passports/' . $new_file_name);
            $picDestination = "uploads/passports/" . $new_file_name;
            //header("Location:../cv.php");
            # }
        }
        //if there is an error...
        else {
            //set that to be the returned message
            header("Location:../join/finalStep.php?error='3'"); #something went wrong
            die();
        }
        return $picDestination;
    }

    function cvUpload($cvName) {
        global $cvDestination;
        /*
         * Handles the upload PDF files
         * @param $cvName 
         */
        if (!$_FILES['cv']['error']) {
            $prefix = mt_rand(0, 9999) . date('is');
            $new_file_name = $prefix . strtolower($_FILES['cv']['name']); //rename file
            $new_file_name = str_replace(" ", "_", $new_file_name);
            if ($_FILES['cv']['size'] > (8388608)) { //can't be larger than 10 MB
                $valid_file = false;
                ?>
                <script>alert("Your CV is too large. Make sure it is less than 8MB in size then try again."); window.history.back();</script>
                <?php

                die();
            }
            $mime_filter = array(
                'application/pdf');
            if (!in_array($_FILES['cv']['type'], $mime_filter)) {
                header("Location:../join/finalStep.php?error='File must be PDF'");
                die();
            }
            move_uploaded_file($_FILES['cv']['tmp_name'], '../uploads/cv/' . $new_file_name);

            $cvDestination = "uploads/cv/" . $new_file_name;
            # }
        }
        //if there is an error...
        else {
            //set that to be the returned message
            header("Location:../join/finalStep.php?error='3'"); #something went wrong
            die();
        }
        return $cvDestination;
    }

}

$file = new FileUpload;
?>
