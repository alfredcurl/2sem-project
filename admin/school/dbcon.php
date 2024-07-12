<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jovoccon";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert view, like, dislike counts into database
// $sql = "INSERT INTO gallery_stats (views, likes, dislikes) VALUES ($viewCount, $likeCount, $dislikeCount)";

// if ($conn->query($sql) === TRUE) {
//     echo "Stats recorded successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
