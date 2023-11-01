<?php

require '../includes/database_connect.php';

// check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // determine resident or staff
    $userType = $_POST['form-id'];

    if ($userType == "resident") {
        // select matching row from database by email
        $sql = "SELECT * FROM resident WHERE email = '" . $_POST['email'] . "'";
        $result = $conn->query($sql);

        // see if user exists
        if ($result->num_rows > 0) {
            $result = $result->fetch_assoc();
            $checkPassword = strcmp(hash("sha256", $_POST["password"]), $result["password"]);
            if (!$checkPassword) {
                session_start();  // start session for dynamic and differentiated usage of user data.
                $_SESSION["user"] = $_POST["email"];

                echo "Success! You are now logged in.";
            } else {
                echo "Error: incorrect password. Please try again.";
            }
        } else {
            echo "Error: user does not exist. Please try again.";
        }
    } else if ($userType == "staff") {
        echo "staff";
    } else {
        echo "Error: invalid user type. Please try again.";
    }
}
