<?php
session_start();
include_once('../../dashboards/resident/sidenav_resident.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Swimming pool reservation form</title>
        <link rel="stylesheet" href="../../data/public/css/styles.css" />
        
        </head>
        <body>
            <div class="container">
            <h1>Swimming Pool reservation Form</h1>
            <p>Please fill out the following information to book your  session:</p>
            <div class="form-group">
            <form action="submit_booking.php" method="post">
                <label for="name"> Name:</label>
                <input type="text" id="name" name="name" required><br><br>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
        
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required><br><br>
        
                <label for="booking_date">Preferred Booking Date:</label>
                <input type="date" id="booking_date" name="booking_date" required><br><br>

                <label for="booking_start_time">Booking Start Time:</label>
                <input type="time" id="booking_start_time" name="booking_start_time" required><br><br>
                
                <label for="booking_end_time">Booking End Time:</label>
                <input type="time" id="booking_end_time" name="booking_end_time" required><br><br>
                
        
                <input type="submit" value="Submit" style="display: block; margin: 0 auto;">
            </form>
            </div>
            </div>
            <span style="margin-left: 60vw; margin-top:30vh ;">
            <img src="../../data/public/pictures/undraw_settings_re_b08x.svg" style="width:30vw;display: block;">
        </span>
        </body>
        </html>
        
    
