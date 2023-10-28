<?php
// Database configuration
$hostName = '167.71.216.61'; // host name
$dbName = 'bruzone'; // database name
$dbUser = 'customer'; // database user name
$dbPassword = 'password'; // database password (replace with your actual password)

// Establish a database connection
$dbCon = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

// Check for connection errors
if (!$dbCon) {
    die('Could not connect to the MySQL server: ' . mysqli_connect_error());
}
?>
