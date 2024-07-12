<?php include('includes/header.php'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Users List
                    <a href="create.php" class="btn btn-primary float-end">Add Users</a>
                </h4>
            </div>
            <div class="card-body">
                
                <?php // This would be a custom function to display alert messages, implement if needed
                // alertmessage();
                ?>

                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Is Ban</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Function to fetch all records from a specified table
                        function getAll($table) {
                            global $conn;
                            $query = "SELECT * FROM $table";
                            return mysqli_query($conn, $query);
                        }

                        // Fetch all users from the 'users' table
                        $usersResult = getAll('users');
                        if(mysqli_num_rows($usersResult) > 0) {
                            while($userItem = mysqli_fetch_assoc($usersResult)) {
                                ?>
                                <tr>
                                    <td><?= $userItem['id']; ?></td>
                                    <td><?= $userItem['Name']; ?></td>
                                    <td><?= $userItem['email']; ?></td>
                                    <td><?= $userItem['phone']; ?></td>
                                    <td><?= $userItem['role']; ?></td>
                                    <td><?= $userItem['is_ban'] == 1 ? 'Banned' : 'Active'; ?></td>
                                    <td>
                                        <a href="users-edit.php?id=<?= $userItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="delete.php?id=<?= $userItem['id']; ?>" class="btn btn-danger btn-sm mx-2">Delete</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7">No Record Found</td>
                            </tr>
                            <?php
                        }
                        // Free result set
                        mysqli_free_result($usersResult);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>
