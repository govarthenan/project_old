<!--Select all the complaints from the DB, filter by user-->
<!--Display error message if count is 0-->
<!--Display table if count is > 0-->

<?php
session_start();
require_once('../../dashboards/resident/sidenav_resident.php');
require_once('../../includes/database_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Complaints log</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

<?php
// Fetch all complaints for the user
$sql = "SELECT * FROM complaint WHERE user = " . $_SESSION['user'];
$result = $conn->query($sql);
?>

<div class="table">
    <?php
    // print all rows from $result
    if ($result->num_rows > 0) {
        $columnsToDisplay = ['subject', 'contact', 'category', 'description'];  // specify columns to display

        echo "<table>";  // start table
        echo "<thead>
        <tr>
            <th>Subject</th>
            <th>Contact</th>
            <th>Category</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>";

        echo "<tbody>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($columnsToDisplay as $column) {
                echo "<td>" . $row[$column] . "</td>";
            }
            // add view, edit and delete buttons...
            echo '<td>
                <form action="./backend/complaints_log_processor.php" method="post">
                    <input type="hidden" name="id" value=' . $row["auto_id"] .'>
                    <button class="action-button view-button" type="submit" name="operation" value="view">View</button>
                    <button class="action-button edit-button" type="submit" name="operation" value="edit">Edit</button>
                    <button class="action-button delete-button" type="submit" name="operation" value="delete">Delete</button>
                </form>
            </td>';


            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<h2>No complaints logged yet!</h2>";
    }
    ?>
</div>
</body>
