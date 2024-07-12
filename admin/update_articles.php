<?php
// Include your database connection file
require_once "config1.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs (add more validation as needed)
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    
    // Upload image (if provided)
    $image_path = ''; // Placeholder for image path
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_path = 'uploads/' . $image_name;
        move_uploaded_file($image_tmp, $image_path);
    }

    // Insert into database (or update existing article)
    if (isset($_POST['article_id']) && !empty($_POST['article_id'])) {
        // Update existing article
        $article_id = intval($_POST['article_id']);
        $sql = "UPDATE articles SET title = '$title', content = '$content', category = '$category', image_path = '$image_path', created_at = NOW() WHERE id = $article_id";
    } else {
        // Insert new article
        $sql = "INSERT INTO articles (title, content, category, image_path, created_at) VALUES ('$title', '$content', '$category', '$image_path', NOW())";
    }
    
    if (mysqli_query($conn, $sql)) {
        // Redirect back to settings page after updating/inserting article
        header('Location: settings.php');
        exit;
    } else {
        echo "Error updating article: " . mysqli_error($conn);
    }
}



// Close connection
mysqli_close($conn);
?>



