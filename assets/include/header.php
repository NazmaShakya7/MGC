<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cartering</title>
   <link rel="stylesheet" href="assets/css/uikit.min.css" />
   <link rel="stylesheet" href="assets/css/style.css" />
   <link rel="stylesheet" href="assets/css/responsive.css" />
   <script src="assets/js/jquery-3.3.1.min.js"></script>
   <script src="assets/js/uikit.min.js"></script>
   <script src="assets/js/uikit-icons.min.js"></script>
   <script src="assets/js/jquery-ui.js"></script>
</head>

<body>
   <div class="uk-offcanvas-content">
      <header class="uk-position-top">
         <div class="uk-main-header uk-navbar-container " uk-sticky="top: 100; animation: uk-animation-slide-top-medium;">
            <div class="uk-container">
               <nav class="uk-navbar uk-position-relative" uk-navbar uk-scrollspy="target:.uk-navbar-item; cls: uk-animation-slide-top-medium;   delay: 50; repeat: true;">
                  <div class="uk-navbar-left  ">
                     <div class="uk-navbar-item">
                        <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #uk-menu; animation: uk-animation-slide-top ; queued: false; duration: 600"></a>
                     </div>
                  </div>
                  <div class="uk-navbar-center">
                     <a class="uk-navbar-item uk-logo" href="index.php">
                        <img src="assets/img/logo.png" class="uk-logo-white" width="100" alt="">
                  </div>
                  <div class="uk-navbar-right uk-visible@m">
                     <div class="uk-navbar-item">
                        <a href="" class="uk-btn-nav uk-primary ">Reservation</a>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </header>

      <div id="uk-menu" uk-offcanvas>
      <div class="uk-offcanvas-bar uk-padding-remove uk-dark">
         <button class="uk-offcanvas-close " type="button" style="color:var(--primary)!important;" uk-close></button>
            <header class="uk-card-header  uk-padding-small " >
               <div class="uk-flex uk-flex-center">
                  <img src="assets\img\logo.png" alt="" style="width:100px;  height: 80px;">
               </div>
            </header>
            
            <nav class="uk-card-small uk-card-body uk-nav-small">
               <ul class="uk-nav-default offcanvas-font" uk-nav>
                  <li><a class="text-secondary" href="index.php">Home</a></li>
                  <li>
                     <a class="text-secondary" href="about.php">About Us</a>
                  </li>
                  <li>
                     <a class="text-secondary" href="services.php">Our Services</a>
                  </li>
                  <li>
                     <a class="text-secondary" href="gallery.php">Our Gallery</a>
                  </li>
                  <li>
                     <a class="text-secondary" href="contact.php">Contact Us</a>
                  </li>
                  <li class="uk-hidden@m">
                        <a href="contact.php" class="uk-btn-nav uk-primary " style="color:white;">Reservation</a>
                     </a>
                  </li>
               </ul>
            </nav>
            <div style="height:1px; background:#d2563669; "></div>
            <div class="off-canvas-icon uk-text-center uk-margin-top">
               <a href="#"><i class="fa-brands fa-facebook uk-margin-small-right" ></i></a>
               <a href="#"><i class="fa-brands fa-twitter uk-margin-small-right"></i></a>
               <a href="#"><i class="fa-brands fa-instagram uk-margin-small-right"></i></a>
               <a href="#"><i class="fa-brands fa-linkedin uk-margin-small-right"></i></a>
            </div>
         </div>
      </div>