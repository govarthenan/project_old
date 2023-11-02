<?php
// process data coming from complaints-form.php via POST
session_start();

require_once('../../../includes/database_connect.php');
require_once('../../../includes/functions_library.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // perform basic sanitization of all fields in _POST
    foreach ($_POST as $key => $value) {
        $_POST[$key] = sanitize_input($value);
    }

    print_r($_POST);
    echo "<br>";

    // Assuming all the fields contain the correct data, push the data to the database
    // take username from _SESSION
    $sql = "INSERT INTO " . DB_COMPLAINT_TABLE . " (user, subject, contact, category, description) VALUES ('" . $_SESSION['user'] . "', '" . $_POST['complaint_subject'] . "', '" . $_POST['complaint_contact'] . "', '" . $_POST['complaint_category'] . "', '" . $_POST['complaint_description'] . "')";
    $result = $conn->query($sql);

    var_dump($sql);
    var_dump($result);
}
