<?php
// Include config file
require_once "config1.php";

// Define variables and initialize with empty values
$name = $email = $phone = $password = $role = $is_ban = "";
$name_err = $email_err = $phone_err = $password_err = $role_err = $is_ban_err = "";

// Processing form data when form is submitted
if (isset($_POST["id"]) && !empty($_POST["id"])) {
    // Get hidden input value
    $id = $_POST["id"];

    // Validate name
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter the name.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $input_name)) {
        $name_err = "Please enter a valid name.";
    } else {
        $name = $input_name;
    }

    // Validate email
    $input_email = trim($_POST["email"]);
    if (empty($input_email)) {
        $email_err = "Please enter the email.";
    } else {
        $email = $input_email;
    }

    // Validate phone
    $input_phone = trim($_POST["phone"]);
    if (empty($input_phone)) {
        $phone_err = "Please enter the phone number.";
    } else {
        $phone = $input_phone;
    }

    // Validate password
    $input_password = trim($_POST["password"]);
    if (!empty($input_password)) {
        $password = password_hash($input_password, PASSWORD_DEFAULT); // Hash the password if provided
    }

    // Validate role
    $input_role = trim($_POST["role"]);
    if (empty($input_role)) {
        $role_err = "Please enter the role.";
    } else {
        $role = $input_role;
    }

    // Validate is_ban
    $is_ban = isset($_POST["is_ban"]) ? 1 : 0;

    // Check input errors before inserting in database
    if (empty($name_err) && empty($email_err) && empty($phone_err) && empty($role_err)) {
        // Prepare an update statement
        if (!empty($input_password)) {
            $sql = "UPDATE users SET name=?, email=?, phone=?, password=?, role=?, is_ban=? WHERE id=?";
        } else {
            $sql = "UPDATE users SET name=?, email=?, phone=?, role=?, is_ban=? WHERE id=?";
        }

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            if (!empty($input_password)) {
                mysqli_stmt_bind_param($stmt, "ssssssi", $name, $email, $phone, $password, $role, $is_ban, $id);
            } else {
                mysqli_stmt_bind_param($stmt, "sssssi", $name, $email, $phone, $role, $is_ban, $id);
            }

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records updated successfully. Redirect to landing page
                header("location: users.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($conn);
} else {
    // Check existence of id parameter before processing further
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        // Get URL parameter
        $id = trim($_GET["id"]);

        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE id = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            // Set parameters
            $param_id = $id;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    // Fetch result row as an associative array
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $name = $row["Name"];
                    $email = $row["email"];
                    $phone = $row["phone"];
                    $role = $row["role"];
                    $is_ban = $row["is_ban"];
                } else {
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($conn);
    } else {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit User
                                <a href="users.php" class="btn btn-danger float-end">Back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>" required>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>" required>
                                            <span class="invalid-feedback"><?php echo $name_err; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>" required>
                                            <span class="invalid-feedback"><?php echo $email_err; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Phone no.</label>
                                            <input type="text" name="phone" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone; ?>" required>
                                            <span class="invalid-feedback"><?php echo $phone_err; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" placeholder="Leave blank if not changing">
                                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Select Role</label>
                                            <select name="role" class="form-control <?php echo (!empty($role_err)) ? 'is-invalid' : ''; ?>" required>
                                                <option value="">Select Role</option>
                                                <option value="Admin" <?= $role == 'Admin' ? 'selected' : ''; ?>>Admin</option>
                                                <option value="Staff" <?= $role == 'Staff' ? 'selected' : ''; ?>>Staff</option>
                                            </select>
                                            <span class="invalid-feedback"><?php echo $role_err; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Is Ban</label>
                                            <br>
                                            <input type="checkbox" name="is_ban" class="is_ban" <?= $is_ban == 1 ? 'checked' : ''; ?> style="width: 20px; height: 20px;">
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <div class="mb-3">
                                            <br>
                                            <button type="submit" name="updateUser" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
   
<?php include('includes/footer.php'); ?>
