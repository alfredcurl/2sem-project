<?php
// Include your database connection file
require_once "config1.php";

// Check if the request is an AJAX POST request and if 'id' is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    
    // Prepare a delete statement
    $sql = "DELETE FROM inquiries WHERE id = ?";
    
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = $id;
        
        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
    
    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($conn);

