<?php

session_start();

require_once('../../../includes/database_connect.php');

// edit the specified complaint by id
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    debug
    var_dump($_POST);
    var_dump($_SESSION);

//    sql query
    $sql = "UPDATE " . DB_COMPLAINT_TABLE . " SET subject = '" . $_POST['complaint_subject'] . "', contact = '" . $_POST['complaint_contact'] . "', category = '" . $_POST['complaint_category'] . "', description = '" . $_POST['complaint_description'] . "' WHERE auto_id = " . $_SESSION['complaint_id_edit'];
    $result = $conn->query($sql);

    if ($result) {
        header("Location: ../complaints_log.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}