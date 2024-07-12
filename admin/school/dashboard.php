<?php
session_start();

// Check if user is logged in
// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");
//     exit();
// }

// Display dashboard content
echo "Welcome, " . $_SESSION['email'];

