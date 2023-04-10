<!-- Main Footer -->
<footer class="main-footer">
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-xl-9 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="" /></a>
                                </div>
                                <div class="text">
                                    <p>We help clients growth thru hands-on consulting services, deep down industry research and effective marketing and ad campaign from start to finish.</p>
                                </div>
                                <ul class="social-icon-one social-icon-colored">
                                    <li><a target="_blank" href="https://www.facebook.com/synergyinvllc/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="_blank" href="https://linkedin.com/in/synergyinvestmentconsultants"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/synergyinvllc"><i class="fab fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/synergyinvestmentconsultants/"><i class="fab fa-instagram"></i></a></li>

                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-4 col-lg-4 col-md-4 col-sm-12">

                            <!-- Loop through category A -->
                            <div class="footer-widget useful-links">
                                <h2 class="widget-title">Business</h2>
                                <ul class="user-links">
                                    <li>Technology</li>
                                    <li>Medical Devices &amp; Diagnostics</li>
                                    <li>Pharmaceuticals &amp; Biotechnology</li>
                                    <li>Industrials</li>
                                    <li>Consumer Goods</li>
                                    <li>Payments &amp; Insurance</li>
                                    <li> Food &amp; Beverage</>
                                    <li>E-commerce</li>
                                </ul>
                            </div>



                        </div>

                        <div class="footer-column col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <!-- Loop through category B -->
                            <div class="footer-widget useful-links">
                                <h2 class="widget-title">Finance</h2>
                                <ul class="user-links">
                                    <li>Hedge Funds</li>
                                    <li>Private Equity</li>
                                    <li>Investment Managers &amp; Mutual Funds</li>
                                    <li>Investment Banks &amp; Research</li>
                                </ul>
                            </div>

                            <!-- Loop through category C -->
                            <div class="footer-widget useful-links">
                                <h2 class="widget-title">Professional Services</h2>
                                <ul class="user-links">
                                    <li>Consulting Firms</li>
                                    <li>Advertising &amp; PR</li>
                                    <li>Real Estate Consulting</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-xl-3 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                            <!--Footer Column-->
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">Contact Us</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    <ul class="contact-list">

                                        <li>
                                            <span class="icon flaticon-phone"></span>
                                            <div class="text"><a href="tel:+1-310-430-6503">LA: +1 310 430 6503</a></div>
                                            <div class="text"><a href="tel:+1-310-430-6503">NY: +1 212 518 1456</a></div>
                                          
                               
                                        </li>

                                        <li>
                                            <span class="icon flaticon-paper-plane"></span>
                                            <div class="text"><a href="mailto:sinfo@synergyinvllc.com">info@synergyinvllc.com</a></div>
                                        </li>

                                        <li>
                                            <span class="icon flaticon-worldwide"></span>
                                            <div class="text">
                                            600 W Commonwealth Ave, Suite 146 <br/>
                                            Fullerton CA, 92832</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="copyright-text">
                    <p>&copy; <?php echo date("Y"); ?> Synergy Investment Consultants | <a href="privacy-policy.php" target="_blank">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {

            var video = $('#my-video')[0]; // Get the DOM element of the video
            video.play();



        });
        $('.speaker-block-two a').click(function(event) {
            event.preventDefault(); // prevent the default behavior
            // do something else here
        });
        $('.speaker-block-two').click(function() {
            // Get the name, designation, and bio of the clicked speaker block
            var name = $(this).find('.name a').text();
            var designation = $(this).find('.designation').text();
            var bio = $(this).find('.bio').text();
            var email = $(this).data('email');
            
            // Set the title, designation, and bio of the modal
            $('#myModal .modal-name').text(name);
            $('#myModal .modal-email').text(email);
            $('#myModal .modal-designation').text(designation);
            $('#myModal .modal-email a').attr('href', 'mailto:' + email).text(email);
            $('#myModal .modal-bio').text(bio);
            
            // Set the top position of the modal and show it
            var top = $(window).scrollTop() + ($(window).height() / 2) - ($('#myModal').height() / 2);
            //$('#myModal').css('top', top + 'px').modal('show');
            $('#myModal').modal('show');
        });

        // hide the modal when the close button is clicked
        $('#myModal .close').click(function() {
            $('#myModal').modal('hide');
        });


    });
</script>
</body>

</html>