<?php
// Include your database connection file
require_once "config1.php";

// Check if the request is an AJAX POST request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    
    // Prepare a select statement
    $sql = "SELECT message FROM inquiries WHERE id = ?";
    
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = $id;
        
        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Store result
            mysqli_stmt_store_result($stmt);
            
            // Check if the inquiry exists, if yes then fetch the result
            if (mysqli_stmt_num_rows($stmt) == 1) {
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $message);
                if (mysqli_stmt_fetch($stmt)) {
                    // Output the message
                    echo htmlspecialchars($message);
                }
            } else {
                echo "No message found.";
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    
    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($conn);
?>
