<?php

/**
 * Description of FileUpload
 *
 * @author Chinoms
 * handles all file uploads
 */
class uploadFile {
    function sendFile($conn, $fieldName,$uploadDir, $fileType, $fileSize, $imageFileType)
    {
      $target_dir = "uploads/passports";
$targetFile = $target_dir . basename($_FILES[$fieldName]["name"]);
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
$docFileType = array("application/pdf");
$fileType = array("image/jpg", "image/png", "image/jpeg");


// Check if file already exists
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES[$fieldName]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if(!in_array($imageFileType, $fileType)) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."."<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES[$fieldName]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

    }
}
$file = new uploadFile;
    ?>