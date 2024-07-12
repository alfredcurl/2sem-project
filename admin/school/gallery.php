<?php
// Include your database connection file
require_once "dbcon.php";

// Fetch current gallery images from the database
$sql = "SELECT image_url, description FROM gallery ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.9.18, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.18, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/budge-142a3934.webp" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Gallery</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Inter+Tight:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter+Tight:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css?v=Fn1FBg"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css?v=Fn1FBg" type="text/css">
  <style>
     @media (prefers-reduced-motion: no-preference){
         img{
            scale: .8; opacity: 0;
            animation: fade-in linear forwards;
            animation-timeline: view();
            animation-range: entry;
         }
         @keyframes fade-in{
            to{scale: 1; opacity: 1;}
         }
      }
  </style>
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu5 cid-ufL8dWfzKo" once="menu" id="menu05-2k">
	

	<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
		<div class="container">
			<div class="navbar-brand">
				<span class="navbar-logo">
					<a href="index.php">
						<img src="assets/images/budge-142a3934.webp" alt="Mobirise Website Builder" style="height: 4.3rem;">
					</a>
				</span>
				<span class="navbar-caption-wrap"><a class="navbar-caption text-danger display-4" href="index.php">Jovoc</a></span>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
						<a class="nav-link link text-danger text-primary display-4" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link text-danger text-primary display-4" href="about.php" aria-expanded="false">About</a>
					</li><li class="nav-item dropdown"><a class="nav-link link text-danger dropdown-toggle display-4" href="curriculum.php" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Academics</a><div class="dropdown-menu" aria-labelledby="dropdown-811"><a class="text-danger dropdown-item text-primary display-4" href="curriculum.php">Curriculum</a><a class="text-danger dropdown-item text-primary display-4" href="admissions.php">Admissions</a></div></li><li class="nav-item"><a class="nav-link link text-danger text-primary display-4" href="gallery.php">Gallery</a></li>
					<li class="nav-item">
						<a class="nav-link link text-danger text-primary display-4" href="contact.php">Contact Us</a>
					</li><li class="nav-item"><a class="nav-link link text-danger text-primary display-4" href="login.php">Login</a></li></ul>
				
			</div>
		</div>
	</nav>
</section>

