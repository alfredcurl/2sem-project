<?php include('includes/header.php'); ?>
<?php
// session_start();

// Check if the user is logged in
// if (!isset($_SESSION['email'])) {
//     header("Location: /login.php");
//     exit();
// }

// Include your database connection file
// require_once "config1.php";

// Fetch inquiries from the database
$sql = "SELECT id, name, email, message, created_at FROM inquiries ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);


?>
 <!-- Inquiries -->
 <div class="wrapper">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Inquiries</h4>
                        </div>
                        <div class="card-body">
                            <?php if (mysqli_num_rows($result) > 0): ?>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                            <tr class="inquiry-row" data-id="<?php echo $row['id']; ?>">
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                                <td class="message-cell"><?php echo htmlspecialchars($row['message']); ?></td>
                                                <td><?php echo $row['created_at']; ?></td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <p>No inquiries found.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <!-- Modal for displaying full message -->
    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="fullMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>