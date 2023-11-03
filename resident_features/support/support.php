<?php
session_start();
include_once('../../dashboards/resident/sidenav_resident.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Support</title>
    <link rel="stylesheet" href="../../data/public/css/styles.css"/>
    <style>

        h1 {
            text-align: center;
        }

        h2 {
            text-align: left;
        }

        p {
            padding: 1vh;
        }

        ul {
            padding-left: 0;
        }

        li {
            list-style: none;
            margin: 1vh 0;
        }

        @media screen and (min-width: 600vw) {
            .container3 {
                max-width: 80%;
                max-height: 100%;
            }

            h1, h2 {
                width: auto;
            }

            h2 {
                margin: 3vh;
            }

            p {
                width: 80%;
                margin: 2vh auto;
            }

            ul {
                margin: 3vh 3vh;
            }

            li {
                margin: 1vh 2vh;
            }
        }
    </style>
</head>
<body>
<div class="container3">
    <h1>SUPPORT CENTER</h1>
    <p>Welcome to our Support Center for the Flat Management System. We are dedicated to providing you with the
        assistance you need to ensure a seamless and enjoyable experience with our platform. Whether you have questions,
        concerns, or are facing any issues, our team is here to help. Please take advantage of the resources provided
        below to find the assistance you require.</p>

    <b><h2>CONTACT INFORMATION:</h2></b>

    <p><b>Customer Support: For general inquiries and assistance, contact our customer support team.</b></p>

    <ul>
        <li><b>Phone Number:</b><i> +1 (555) 123-4567</i></li>
        <li><b>Email:</b><i> support@castle.com</i></li>
        <li><b>Assistance:</b><i><b>Emergency Hotline:</b><i> +1 (555) 999-9999</i></li>
    </ul>
    <p><b>Technical Support:</b><i> Reach out to our technical support team for issues related to the flat management
            system.</i></p>
    <ul>
        <li><b>Phone Number:</b><i> +1 (555) 123-4567</i></li>
    </ul>
    <ul>
        <li><b>Email:</b><i> techsupport@example.com</i></li>
    </ul>

    <p><b> Registration</b></p>

    <p>Each person who buys an apartment will get a user account of type "resident".
        After validationg the identity of apartment buyer, registration of resident accounts is done by the receptionist
        at the receptionist desk.
        Once the registration process completed, apartment owner will recieve an email of confirmation with his username
        and password.</p>

    <p><b> Login</b></p>

    <p>Apartment owner can login in to the system using username and password recieved to his/her email.
        After the login into the system for the first time, it is his/her responsibility to change the password interms
        of security concerns.</p>

    <p><b>Common area Reservation</b></p>

    <p>Apartment owner can login in to the system using username and password recieved to his/her email.
        After the login into the system for the first time, it is his/her responsibility to change the password interms
        of security concerns.</p>

    <p><b>Fitness Centre Reservation</b></p>

    <p><b>Maintenane and Technical Issue</b></p>

    <p><b>Payments</b></p>

    <p><b>Complaints</b></p>
</div>

</body>