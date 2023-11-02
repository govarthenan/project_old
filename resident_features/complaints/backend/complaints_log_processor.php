<?php
session_start();

require_once('../../../includes/database_connect.php');

// Get view, delete and edit requests from log page and do the needful
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // determine operation
    $operation = $_POST['operation'];

    // get complaint id
    $id = $_POST['id'];

    if (!strcmp($operation, "delete")){
        $sql = "DELETE FROM " . DB_COMPLAINT_TABLE . " WHERE auto_id = " . $id;
        $result = $conn->query($sql);

        header("Location: ../complaints_log.php");
        exit();

    } elseif (!strcmp($operation, "edit")) {
        // get complaint details
        $sql = "SELECT * FROM complaint WHERE auto_id = " . $id;
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();

        // set session variables
        $_SESSION['complaint_id_edit'] = $row['auto_id'];
        $_SESSION['complaint_subject_edit'] = $row['subject'];
        $_SESSION['complaint_contact_edit'] = $row['contact'];
        $_SESSION['complaint_category_edit'] = $row['category'];
        $_SESSION['complaint_description_edit'] = $row['description'];

        header("Location: ../complaints_edit.php");
        exit();
    } elseif (!strcmp($operation, "view")) {
        // get complaint details
        $sql = "SELECT * FROM complaint WHERE auto_id = " . $id;
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();

        // set session variables
        $_SESSION['complaint_id_view'] = $row['auto_id'];
        $_SESSION['complaint_subject_view'] = $row['subject'];
        $_SESSION['complaint_contact_view'] = $row['contact'];
        $_SESSION['complaint_category_view'] = $row['category'];
        $_SESSION['complaint_description_view'] = $row['description'];

        header("Location: ../complaints_view.php");
        exit();
    }
}

