<?php
// Include your database connection file
require_once "dbcon.php";

// Example known password and stored hash (replace with actual values for testing)
$known_password = 'dmwiine10';
$stored_hash_from_db = '$2y$10$bwy8dzfgqEWJzs2FwzTVVeJhH/mA6SR6KXxm2dpYLosfrwKyReEAK';

// Verify password
if (password_verify($known_password, $stored_hash_from_db)) {
    echo "<script>alert('Password matches');</script>";
} else {
    echo "<script>alert('Password does not match');</script>";
}

