<?php
session_start();
require_once('../../dashboards/resident/sidenav_resident.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>complaints </title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="container" style="margin-left: 25%;">
    <h1>Complaints Details</h1>
    <p>Subject: <?php echo $_SESSION['complaint_subject_view']; ?> </p>
    <p>Complaint Category: <?php echo $_SESSION['complaint_category_view']; ?> </p>
    <p>Complaint Contact: <?php echo $_SESSION['complaint_contact_view']; ?> </p>
    <p>Description: <?php echo $_SESSION['complaint_description_view']; ?> </p>
    <p></p>

    <form action="./backend/complaints_log_processor.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_SESSION['complaint_id_view'] ?>">
        <button class="action-button edit-button" type="submit" name="operation" value="edit">Edit</button>
        <button class="action-button delete-button" type="submit" name="operation" value="delete">Delete</button>
    </form>
</div>
</body>
            