<?php
session_start();

// Include your database connection file
require_once "dbcon.php";

// Check if username and password are set
if (!isset($_POST['email']) || !isset($_POST['password'])) {
    die('Email and password are required');
}

// Get email and password from the form
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Protect against SQL injection
$email = mysqli_real_escape_string($conn, $email);

// Query the database for user
$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    // Verify password
    if (password_verify($password, $user['password'])) {
        // Password is correct, start session
        $_SESSION['email'] = $email;
        // Redirect to logged-in user's page
        header("Location: /admin");
        exit();
    } else {
        // Incorrect password
        echo "<script>alert('Password does not match');</script>";
    }
} else {
    // User not found
    header("Location: login.php");
    echo "<script>alert('User not found');</script>";
    
}
