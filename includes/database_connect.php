<?php
include 'database_config.php';

// create connection to DB
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// check connection status
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}