<?php
session_start();
      if (!isset($_SESSION["kullanici"])) {
        header("Location: views/user/signin-2.php");
        exit();
    }
      ?>

<!doctype html>
<html lang="en" class="semi-dark">
<head>
  <?php
  include 'header.php';
  ?>
</head>
<body>

  <!--start wrapper-->
  <div class="wrapper">
  <?php include 'sidebar.php'; ?>
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
      <div class="page-content">
      
      
      </div>
      <?php include 'footer.php'; ?>


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

  </div>
  <!--end wrapper-->
</body>
</html>