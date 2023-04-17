<?php include "header.php"; ?>

<!-- About Us Page -->
<!--Page Title-->
    <section class="page-title" style="background-image:url(images/banner-3.jpg);">
            <div class="auto-container">
                <div class="contact-banner-small"><img src="images/contact-banner-small.jpg"/></div>
            </div>
        </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="contact-column col-lg-4 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Contact Info</h2>
                        </div>
                        <ul class="contact-info">
                            <li>
                                <span class="icon fa fa-map-marker-alt"></span>
                                <p><strong> 600 W Commonwealth Ave, Suite 146</strong></p>
                                <p>Los Angeles CA, 92832</p>
                                
                            </li>

                            <li>
                                <span class="icon fa fa-phone-volume"></span>
                                <p><strong>Call Us</strong></p>
                                <p>LA: +1 310 469 4299</p>
                                <p>NY: +1 212 518 1456</p>
                               
                            </li>

                            <li>
                                <span class="icon fa fa-envelope"></span>
                                <p><strong>Mail Us</strong></p>
                                <p><a href="mailto:info@synergyinvllc.com">info@synergyinvllc.com</a></p>
                            </li>

                            
                        </ul>
                        <div class="map-outer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.773598021077!2d-117.94021443203894!3d33.869725172716954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2a0e351c0ab7%3A0xffa70bc26f164f7d!2s600%20W%20Commonwealth%20Ave%20%23146%2C%20Fullerton%2C%20CA%2092832%2C%20USA!5e0!3m2!1sen!2sph!4v1680057190507!5m2!1sen!2sph" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
                        
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="contact-form">
                            <div class="sec-title">
                                <h2 style="margin-bottom: 32px;">Get in Touch</h2>
                                <br/>
                               <p>While we appreciate the benefits of technology, we acknowledge that human interaction is often the key to meeting our clients' business needs. It not only saves time, but also provides valuable insights, rather than simply pressing buttons and waiting on hold for extended periods. Our consultants are readily accessible through mobile phones, text, and email, ensuring effective communication and prompt assistance.</p>
                            </div>
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->

    <!-- Map Section -->
    <section class="map-section hidden">
        <div class="auto-container">
            <div class="map-outer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.773598021077!2d-117.94021443203894!3d33.869725172716954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2a0e351c0ab7%3A0xffa70bc26f164f7d!2s600%20W%20Commonwealth%20Ave%20%23146%2C%20Fullerton%2C%20CA%2092832%2C%20USA!5e0!3m2!1sen!2sph!4v1680057190507!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- End Map Section -->

<?php include "footer.php"; ?>