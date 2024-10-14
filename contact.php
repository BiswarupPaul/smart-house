<?php
ob_start();
include('includes/header.php');
include("includes/conn.php");
?>
    
    <!-- <section class="p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.9605626233733!2d88.39352321496173!3d22.692511985121218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89d2e4892e04f%3A0xb7aa61112f23077c!2s42%2C%20Central%20Rd%2C%20Anandalok%2C%20H%20B%20Town%2C%20Sodepur%2C%20Kolkata%2C%20West%20Bengal%20700110!5e0!3m2!1sen!2sin!4v1682747670640!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section> -->
    
    <section class="contact">
        <div class="container mt-5">
            <div class="row">
            <div class="col-md-10 offset-md-1">
            <div class="contact_inner">
            <div class="row">
            <div class="col-md-10">
            <div class="contact_form_inner">
            <div class="contact_field">
            <div class="section-title text-center wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
            <h1 class="text-warning">Contact Us</h1>
            <p>Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
            </div>
            <div role="form" class="wpcf7" id="wpcf7-f386-o1" lang="en-US" dir="ltr">
            <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
            <form action="/contact/#wpcf7-f386-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
            <div style="display: none;">
            <input type="hidden" name="_wpcf7" value="386">
            <input type="hidden" name="_wpcf7_version" value="5.5.6.1">
            <input type="hidden" name="_wpcf7_locale" value="en_US">
            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f386-o1">
            <input type="hidden" name="_wpcf7_container_post" value="0">
            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
            <input type="hidden" name="_wpcf7_recaptcha_response" value="">
            </div>
            <div class="group form-group">
            <span class="wpcf7-form-control-wrap cont_name"><input type="text" name="cont_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="name" aria-required="true" aria-invalid="false" placeholder="Enter Name *"></span>
            </div>
            <div class="group form-group">
            <span class="wpcf7-form-control-wrap cont_email"><input type="email" name="cont_email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email form-control" id="email" aria-invalid="false" placeholder="Enter Email"></span>
            </div>
            <div class="group form-group">
            <span class="wpcf7-form-control-wrap cont_ph"><input type="tel" name="cont_ph" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" id="phone" aria-required="true" aria-invalid="false" placeholder="Enter Phone Number *" maxlength="10"></span>
            </div>
            <div class="text-group mb-3">
            <span class="wpcf7-form-control-wrap cont_msg"><textarea name="cont_msg" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Submit your query here *"></textarea></span>
            </div>
            <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 text-group mb-3">
            <span class="wpcf7-form-control-wrap recaptcha" data-name="recaptcha"><span data-sitekey="6Lcj3JUUAAAAABbu_moCrb-N9uYCe8ET7BSvEnm3" class="wpcf7-form-control g-recaptcha wpcf7-recaptcha"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lcj3JUUAAAAABbu_moCrb-N9uYCe8ET7BSvEnm3&amp;co=aHR0cHM6Ly93d3cubWZhZ2VudC5pbjo0NDM.&amp;hl=en&amp;v=4q6CtudrwcI-LSEYlfoEbDXg&amp;size=normal&amp;cb=gce6nqvdbydv" width="304" height="78" role="presentation" name="a-s5fle3va7k3v" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" data-origwidth="304" data-origheight="78" style="width: 304px; height: 78px;"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none; width: 321px;" data-origwidth="" data-origheight=""></iframe></span>
            <noscript>
                <div class="grecaptcha-noscript">
                    <iframe src="https://www.google.com/recaptcha/api/fallback?k=6Lcj3JUUAAAAABbu_moCrb-N9uYCe8ET7BSvEnm3" frameborder="0" scrolling="no" width="310" height="430">
                    </iframe>
                    <textarea name="g-recaptcha-response" rows="3" cols="40" placeholder="reCaptcha Response Here">
                    </textarea>
                </div>
            </noscript>
            </span>
            </div>
            <div class="col-12 col-md-6 text-md-end text-center">
            <input type="submit" value="Send Message" class="wpcf7-form-control has-spinner wpcf7-submit custom-btn btn-primary"><span class="wpcf7-spinner"></span>
            </div>
            </div>
            <div class="wpcf7-response-output" aria-hidden="true"></div></form></div>
            </div>
            </div>
            </div>
            <div class="col-md-2 text-center">
            <div class="right_conatct_social_icon">
            <div class="rounded-social-buttons socil_item_inner">
            <a href="#" class="social-button" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
            <a href="#" class="social-button" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href="#" class="social-button" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            </div>
            </div>
            </div>
            </div>
            <div class="contact_info_sec">
            <h4>Contact Info</h4>
            <div class="d-flex info_single">
            <i class="fa-solid fa-location-dot"></i>
            <span>1No. DB Nagar Road Sodepur <br> Kolkata, 7000111
            </span>
            </div>
            <div class="d-flex info_single">
            <i class="fas fa-headset"></i>
            <span><a href="tel:+919432778332" class="text-light text-decoration-none">+91 1234123412</a></span>
            </div>
            <div class="d-flex info_single">
            <i class="fas fa-envelope-open-text"></i>
            <span><a href="mailto:info@mfagent.in" class="text-light text-decoration-none">info@abc.com</a></span>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
    </section>

    <footer class="mt-5">
        <div class="container-fluid final p-5">
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 container p-0 text-center m-auto boundary">
                <div class="col p-2 boundary">
                    <a href="#">
                        <img src="img/facebook.png" alt="" height="60px">
                    </a>
                    <h4 class="text-light mt-3">Facebook</h4>
                </div>
                <div class="col p-2 boundary">
                    <a href="#">
                        <img src="img/insta.png" alt="" height="60px">
                    </a>
                    <h4 class="text-light mt-3">Instagram</h4>
                </div>
                <div class="col p-2 boundary">
                    <a href="#">
                        <img src="img/yout.png" alt="" height="60px">
                    </a>
                    <h4 class="text-light mt-3">Youtube</h4>
                </div>
                <div class="col p-2 boundary">
                    <a href="#">
                        <img src="img/linkdin.png" alt="" height="60px">
                    </a>
                    <h4 class="text-light mt-3">Linkedin</h4>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 boundary border-light">
                    <h3>SREE VENTURE</h3>
                    <h4 class="text-light">1No. D B Nagar Road</h4>
                    <h5 class="text-light">Kolkata, 700111</h5>
                </div>
            </div>
            <ul class="boundary border-light">
                <li>
                    <a href="#">Terms & Use</a>
                </li>
                <li>
                    <a href="#">Privacy Policy</a>
                </li>
                <li>
                    <a href="#">Disclaimer</a>
                </li>
            </ul>
            <div class="container text-center">
                <p class="text-light">Copyright ©
                    <script>document.write(new Date().getFullYear())</script> SreeVentures. All Rights Reserved. Website
                    Development &amp; Digital Partner – <a href="https://www.busfam.com/" target="_blank"
                        rel="noopener">BUSFAM</a>
                </p>
            </div>
            <div class="textline mt-5"></div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
        // $(document).ready(function () {
        //     //alert();
        //     $(window).scroll(function () {
        //         //alert();
        //         if ($(window).scrollTop() <= 40) {
        //             //alert();
        //             $(".navbar").removeClass("scroll_navbar");
        //         }
        //         else {
        //             $(".navbar").addClass("scroll_navbar");
        //         }
        //     });
        // });
    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "45%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>


<?php include('includes/footer.php'); ?>