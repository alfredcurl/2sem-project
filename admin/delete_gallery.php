<?php
// Include your database connection file
require_once "config1.php";

// Check if the request is an AJAX POST request and if 'id' is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    
    // Fetch the image URL from the database
    $sql = "SELECT image_url FROM gallery WHERE id = ?";
    
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $id);
        
        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt, $image_url);
            if (mysqli_stmt_fetch($stmt)) {
                // Close the first statement
                mysqli_stmt_close($stmt);

                // Delete the image file from the server
                if (file_exists("uploads/" . $image_url)) {
                    unlink("uploads/" . $image_url);
                }

                // Delete the image record from the database
                $sql = "DELETE FROM gallery WHERE id = ?";
                if ($stmt = mysqli_prepare($conn, $sql)) {
                    mysqli_stmt_bind_param($stmt, "i", $id);
                    if (mysqli_stmt_execute($stmt)) {
                        echo "success";
                    } else {
                        echo "error: could not execute delete statement";
                    }
                } else {
                    echo "error: could not prepare delete statement";
                }
            } else {
                echo "error: could not fetch image URL";
            }
        } else {
            echo "error: could not execute select statement";
        }

        // Close the second statement
        mysqli_stmt_close($stmt);
    } else {
        echo "error: could not prepare select statement";
    }
} else {
    echo "error: invalid request";
}

// Close connection
mysqli_close($conn);

