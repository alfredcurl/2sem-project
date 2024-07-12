<?php
// Start session (if not already started)
session_start();


// Include your database connection file
require_once "config1.php";

// Fetch images from the database
$sql = "SELECT image_url, description FROM gallery";
$result = mysqli_query($conn, $sql);

// Check if there are any images in the result
if ($result && mysqli_num_rows($result) > 0): // Ensure $result is valid before checking the number of rows
?>
<?php include('includes/header.php'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mb-4">Our Services</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Vocational education</h5>
                        <p class="card-text">We offer vocational courses in Agriculture, Carpentry, Woodwork, and Building Construction in addition to Arts and Sciences.</p>
                        <a href="school/curriculum.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">O'level Education</h5>
                        <p class="card-text">The Ordinary Level Curriculum requires four years of Study From Senior One to Senior Four.
                        All students Must Choose any of the available vocational subjects during the admission period to Completion.</p>
                        <a href="school/curriculum.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Advanced Level</h5>
                        <!-- <img src="images/9-70492eb3.webp"  alt=""> -->
                        <p class="card-text">The Advanced Level Curriculum requires two years of Study From Senior five to Senior Six.
                        Each student Must Choose a Maximum of three Principle Subjects, An Optional Subsidiary of which general paper is compulsory for all.</p>
                        <a href="school/curriculum.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
else:
    echo "<p>No images found in the gallery.</p>";
endif; // This is the closing endif for the if statement that checks the number of rows

// Close connection
mysqli_close($conn);
?>
<?php include('includes/footer.php'); // Include your footer file ?>
