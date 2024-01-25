<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cartering</title>
   <link rel="stylesheet" href="assets/css/uikit.min.css" />
   <link rel="stylesheet" href="assets/css/style.css" />
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
                  <div class="uk-navbar-left uk-visible@m ">
                     <div class="uk-navbar-item">
                     <a class="uk-navbar-toggle" uk-navbar-toggle-icon  uk-toggle="target: #uk-menu; animation: uk-animation-slide-top ; queued: false; duration: 600"></a>
                     </div>
                  </div>
                  <div class="uk-navbar-center">
                     <a class="uk-navbar-item uk-logo" href="index.php"> 
                        <img src="assets/img/logo.png" class="uk-logo-white" width="100" alt="">
                        <img src="assets/images/logo.png" class="uk-logo-dark" width="180" alt=""> </a>
                  </div>
                  <div class="uk-navbar-right">
                     <div class="uk-navbar-item">
                        <a href="booking.php" class="uk-btn"><span class="uk-margin-small-right"><i class=" fa-solid fa-arrow-right-long"></i></span> Reservation</a>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </header>

      <div id="uk-menu" hidden class="uk-fixed-menu uk-position-fixed bg-black" uk-height-viewport>
         <div class="uk-container">
            <div class="line_wrap">
               <div class="line_item"></div>
               <div class="line_item"></div>
               <div class="line_item"></div>
               <div class="line_item"></div>
               <div class="line_item"></div>
            </div>
            <div class="uk-menu-container">
               <div class="uk-menu-scrollbar">
                  <div class="uk-grid-large" uk-grid>
                     <div class="uk-width-expand">
                        <ul class="uk-menu-list">
                           <li><a href="about-us.php"><span value="#about">About Hotel</span></a></li>
                           <li><a href="rooms.php"><span value="#rooms">Rooms & Suite</span></a></li>
                           <li><a href="restaurant-bar.php"><span value="#restaurant">Restaurant & Bar</span></a></li>
                           <li><a href="meeting-conference.php"><span value="#meeting">Meeting & Conference </span></a></li>
                           <li><a href="surrounding-facilities.php"><span value="#SurroundingFacilities">Surrounding Facilities</span></a></li>
                           <li><a href="packages.php"><span value="#packages">Packages</span></a></li>
                           <li><a href="clients-reviews.php"><span value="#ClientsReviews">Clients Reviews</span></a></li>
                           <li><a href="gallery.php"><span value="#gallery">Gallery</span></a></li>
                           <li><a href="contact.php"><span value="#contact">Contact Us</span></a></li>
                        </ul>
                        <div class="uk-margin-top">
                           <a href="" download class="uk-hav-btn uk-hav-btn-primary "><span class="uk-margin-small-right"><i class=" fa-solid fa-arrow-down-long"></i></span> E-Brochure</a>
                        </div>
                     </div>
                     <div class="uk-width-1-2 uk-visible@m">
                        <div class="uk-menu-image" id="about"> <img src="assets/images/about/01.jpg" alt=""> </div>
                        <div class="uk-menu-image" id="rooms"> <img src="assets/images/room/01.jpg" alt=""> </div>
                        <div class="uk-menu-image" id="restaurant"> <img src="assets/images/restaurant/01.jpg" alt=""> </div>
                        <div class="uk-menu-image" id="packages"> <img src="assets/images/packages/01.jpg" alt=""> </div>
                        <div class="uk-menu-image" id="meeting"> <img src="assets/images/restaurant/03.jpg" alt=""> </div>
                        <div class="uk-menu-image" id="ClientsReviews"> <img src="assets/images/restaurant/02.jpg" alt=""> </div>
                        <div class="uk-menu-image" id="SurroundingFacilities"> <img src="assets/images/facilities/02.jpg" alt=""> </div>
                        <div class="uk-menu-image" id="gallery"> <img src="assets/images/facilities/01.jpg" alt=""> </div>
                        <div class="uk-menu-image" id="contact"> <img src="assets/images/bg/02.jpg" alt=""> </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>