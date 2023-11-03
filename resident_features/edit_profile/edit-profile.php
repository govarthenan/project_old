<?php
session_start();
include_once('../../dashboards/resident/sidenav_resident.php');
include_once('../../includes/database_connect.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $toUpdate = array();  // values to update

    foreach ($_POST as $key => $value) {
        if ($value !== '') {
            if ($key === 'new_password' || $key === 'old_password') {
                continue;
            }
            $toUpdate[$key] = $value;
        }
    }

    if (!empty($_POST['new_password'])) {  // check if new pw was entered
        if (!empty($_POST['old_password'])) {  // check if old pw was entered, needed for auth
            if ($_POST['new_password'] !== $_POST['old_password']) {  // check if old and new pw are the same
                // get stored password from DB, check auth
                $stored_password_sql = "SELECT password FROM " . DB_RESIDENT_TABLE . " WHERE user = " . $_SESSION['user'];
                $stored_password = $conn->query($stored_password_sql);
                $stored_password = $stored_password->fetch_assoc()['password'];

                $hashed_new_password = hash("sha256", $_POST['new_password']);
                $hashed_old_password = hash("sha256", $_POST['old_password']);

                // check auth
                if ($stored_password === $hashed_old_password){
                    $toUpdate['password'] = $hashed_new_password;
                } else {
                    $authFailed = true;
                }

            } else {
                $oldNewSame = true;
            }

        } else {
            $oldPwEmpty = true;
        }
    }


    // update DB
    if (!empty($toUpdate)) {
        $sql = "UPDATE " . DB_RESIDENT_TABLE . " SET ";
        foreach ($toUpdate as $key => $value) {
            $sql .= $key . " = '" . $value . "', ";
        }
        $sql = substr($sql, 0, -2);  // remove last comma
        $sql .= " WHERE user = " . $_SESSION['user'];

        print_r($sql);

        if ($conn->query($sql) === TRUE) {
            echo "<h2 style='color: green'>Profile updated successfully!</h2>";
        } else {
            echo "<h2 style='color: red'>Error updating profile: " . $conn->error . "</h2>";
        }
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Issues </title>
    <link rel="stylesheet" href="../../data/public/css/styles.css"/>
    <script src="script.js"></script>
</head>


<body>

<div class="container3" style="margin-top: 1vh;" id="edit_form">

    <h2>Edit Profile</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email">
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name">
        </div>

        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="tel" id="phone" name="phone" placeholder="Your phone number">
        </div>

        <div class="form-group">
            <label for="id">ID number</label>
            <input type="text" id="id" name="id" placeholder="Your ID number">
        </div>

        <div class="form-group">
            <label for="old_password">Old Password</label>
            <input type="password" id="old_password" name="old_password" placeholder="Your existing password">
        </div>

        <div class="form-group">
            <label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password" placeholder="Your new password">
        </div>

        <input type="submit" value="Update profile" style="display: block; margin-bottom:  2vh; margin-left:10vw">
    </form>

    <?php
    if (isset($oldNewSame)) {
        echo "<h2 style='color: red'>Old and new passwords are the same!</h2>";
    }

    if (isset($oldPwEmpty)) {
        echo "<h2 style='color: red'>Old password is not entered!</h2>";
    }

    if (isset($authFailed)) {
        echo "<h2 style='color: red'>Old password entered is wrong!</h2>";
    }
    ?>
</div>

<div>
    <img src="../../data/public/pictures/undraw_profile_details_re_ch9r.svg"
         style="width:30vw; height:30vh ;margin-top:40vh;margin-left:-13vw">
</div>


</body>
</html>


