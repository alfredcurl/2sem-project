<?php
// Include config file
require_once "config1.php";

// Define variables and initialize with empty values
$Name = $email = $phone = $password = $role = $is_ban = "";
$Name_err = $email_err = $phone_err = $password_err = $role_err = $is_ban_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
    $input_Name = trim($_POST["Name"]);
    if (empty($input_Name)) {
        $Name_err = "Please enter your name.";
    } elseif (!filter_var($input_Name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $Name_err = "Please enter a valid name.";
    } else {
        $Name = $input_Name;
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
    if (empty($input_password)) {
        $password_err = "Please enter the password.";
    } else {
        $password = password_hash($input_password, PASSWORD_DEFAULT); // Hash the password
    }

    // Validate role
    $input_role = trim($_POST["role"]);
    if (empty($input_role)) {
        $role_err = "Please enter the role.";
    } else {
        $role = $input_role;
    }

    // Validate is_ban
    $input_is_ban = isset($_POST["is_ban"]) ? 1 : 0;

    // Check input errors before inserting in database
    if (empty($Name_err) && empty($email_err) && empty($phone_err) && empty($password_err) && empty($role_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO users (Name, email, phone, password, role, is_ban) VALUES (?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_Name, $param_email, $param_phone, $param_password, $param_role, $param_is_ban);

            // Set parameters
            $param_Name = $Name;
            $param_email = $email;
            $param_phone = $phone;
            $param_password = $password;
            $param_role = $role;
            $param_is_ban = $input_is_ban;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to landing page
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
}
?>

<?php include('includes/header.php'); ?>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add User
                            <a href="users.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php // This would be a custom function to display alert messages, implement if needed
                        // alertmessage();
                        ?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="Name" class="form-control <?php echo (!empty($Name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Name; ?>">
                                        <span class="invalid-feedback"><?php echo $Name_err; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Phone no.</label>
                                        <input type="text" name="phone" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone; ?>">
                                        <span class="invalid-feedback"><?php echo $phone_err; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Select Role</label>
                                        <select name="role" class="form-control <?php echo (!empty($role_err)) ? 'is-invalid' : ''; ?>">
                                            <option value="">Select role</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Staff">Staff</option>
                                        </select>
                                        <span class="invalid-feedback"><?php echo $role_err; ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Is Ban</label>
                                        <br>
                                        <input type="checkbox" name="is_ban" class="is_ban" style="width: 20px; height: 20px;">
                                    </div>
                                </div>
                                <div class="col-md-12 text-end">
                                    <div class="mb-3">
                                        <br>
                                        <button type="submit" name="saveUser" class="btn btn-primary">Save</button>
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
