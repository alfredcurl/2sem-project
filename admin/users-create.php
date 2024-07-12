<?php include('includes/header.php'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="cards-header">
                <h4>Add User
                    <a href="users.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <?php alertmessage(); ?>
                <form action="code.php" method="post"> <!-- Change action to 'code.php' -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Phone no.</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Select Role</label>
                                <select name="role" class="form-control">
                                    <option value="">Select role</option>
                                    <option value="Admin">Admin</option> <!-- Capitalize 'Admin' -->
                                    <option value="Staff">Staff</option> <!-- Capitalize 'Staff' -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Is_ban</label>
                                <br>
                                <input type="checkbox" name="is_ban" class="is_ban" style="width: 20px; height: 20px;"> <!-- Add name attribute to checkbox -->
                            </div>
                        </div>
                        <div class="col-md-12 text-end"> <!-- Change col-md-6 to col-md-12 for button alignment -->
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
<?php include('includes/footer.php'); ?>