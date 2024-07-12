<?php
// Include your database connection file
require_once "dbcon.php";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Validate form data
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Prepare an insert statement
        $sql = "INSERT INTO inquiries (name, email, message) VALUES (?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_email, $param_message);

            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_message = $message;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Inquiry submitted successfully
                header("Location: contact.php");
                // echo "Your message has been sent successfully.";
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Please fill in all fields.";
    }

    // Close connection
    mysqli_close($conn);
}