<section data-bs-version="5.1" class="gallery1 mbr-gallery cid-ufYOgyi9yV" id="gallery02-2m">   
    
    

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"><strong><br></strong><br><strong>Gallery&nbsp;</strong></h3>
                    <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-4 display-7">Some sites and views of our School</h4>
                </div>
            </div>
        </div>
        <div class="row mbr-gallery mbr-masonry" data-masonry="{&quot;percentPosition&quot;: true }">
            <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/2-5a421258.webp" alt="Mobirise Website Builder" data-slide-to="0" data-bs-slide-to="0" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">School Compound</h6>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/3-ab9817f2-1.webp" alt="Mobirise Website Builder" data-slide-to="1" data-bs-slide-to="1" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">                    
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">School Compound 2</h6>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/4-130d0567.webp" alt="Mobirise Website Builder" data-slide-to="2" data-bs-slide-to="2" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">Bursar's Office</h6>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/5-e2d700cd.webp" alt="Mobirise Website Builder" data-slide-to="3" data-bs-slide-to="3" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">School Bell</h6>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/8-81932b19.webp" alt="Mobirise Website Builder" data-slide-to="4" data-bs-slide-to="4" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">Silver Jubilee Block</h6>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/9-70492eb3.webp" alt="Mobirise Website Builder" data-slide-to="5" data-bs-slide-to="5" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">Bishop Kakubi Block</h6>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/11-9cd4ad5b.webp" alt="Mobirise Website Builder" data-slide-to="6" data-bs-slide-to="6" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">
                    Administration Block</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/20210319-083401-78f3b170.webp" alt="Mobirise Website Builder" data-slide-to="7" data-bs-slide-to="7" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">St. Joseph's Day</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/20210319-083445-d2b3e896.webp" alt="Mobirise Website Builder" data-slide-to="8" data-bs-slide-to="8" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">St. Joseph's Day 2</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/a-section-of-senior-six-science-class-3531d2f0.webp" alt="Mobirise Website Builder" data-slide-to="9" data-bs-slide-to="9" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">A' level Sections</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/bg2-f7d13c53.webp" alt="Mobirise Website Builder" data-slide-to="10" data-bs-slide-to="10" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">Our Location</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/bursary-frru-1-3b366459.webp" alt="Mobirise Website Builder" data-slide-to="11" data-bs-slide-to="11" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">Some of Our Partners</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/chapel-40426aae.webp" alt="Mobirise Website Builder" data-slide-to="12" data-bs-slide-to="12" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">Our Chapel</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/computer-lab-1800x1200.jpg" alt="Mobirise Website Builder" data-slide-to="13" data-bs-slide-to="13" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">
                    Computer Lab</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/dsc-0713-55300abf.webp" alt="Mobirise Website Builder" data-slide-to="14" data-bs-slide-to="14" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">Our Science Lab's</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/dsc-0751-20180704-ccf743e0.webp" alt="Mobirise Website Builder" data-slide-to="15" data-bs-slide-to="15" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">O 'level Section</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/dsc-4138-4149a2a4.webp" alt="Mobirise Website Builder" data-slide-to="16" data-bs-slide-to="16" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">
                    School Dinning</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/dsc-0758-20180704-09984f4d.webp" alt="Mobirise Website Builder" data-slide-to="17" data-bs-slide-to="17" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">
                    St. Augustine Block</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/dsc-4181-392c7abd.webp" alt="Mobirise Website Builder" data-slide-to="18" data-bs-slide-to="18" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">
                    Our Students</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/img-20190208-093115-7-c2bd5c7d.webp" alt="Mobirise Website Builder" data-slide-to="19" data-bs-slide-to="19" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">Library&nbsp;</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/img-20191008-103903-1f4f932e.webp" alt="Mobirise Website Builder" data-slide-to="20" data-bs-slide-to="20" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">
                    Chapel</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/img-20191008-104610-e3075eaa.webp" alt="Mobirise Website Builder" data-slide-to="21" data-bs-slide-to="21" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">Sites of our school</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/st-paul-block-20180704-d43cbcc7.webp" alt="Mobirise Website Builder" data-slide-to="22" data-bs-slide-to="22" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">Recreation</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/st-peters-block-20180704-c8eb6e45.webp" alt="Mobirise Website Builder" data-slide-to="23" data-bs-slide-to="23" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">Dormitries&nbsp;</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/teaching-staff-of-jovoc-237aba81.webp" alt="Mobirise Website Builder" data-slide-to="24" data-bs-slide-to="24" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">Teaching Staff&nbsp;</h6>
            </div><div class="col-12 col-md-6 col-lg-4 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#ug7ZHsXreb-modal" data-bs-target="#ug7ZHsXreb-modal">
                    <img class="w-100" src="assets/images/workshop.webp" alt="Mobirise Website Builder" data-slide-to="25" data-bs-slide-to="25" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-0 mt-3 display-7">
                    workshop&nbsp;</h6>
            </div>
        </div>

        <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="ug7ZHsXreb-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="carousel slide" id="lb-ug7ZHsXreb" data-ride="carousel" data-bs-ride="carousel" data-interval="5000" data-bs-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="assets/images/2-5a421258.webp" alt="Mobirise Website Builder">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/3-ab9817f2-1.webp" alt="Mobirise Website Builder">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/4-130d0567.webp" alt="Mobirise Website Builder">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/5-e2d700cd.webp" alt="Mobirise Website Builder">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/8-81932b19.webp" alt="Mobirise Website Builder">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/9-70492eb3.webp" alt="Mobirise Website Builder">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/11-9cd4ad5b.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/20210319-083401-78f3b170.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/20210319-083445-d2b3e896.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/a-section-of-senior-six-science-class-3531d2f0.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/bg2-f7d13c53.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/bursary-frru-1-3b366459.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/chapel-40426aae.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/computer-lab-1800x1200.jpg" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/dsc-0713-55300abf.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/dsc-0751-20180704-ccf743e0.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/dsc-4138-4149a2a4.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/dsc-0758-20180704-09984f4d.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/dsc-4181-392c7abd.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/img-20190208-093115-7-c2bd5c7d.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/img-20191008-103903-1f4f932e.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/img-20191008-104610-e3075eaa.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/st-paul-block-20180704-d43cbcc7.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/st-peters-block-20180704-c8eb6e45.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/teaching-staff-of-jovoc-237aba81.webp" alt="Mobirise Website Builder">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/workshop.webp" alt="Mobirise Website Builder">
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-slide-to="0" data-bs-slide-to="0" class="active" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li>
                                <li data-slide-to="1" data-bs-slide-to="1" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li>
                                <li data-slide-to="2" data-bs-slide-to="2" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li>
                                <li data-slide-to="3" data-bs-slide-to="3" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li>
                                <li data-slide-to="4" data-bs-slide-to="4" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li>
                                <li data-slide-to="5" data-bs-slide-to="5" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li>
                                <li data-slide-to="6" data-bs-slide-to="6" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="7" data-bs-slide-to="7" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="8" data-bs-slide-to="8" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="9" data-bs-slide-to="9" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="10" data-bs-slide-to="10" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="11" data-bs-slide-to="11" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="12" data-bs-slide-to="12" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="13" data-bs-slide-to="13" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="14" data-bs-slide-to="14" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="15" data-bs-slide-to="15" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="16" data-bs-slide-to="16" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="17" data-bs-slide-to="17" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="18" data-bs-slide-to="18" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="19" data-bs-slide-to="19" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="20" data-bs-slide-to="20" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="21" data-bs-slide-to="21" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="22" data-bs-slide-to="22" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="23" data-bs-slide-to="23" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="24" data-bs-slide-to="24" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li><li data-slide-to="25" data-bs-slide-to="25" data-target="#lb-ug7ZHsXreb" data-bs-target="#lb-ug7ZHsXreb"></li>
                            </ol>
                            <a role="button" href="" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                            </a>
                            <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" data-bs-slide="prev" href="#lb-ug7ZHsXreb">
                                <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next carousel-control" role="button" data-slide="next" data-bs-slide="next" href="#lb-ug7ZHsXreb">
                                <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container mt-5">
    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="../uploads/<?php echo htmlspecialchars($row['image_url']); ?>" class="card-img-top" alt="Image">
                    <div class="card-body">
                    <div class="counter text-center" id="counter">
   <span class="views">Views: <span id="viewCount">0</span></span>
   <span class="like-button" onclick="like()">👍</span>
   <span class="likes">Likes: <span id="likeCount">0</span></span>
   <span class="dislike-button" onclick="dislike()">👎</span>
   <span class="dislikes">Dislikes: <span id="dislikeCount">0</span></span>
