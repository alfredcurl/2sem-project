<?php

require 'config/function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png">
  <title>
    Jovoc-Admin
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <link rel="stylesheet" href="table/bootstrap.min.css">
  <link rel="stylesheet" href="table/dataTables.bootstrap5.css">
 
  <style>
    .table{
      width: 200px;
    }
    .table thead th {
        white-space: nowrap;
    }
    .table tbody td {
        white-space: nowrap;
    }
    .table th, .table td {
        vertical-align: middle;
    }
 /* Ensure the nav-link takes the full width */
.sidenav .nav-link {
  display: flex;
  align-items: center;
  padding: 10px 15px;
  margin: 5px 0;
  border-radius: 5px;
  transition: background-color 0.3s, color 0.3s;
}

/* General hover effect for the sidebar nav-link covering entire cell */
.sidenav .nav-link:hover {
  background-color: purple; /* Light grey background */
  color: white; /* Text color */
}

/* Specific hover effect for the icon inside the nav-link */
.sidenav .nav-link:hover .icon {
  background-color: transparent; /* Make the icon background transparent */
  color: white; /* Text color inside icon */
}

/* Specific hover effect for the text inside the nav-link */
.sidenav .nav-link:hover .nav-link-text {
  color: white; /* Text color */
}

</style>

 
</head>

<body class="g-sidenav-show  bg-gray-100">

<?php include('sidebar.php'); ?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

  <?php include('navbar.php'); ?>

  <div class="container-fluid py-4">