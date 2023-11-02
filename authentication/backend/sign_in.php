<?php

require_once('../../includes/database_connect.php');

// check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // determine resident or staff
    $userType = $_POST['form-id'];

    if ($userType == DB_RESIDENT_TABLE) {
        // select matching row from database by email
        $sql = "SELECT * FROM " . DB_RESIDENT_TABLE . " WHERE email = '" . $_POST['email'] . "'";
        $result = $conn->query($sql);

        // see if user exists
        if ($result->num_rows > 0) {
            $result = $result->fetch_assoc();
            $checkPassword = strcmp(hash("sha256", $_POST["password"]), $result["password"]);
            if (!$checkPassword) {
                session_start();  // start session for dynamic and differentiated usage of user data.
                $_SESSION["user"] = $_POST["email"];

                // filter table by email value and get value of 'user' column
                $sql = "SELECT user FROM " . DB_RESIDENT_TABLE . " WHERE email = '" . $_POST['email'] . "'";
                $result = $conn->query($sql);
                $result = $result->fetch_assoc();

                // update user email with user ID
                $_SESSION["user"] = $result["user"];

                header("Location: ../../dashboards/resident/dashboard.php");
                exit;
            } else {
                echo "Error: incorrect password. Please try again.";
            }
        } else {
            echo "Error: user does not exist. Please try again.";
        }
    } else if ($userType == "staff") {
        // select matching row from database by email
        $sql = "SELECT * FROM " . DB_STAFF_TABLE . " WHERE email = '" . $_POST['email'] . "'";
        $result = $conn->query($sql);

        // see if user exists
        if ($result->num_rows > 0) {
            $result = $result->fetch_assoc();
            $checkPassword = strcmp(hash("sha256", $_POST["password"]), $result["password"]);
            if (!$checkPassword) {
                session_start();  // start session for dynamic and differentiated usage of user data.
                $_SESSION["user"] = $_POST["email"];

                // filter table by email value and get value of 'user' column
                $sql = "SELECT user FROM " . DB_STAFF_TABLE . " WHERE email = '" . $_POST['email'] . "'";
                $result = $conn->query($sql);
                $result = $result->fetch_assoc();

                // read use role from DB
                $sql = "SELECT role FROM " . DB_STAFF_TABLE . " WHERE email = '" . $_POST['email'] . "'";
                $role = $conn->query($sql);
                $role = $role->fetch_assoc();

                // update user email with user ID
                $_SESSION["user"] = $result["user"];

                // set user role
                $_SESSION['role'] = $role['role'];

                // give dashboard according to role
                if ($role['role'] == 'manager') {
                    header("Location: ../../dashboards/manager/dashboard.php");
                    exit;
                } else if ($role['role'] == 'facility') {
                    header("Location: ../../dashboards/facility/dashboard.php");
                    exit;
                } else if ($role['role'] == 'finance') {
                    header("Location: ../../dashboards/finance/dashboard.php");
                    exit;
                } else if ($role['role'] == 'security') {
                    header("Location: ../../dashboards/security/dashboard.php");
                    exit;
                } else if ($role['role'] == 'technician') {
                    header("Location: ../../dashboards/technician/dashboard.php");
                    exit;
                }

            } else {
                echo "Error: incorrect password. Please try again.";
            }
        } else {
            echo "Error: user does not exist. Please try again.";
        }

    } else {
        echo "Error: invalid user type. Please try again.";
    }
}
