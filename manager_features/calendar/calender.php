<?php
//session_start();
include_once('../../dashboards/manager/dashboard.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint</title>
    <link rel="stylesheet" href="../../data/public/css/styles.css">
    <script src="index.js"></script>

</head>
<body style="background-color: #d4def5;">
<div class="container"
     style="background-color:#d4def5; box-shadow: 0 0 0rem rgba(0, 0, 0, 0); margin: 0vh 0vh 0vh 10vh;">
    <div class="complaints-start" style="margin:0vh 50vw 0vh 10vw;">

        <a href="calender-create.php">
            <p style="padding: 1rem; background-color: #81A2C9; border-radius: 0.5rem; font-size: 1.5rem; display: flex; align-items: center;margin-left:10vw">
                <b>Create a calendar Event</b>
                <span class="start1" style="margin-left: 1rem;">

                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" ;>
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                              fill="black"/>
                    </svg>
                </span>
            </p>
        </a>

        <a href="calender-event-view.php">
            <p style="padding: 1rem; background-color: #81A2C9; border-radius: 0.5rem; font-size: 1.5rem; display: flex; align-items: center;margin-left:10vw">
                <b>View Calendar Events</b>
                <span class="start1" style="margin-left: 1rem;">

                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" ;>
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                              fill="black"/>
                    </svg>
                </span>
            </p>
        </a>


    </div>
    <span>
            <img src="../../data/public/pictures/undraw_events_re_98ue.svg"
                 style="width: 50vw; height: 55vh;margin-left:40vw">
    </span>
</div>
</body>

</html>