</div>
                        <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>


<section data-bs-version="5.1" class="contacts01 cid-ug7PQhmPGW mbr-parallax-background" id="contacts01-34">
    

    
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(255, 255, 255);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Contacts</strong>
                    </h3>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="item features-without-image col-12 col-md-6 active">
                <div class="item-wrapper">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-3 display-5">
                            <strong>Phone</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="tel:+12345678910" class="text-primary">+256 752 582366</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6">
                <div class="item-wrapper">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-3 display-5">
                            <strong>Email</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="mailto:info@site.com" class="text-primary">Info@jovoc.sc.ug</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6">
                <div class="item-wrapper">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-3 display-5">
                            <strong>Address</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Nyamitanga Hill,4KM From Mbarara Town,Branching off Mbarara - Kabale, Along Isingiro Rd. P.O.Box 120, Mbarara - Uganda
                        </p>
                    </div>
                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6">
                <div class="item-wrapper">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-3 display-5">
                            <strong>Working Hours</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">Mon - Fri (9.00-16.00)
<br>
<br>Sat - Sun (9.00-16.00)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-ufLdT4aaxz" once="footers" id="footer03-2l">

        

    

    <div class="container">
        <div class="row">
            

            <div class="col-12 mt-4">
                <div class="social-row">
                    <div class="soc-item">
                        <a href="https://mobiri.se/" target="_blank">
                            <span class="mbr-iconfont socicon socicon-facebook display-7"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://mobiri.se/" target="_blank">
                            <span class="mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://mobiri.se/" target="_blank">
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://mobiri.se/" target="_blank">
                            <span class="mbr-iconfont socicon socicon-linkedin"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://mobiri.se/" target="_blank">
                            <span class="mbr-iconfont socicon socicon-twitch"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <p class="mbr-fonts-style copyright display-7">
                    © Copyright 2030 Curl.inc Media- All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/3287029" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7">&#8204;</p><a style="z-index:1" href="https://mobirise.com/builder/no-code-website-builder.html">No Code Website Builder</a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/parallax/jarallax.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/masonry/masonry.pkgd.min.js"></script>  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/gallery/player.min.js"></script>  <script src="assets/gallery/script.js"></script>  
  
  
  <input name="animation" type="hidden">
