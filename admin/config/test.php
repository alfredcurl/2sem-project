<?php
require 'function.php';

$result = getAll('users');

while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Phone: " . $row['phone'] . "<br>";
    echo "Role: " . $row['role'] . "<br>";
    echo "Is_Ban: " . $row['is_ban'] . "<br>";
    echo "----------------------<br>";
}

mysqli_free_result($result);

