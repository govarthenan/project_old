<?php

require_once '../../includes/database_connect.php';

// check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // #check if any of the values are empty

    // ##get all field names from form data for checking
    $fields = array();  // to hold field names
    foreach ($_POST as $key => $value) {  // iterate through key-value pairs
        $fields[] = $key;  // append key to fields array
    }

    // ##check if any of the values are empty
    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            echo "Please fill in all fields.";
            exit();
        }
    }

    // #if none of the values are empty, sanitize and push to database
    extract($_POST);  // extract all form data into variables

    // ##preprocess input data
    $password = hash('sha256', $password);  // hash password

    // print file upload error message
    if ($_FILES["verification"]["error"] > 0) {
        echo "Error: " . $_FILES["verification"]["error"] . "<br>";
    }

    $verificationPicture = $_FILES["verification"]["tmp_name"];  // get picture and extract image contents
    $verificationPictureData = file_get_contents($verificationPicture);
    $verificationPictureData = $conn->real_escape_string($verificationPictureData);

    // ##write to database  
    $sql = "INSERT INTO " . DB_RESIDENT_TABLE . " (name, email, password, phone, floor, door, id) VALUES ('$name', '$email', '$password', '$phone', '$floor', '$door', '$id')";

    if ($conn->query($sql) === TRUE) {
        echo "New user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