<script>

let viewCount = 0;
let likeCount = 0;
let dislikeCount = 0;
   // JavaScript function to fetch and update counters on page load
window.onload = function() {
    fetchCounts();
};

function fetchCounts() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var counts = JSON.parse(this.responseText);
            document.getElementById("viewCount").innerHTML = counts.views;
            document.getElementById("likeCount").innerHTML = counts.likes;
            document.getElementById("dislikeCount").innerHTML = counts.dislikes;
        }
    };
    xhttp.open("GET", "update_stats.php", true);
    xhttp.send();
}

// Example of like and dislike functions (adjust as per your implementation)
function like() {
    var likeCount = Number(document.getElementById("likeCount").innerHTML);
    likeCount++;
    document.getElementById("likeCount").innerHTML = likeCount;
    updateCounts(); // Call updateCounts after updating likeCount
}

function dislike() {
    var dislikeCount = Number(document.getElementById("dislikeCount").innerHTML);
    dislikeCount++;
    document.getElementById("dislikeCount").innerHTML = dislikeCount;
    updateCounts(); // Call updateCounts after updating dislikeCount
}

// Function to update counts on the server
function updateCounts() {
    var viewCount = Number(document.getElementById("viewCount").innerHTML);
    var likeCount = Number(document.getElementById("likeCount").innerHTML);
    var dislikeCount = Number(document.getElementById("dislikeCount").innerHTML);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText); // Log response from the server
        }
    };
    xhttp.open("GET", "update_stats.php?viewCount=" + viewCount + "&likeCount=" + likeCount + "&dislikeCount=" + dislikeCount, true);
    xhttp.send();
}

// Increment view count when gallery item is viewed
function incrementViewCount() {
    viewCount++;
    document.getElementById('viewCount').innerText = viewCount;
}

// Call incrementViewCount function when gallery item is viewed
incrementViewCount();

// second java for counter
// function like() {
//    var likeCount = Number(document.getElementById("likeCount").innerHTML);
//    likeCount += 1;
//    document.getElementById("likeCount").innerHTML = likeCount;
//    updateCounts();
// }

// function dislike() {
//    var dislikeCount = Number(document.getElementById("dislikeCount").innerHTML);
//    dislikeCount += 1;
//    document.getElementById("dislikeCount").innerHTML = dislikeCount;
//    updateCounts();
// }

// function updateCounts() {
//    var viewCount = Number(document.getElementById("viewCount").innerHTML);
//    var likeCount = Number(document.getElementById("likeCount").innerHTML);
//    var dislikeCount = Number(document.getElementById("dislikeCount").innerHTML);

//    var xhttp = new XMLHttpRequest();
//    xhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//          console.log(this.responseText); // Log response from the server
//       }
//    };
//    xhttp.open("GET", "update_stats.php?viewCount=" + viewCount + "&likeCount=" + likeCount + "&dislikeCount=" + dislikeCount, true);
//    xhttp.send();
// }

  </script>
  </body>
</html>