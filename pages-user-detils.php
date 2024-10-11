<!doctype html>
<html lang="en" class="semi-dark">
<head>
  <?php
  session_start();
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
  
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Pages</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0 align-items-center">
                    <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                  </ol>
                </nav>
              </div>
              <div class="ms-auto">
                <div class="btn-group">
                  <button type="button" class="btn btn-outline-primary">Settings</button>
                  <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                  </div>
                </div>
              </div>
            </div>
            <!--end breadcrumb-->

            <div class="row">
              <div class="col-12 col-lg-8 col-xl-9">
                <div class="card overflow-hidden radius-10">
                  <div class="profile-cover bg-dark position-relative mb-4">
                    <div class="user-profile-avatar shadow position-absolute top-50 start-0 translate-middle-x">
                      <img src="assets/user_images/<?php echo $_SESSION['kullanici']['user_foto']; ?>.png" alt="...">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="mt-5 d-flex align-items-start justify-content-between">
                      <div class="">
                        <h3 class="mb-2"><?php echo $_SESSION['kullanici']['username']; ?></h3>
                        <p class="mb-1"><?php echo $_SESSION['kullanici']['ülke']. '/' . $_SESSION['kullanici']['ilce']. " " .$_SESSION['kullanici']['il'] ; ?></p>
                        <p><?php echo $_SESSION['kullanici']['email']; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h4 class="mb-2">Hakkımda</h4>
                    <p class=""><?php echo $_SESSION['kullanici']['hakkinda']; ?></p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-4 col-xl-3">
                <div class="card radius-10">
                  <div class="card-body">
                    <h5 class="mb-3">Location</h5>
                     <p class="mb-0"><ion-icon name="compass-sharp" class="me-2"></ion-icon><?php echo $_SESSION['kullanici']['ülke']?></p>
                     <p class="mb-0"><ion-icon name="call-sharp" class="me-2"></ion-icon><?php echo $_SESSION['kullanici']['telefon']?></p>
                  </div>
                </div>

                <div class="card radius-10">
                  <div class="card-body">
                    <h5 class="mb-3">Connect</h5>
                     <p class=""><ion-icon name="globe-sharp" class="me-2"></ion-icon><?php echo $_SESSION['kullanici']['website_url']?></p>
                     <p class=""><ion-icon name="logo-facebook" class="me-2"></ion-icon><?php echo $_SESSION['kullanici']['facebook_url']?></p>
                     <p class=""><ion-icon name="logo-twitter" class="me-2"></ion-icon><?php echo $_SESSION['kullanici']['insta_url']?></p>
                     <p class="mb-0"><ion-icon name="logo-linkedin" class="me-2"></ion-icon><?php echo $_SESSION['kullanici']['linkedin_url']?></p>
                  </div>
                </div>

                <div class="card radius-10">
                  <div class="card-body">
                    <h5 class="mb-3">Skills</h5>
                     
                     
                     
                     
                     <div class="mb-0">
                      <p class="mb-1"><?php echo $_SESSION['kullanici']['yetenek_1']?></p>
                      <div class="progress" style="height: 5px;">
                       <div class="progress-bar" role="progressbar" style="width: <?php echo $_SESSION['kullanici']['derece_1']?>%"></div>
                      </div>
                     </div>
                     <div class="mb-0">
                      <p class="mb-1"><?php echo $_SESSION['kullanici']['yetenek_2']?></p>
                      <div class="progress" style="height: 5px;">
                       <div class="progress-bar" role="progressbar" style="width: <?php echo $_SESSION['kullanici']['derece_2']?>%"></div>
                      </div>
                     </div>

                  </div>
                </div>

              </div>
            </div><!--end row-->


              


          </div>
      </div>
      <?php include 'footer.php'; ?>


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

  </div>
  <!--end wrapper-->
</body>
</html>