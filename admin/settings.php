
<?php include('includes/header.php'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center mb-4">Update Articles</h1>
                <form action="update_articles.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Article Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Article Content</label>
                        <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category" required>
                            <option value="news">News</option>
                            <option value="updates">Updates</option>
                            <option value="events">Events</option>
                            <option value="events">Welcome</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
   

    <?php include('includes/footer.php'); // Include your footer file ?>

    