<?php
session_start();
require_once('sidenav_manager.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="temp.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body>
<div class="dashboard-body">

    <div class="dashboard-box">
        <a href="../../manager_features/calendar/calender.php">
            <div class="dashboard-icons" style="align-items: center; justify-content: center;">
                <div>
                    <i class="fa-solid fa-toolbox fa-2x"></i>
                    <h3 style="text-align: center;">Calendar</h3>

                </div>

            </div>
        </a>
        <div class="dashboard-icons">
            <div>
                <i class="fa-solid fa-toolbox fa-2x"></i>
                <h3>Complaints</h3>

            </div>

        </div>

        <a href="../../manager_features/amenities/AM.html">
            <div class="dashboard-icons">
                <div>
                    <i class="fa-solid fa-toolbox fa-2x"></i>
                    <h3>Amenities</h3>

                </div>

            </div>
        </a>

        <a href="../../manager_features/payments/payment_overview.html">
            <div class="dashboard-icons">
                <div>
                    <i class="fa-solid fa-toolbox fa-2x"></i>
                    <h3>Payments</h3>

                </div>

            </div>
        </a>

        <div class="dashboard-icons">
            <div>
                <i class="fa-solid fa-toolbox fa-2x"></i>
                <h3>Announcements</h3>

            </div>

        </div>

        <div class="dashboard-icons">
            <div>
                <i class="fa-solid fa-toolbox fa-2x"></i>
                <h3>External</h3>

            </div>

        </div>

    </div>


</div>
</body>
</html>