<?php
session_start();
include_once('sidenav.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>complaints </title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <div class="container">
        <h1 style="text-align: center;">Complaints</h1>
        <p>Please fill out the following information to make your complain</p>
        <div class="form-group">
            <form action="./backend/complaint_create.php" method="post">

                <label for="complaint_subject"> Subject:</label>
                <input type="text" id="complaint_subject" name="complaint_subject" placeholder="Your problem in a few words..." maxlength="100" required>

                <br>
                <br>

                <label for="complaint_contact">Phone Number:</label>
                <input type="tel" id="complaint_contact" name="complaint_contact" placeholder="0123456789" maxlength="255" required>

                <br>
                <br>

                <label for="complaint_category">Complaint category:</label>
                <select id="complaint_category" name="complaint_category" required>
                    <option value="billing">Billing</option>
                    <option value="platform">Platform</option>
                    <option value="amenities">Amenities</option>
                    <option value="services">Services</option>
                    <option value="other">Other</option>
                </select>

                <div class="description-container">
                    <label for="complaint_description">
                        <br>
                        Description:
                        <textarea rows="5" cols="51" id="complaint_description" name="complaint_description" maxlength="1000" placeholder="A bit more information would help us solve your problem faster!"></textarea>
                    </label>
                </div>
                <input type="submit" value="Submit complain" style="display: block; margin: 0 auto;">
            </form>
        </div>
    </div>
    <span class="comp-image"></span>

</body>

</html>