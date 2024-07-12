<?php
// session_start();

// Check if the user is logged in
// if (!isset($_SESSION['email'])) {
//     header("Location: /login.php");
//     exit();
// }

// Include your database connection file
require_once "config1.php";

// Fetch current gallery images from the database
$sql = "SELECT id, image_url, description FROM gallery ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image'])) {
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 80000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "webp" && $imageFileType != "bmp") {
    echo "Sorry, only JPG, JPEG, PNG, GIF, BMP & WEBP files are allowed.";
    $uploadOk = 0;
}


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image_url = basename($_FILES["image"]["name"]);
            $sql = "INSERT INTO gallery (image_url, description) VALUES ('$image_url', '$description')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Image uploaded successfully!'); window.location.href='gallery.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}


include('includes/header.php'); // Include your header file
?>

    <div class="wrapper">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Gallery</h4>
                        </div>
                        <div class="card-body">
                            <form action="gallery.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary mt-3" value="Upload Image">
                            </form>

                            <?php if (mysqli_num_rows($result) > 0): ?>
                                <table class="table table-bordered table-striped mt-4 w-100">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td>
                    <?php
                    // Check if image_url is not empty and file exists
                    if (!empty($row['image_url']) && file_exists('uploads/' . $row['image_url'])) {
                        // Output the image with proper HTML encoding
                        echo '<img src="uploads/' . htmlspecialchars($row['image_url']) . '" alt="Image" width="100">';
                    } else {
                        // Output a placeholder or message if image is not found
                        echo 'Image Not Found';
                    }
                    ?>
                </td>
                <td><?php echo htmlspecialchars($row['description']); ?></td>
                <td>
                    <button class="btn btn-danger btn-sm delete-btn" data-id="<?php echo $row['id']; ?>">Delete</button>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
                            <?php else: ?>
                                <p>No images found.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

<?php include('includes/footer.php'); // Include your footer file ?>




