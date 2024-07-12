<?php 

require 'config/function.php';

if(isset($_POST['saveUser']))
{
    $name = validate($conn, $_POST['name']);
    $phone = validate($conn, $_POST['phone']);
    $email = validate($conn, $_POST['email']);
    $password = $_POST['password']; // Remove validate() for password
    $role = validate($conn, $_POST['role']);
    
    // Check if is_ban key exists in $_POST
    $is_ban = isset($_POST['is_ban']) && validate($conn, $_POST['is_ban']) == true ? 1 : 0;

    if($name != '' && $email != '' && $phone != '' && $password != '')
    {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO users (name, phone, email, password, role, is_ban) VALUES (?, ?, ?, ?, ?, ?)");
        
        // Bind the parameters
        $stmt->bind_param("sssssi", $name, $phone, $email, $hashed_password, $role, $is_ban);
        
        // Execute the statement
        if ($stmt->execute()) {
            redirect('users.php', 'Staff/Admin added successfully');
        } else {
            redirect('users-create.php', 'Something Went Wrong');
        }

        // Close the statement
        $stmt->close();
    }
    else
    {
        redirect('users-create.php', 'Please fill all input fields!');
    }
}
if (isset($_POST['updateUser'])) {
    $name = validate($conn, $_POST['name']);
    $phone = validate($conn, $_POST['phone']);
    $email = validate($conn, $_POST['email']);
    $password = $_POST['password']; // Remove validate() for password
    $role = validate($conn, $_POST['role']);
    $userId = validate($conn, $_POST['userId']);

    // Check if is_ban key exists in $_POST
    $is_ban = isset($_POST['is_ban']) && $_POST['is_ban'] == true ? 1 : 0;

    if ($name != '' && $email != '' && $phone != '') {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL statement
        $stmt = $conn->prepare("UPDATE users SET name=?, phone=?, email=?, password=?, role=?, is_ban=? WHERE id=?");
        
        // Bind the parameters
        $stmt->bind_param("ssssiii", $name, $phone, $email, $hashed_password, $role, $is_ban, $userId);
        
        // Execute the statement
        if ($stmt->execute()) {
            redirect('users.php', 'Staff/Admin updated successfully');
        } else {
            redirect('users-edit.php?id='.$userId, 'Something went wrong while updating');
        }

        // Close the statement
        $stmt->close();
    } else {
        redirect('users-edit.php?id='.$userId, 'Please fill all input fields!');
    }
}


?>
