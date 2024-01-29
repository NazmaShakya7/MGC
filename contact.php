<?php include('assets/include/header.php') ?>
<!-- /* --------------------------------- Banner --------------------------------- */ -->
<section class="uk-inner-banner uk-position-relative uk-flex uk-flex-center uk-flex-middle" >
    <div class="uk-container  uk-width-3-4@m" uk-scrollspy="target:.uk-white-title; cls: uk-animation-slide-top-medium;   delay: 50; repeat: true;">
        <div class="uk-white-title">
            <h1 class="uk-banner-inner-title text-white uk-text-center uk-margin-remove-top">Contact Us</h1>
            <h4 class="uk-text-center uk-margin-remove">Home / Contact</h4>
        </div>
    </div>
    <div class="texture">
        <img src="assets/img/texture.png" alt="">
    </div>
</section>
<section class="uk-section">
    <div class="uk-container uk-margin-large-top ">
        <div class="uk-grid uk-child-width-1-3@m " uk-scrollspy="target:div,h3,p; cls: uk-animation-slide-top-medium;   delay: 50; repeat: true;">
            <div class="contact-grid uk-padding-remove">
                <div class="uk-primary contact-box ">
                    <i class="fa-solid fa-phone" aria-hidden="true"></i>
                </div>
                <h3 class="uk-margin-remove-bottom">CONTACT US</h3>
                <p class="uk-margin-remove">+9858565556, +98665966</p>
                <p class="uk-margin-remove">MGCcatering@gmail.com</p>
            </div>
            <div class="contact-grid uk-padding-remove border-left">
                <div class="uk-primary contact-box ">
                    <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                </div>
                <h3 class="uk-margin-remove-bottom">ADDRESS HERE</h3>
                <p class="uk-margin-remove">4517 Washington Ave. Manchester,</p>
                <p class="uk-margin-remove">Kentucky 39495, USA</p>
            </div>
            <div class="contact-grid uk-padding-remove border-left">
                <div class="uk-primary contact-box ">
                    <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                </div>
                <h3 class="uk-margin-remove-bottom">OPEN TIME</h3>
                <p class="uk-margin-remove">Mon - Fri : 9.00am - 22.00pm</p>
                <p class="uk-margin-remove">Saturday : 11.00 - 23.00 Sunday : close</p>
            </div>
        </div>
        
    </div>
    
    <div class="uk-container uk-margin-large-top">
        <hr>
        <div class="uk-child-width-1-2@m uk-margin-large-top"  uk-grid uk-height-match=".form-height" uk-scrollspy=" cls: uk-animation-slide-top-medium;   delay: 50; repeat: true;">
            <div class=" form-height">
                <div style="">
                    <h3 >Booking For Reservation</h3>
                    <form action="" method="POST" class="uk-grid-small uk-grid" uk-grid="">
                    
                        <div class="uk-width-1-2@s">
                            <input class="uk-input" name="fullname" type="text" placeholder="Full Name">
                        </div>
                        <div class="uk-width-1-2@s uk-first-column uk-grid-margin">
                            <input class="uk-input" name="email" type="email" placeholder="Email">
                        </div>
                        <div class="uk-width-1-2@s uk-grid-margin">
                            <input class="uk-input" name="number" type="text" placeholder="Number of Guests">
                        </div>
                        <div class="uk-width-1-2@s uk-grid-margin">
                            <input class="uk-input" name="email" type="date" placeholder="What's the Date">
                        </div>
                        <div class="uk-width-1-1 uk-grid-margin ">
                            <select  name="What Services Do You Think You'll Need"> 
                                <option selected="" disabled="" hidden="" value="">What Services Do You Think You'll Need</option> 
                                <option>Bartenders</option> 
                                <option>Wait Staff</option> 
                                <option>Just Food</option> 
                                <option>Heck.  I need Everything!</option> 
                                <option>Looking for An Estimate</option> 
                                </select>
                        </div>
                        <div class="uk-width-1-1 uk-grid-margin">
                            <select name="dmform-13"> <option selected="" disabled="" hidden="" value="">Where is the party at?</option> 
                                <option >Venue</option> 
                                <option >Private Residence</option> 
                                <option >Company/Business</option> 
                                <option >Other Location</option> 
                            </select>
                        </div>
                        <div class="uk-width-1-1 uk-grid-margin uk-first-column">
                            <textarea name="review" class="uk-textarea" rows="4" placeholder="Give me some details"></textarea>
                        </div>
                        <div class="uk-width-1-1 uk-margin-large-top">
                        <a href="" class="uk-btn uk-primary ">Send it</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class=""> 
                <iframe class="position-relative rounded  form-height" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6502595.146296284!2d-119.306607!3d37.2691675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2snp!4v1706243846162!5m2!1sen!2snp" frameborder="0" style="min-height: 400px; border:0; width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>
<?php include('assets/include/footer.php') ?>