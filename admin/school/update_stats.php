<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "gallery_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate and sanitize input
$viewCount = isset($_GET['viewCount']) ? intval($_GET['viewCount']) : 0;
$likeCount = isset($_GET['likeCount']) ? intval($_GET['likeCount']) : 0;
$dislikeCount = isset($_GET['dislikeCount']) ? intval($_GET['dislikeCount']) : 0;

// Prepare SQL statement using prepared statement
$stmt = $conn->prepare("INSERT INTO gallery_stats (views, likes, dislikes) VALUES (?, ?, ?)");
$stmt->bind_param("iii", $viewCount, $likeCount, $dislikeCount);

// Execute SQL statement
if ($stmt->execute()) {
    echo "Stats recorded successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Fetch current counts from database
$sql = "SELECT views, likes, dislikes FROM gallery_stats";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch associative array
    $row = $result->fetch_assoc();
    // Output counts as JSON
    echo json_encode($row);
} else {
    // If no rows found, initialize counts to zero
    echo json_encode(array('views' => 0, 'likes' => 0, 'dislikes' => 0));
}

// Close statement and connection
$stmt->close();
$conn->close();

