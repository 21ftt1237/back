<?php
include 'database.php';

// Define the role prefixes
$rolePrefixes = [
    'Customer' => '001',
    'Admin' => '01',
    'Store Owner' => '00001',
    'Driver' => '0001',
];

// Determine the role and get the prefix
$role = 'Customer'; // Replace with the actual role
$prefix = $rolePrefixes[$role];

// Query the database to find the highest user ID for the role
$query = "SELECT MAX(user_id) FROM users WHERE role = '$role'";
$result = mysqli_query($dbCon, $query);
$row = mysqli_fetch_row($result);
$maxUserId = $row[0];

// Increment the user ID and format it with the prefix
$newUserId = sprintf("%s%03d", $prefix, $maxUserId + 1);

?>
