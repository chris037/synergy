<?php include "header.php"; ?>


<!--End Banner Section -->

<section class="page-title section-main">
    <div class="auto-container">
        <h1 class="home-quote wow fadeIn">"Synergy is what happens when one plus one equals ten or a hundred or even a thousand!" - Steven Covey</h1>
        <div class="content-box">
            <h2>Welcome to Synergy Consulting Group (SCG)</h2>
            <div class="text desktop-only">Our services include consulting in many sectors by industry, company, and start-up specialty. Many great ideas stop at initial stages due to lack of execution, education, or knowledge. Some businesses with expertise do not have the capability to grow because of inadequate workforce. We at SCG have met with thousands of companies and have advised them and have invested in them. We have skin in the game.</div>
        </div>
    </div>

</section>
<section class="mobile-only section-main-mobile" style="background: #000;">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-12 col-md-12 col-sm-12">
                <div class="text">Our services include consulting in many sectors by industry, company, and start-up specialty. Many great ideas stop at initial stages due to lack of execution, education, or knowledge. Some businesses with expertise do not have the capability to grow because of inadequate workforce. We at SCG have met with thousands of companies and have advised them and have invested in them. We have skin in the game.</div>
            </div>

        </div>
    </div>
</section>
<!-- <section>
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-12 col-md-12 col-sm-12">
                
            </div>
        </div>
    </div>
</section> -->
<!--End Page Title-->

<!-- About Section -->
<section class="about-section p0">
    <!-- <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div> -->
    <div class="auto-container">
        <div class="row hidden">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12 mb0">
                <div class="inner-column p0">
                    <div class="sec-title">
                        <h2>Welcome to Synergy Investment and Business Consultants</h2>
                        <div class="text"><i>Our services include consulting in many sectors by industry, company, and start-up specialist. Many great ideas stop at initial stages due to lack of execution, education, or knowledge of how to run a businesses. Other businesses with expertise do not have the capability to grow because less workforce. We at SCG have met with more than a thousand companies each and gave advices. We even invested in them. We simply had skin in the game. That's way better than a 500 page report that's expired as the world economy has changed already and moved on</i></div>
                    </div>
                </div>
            </div>

            <div class="content-column col-lg-6 col-md-12 col-sm-12 mb0">
                <div id="video-section">
                    <video id="my-video" style="width: 100%" src="videos/video-1.mp4" autoplay></video>
                </div>

            </div>
        </div>
        <div class="row ">
            <!-- Content Column -->
            <div class="content-column col-lg-12 col-md-12 col-sm-12 mb0">
                <div class="inner-columnx">
                    <div class="sec-title">
                        <div class="text"><strong>Key Difference is Our People:</strong> Synergy Consulting Group (SCG) is not your average management consulting firm. Our consultants are composed of top-performing buyside portfolio managers, sell-side analysts, private investors, Chief Medical Officers, successful business owners, and high-end brand marketing experts with real-world experience. We have invested our own assets in the companies we advise. That’s skin in the game. We are not afraid to give our clients objective advice.</div>

                        <div class="text"><strong>Synergy of Talents:</strong> We help founders and leaders execute their ideas, turnaround businesses in niche markets, advise management to navigate through tough economic cycles, expand into various geographic markets, develop new business segments, and provide services for fund-raising to further expand their businesses. In this fast-changing business environment, it is necessary that your firm not only follows the trends but leads them.</div>

                        <div class="text"><strong>What’s to Come:</strong> We are implementing live videos and podcasts with experts in their fields, so our clients will have better access. In addition, we will have a Twitch channel on our site. Our blogs will be a proactive connection between consultants providing advice to our clients, but the key will be our Knowledge Center portal, which will be available to our clients.</div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
</section>
<!--End About Section -->
<section class="features-section">
    <div class="auto-container">
        <div class="anim-icons">
            <span class="icon icon-shape-3 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;"></span>
            <span class="icon icon-line-1 wow fadeIn animated desktop-only" style="visibility: visible; animation-name: fa-spin;"></span>
        </div>

        <div class="sec-title text-center">
            <h2>Global Consulting Services
            </h2>
        </div>
    </div>
</section>
<section class="fun-fact-section style-two" style="background-image: url(images/background/9.jpg);">
    <div class="auto-container">
        <div class="fact-counter">
            <div class="row clearfix">
                <?php
                // Define an array of columns with their corresponding icons and titles
                $columns = array(
                    array("dna.png", "Synergy Biotech"),
                    array("invest.png", "Synergy Alternative Investments Evaluation"),
                    array("digital.png", "Digital and Brand Ambassador"),
                    array("consumer.png", "Consumer / E-commerce"),
                    array("food.png", "Restaurant / Food and Beverage"),
                    array("industrials.png", "Industrials and Infrastructure"),
                    array("real-estate.png", "Real Estate and Property"),
                    array("b2bb2c.png", "B2B / B2C Consulting"),
                    array("funds.png", "Fund Raising / Creative Sourcing Deals")
                );

                // Loop through the array and generate the HTML code for each column
                foreach ($columns as $column) {
                    $icon = $column[0];
                    $title = $column[1];
                    echo '<div class="counter-column col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">';
                    echo '<div class="count-box counted">';
                    echo '<span class="icon"><img src="images/icons/' . $icon . '"/></span>';
                    echo '<h4 class="counter-title">' . $title . '</h4>';
                    echo '</div></div>';
                }
                ?>

            </div>
        </div>
    </div>
</section>
<section class="features-section">
    <div class="auto-container">

        <div class="row">
            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <img src="images/transnational/5.jpg" alt="Hands-on Consulting" />
                <div class="inner-box">

                    <h4><a href="#">Hands-on Consulting</a></h4>
                    <div class="text">We actively support strategy, operations, and management with a complex approach. We roll up our sleeves with our clients and dig deep. We "kick the tires" to improve profitability, market share, and top-line growth.</div>
                    <!-- <div class="link-box"><a href="#" class="theme-btn">Read More</a></div> -->
                </div>
            </div>
            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
                <img src="images/transnational/3.jpg" alt="Business Growth and Management" />
                <div class="inner-box">

                    <h4><a href="#">Business Growth and Management</a></h4>
                    <div class="text">We help management expand and operate companies effectively for long-term success. We have been studying these sectors for years and understand which strategies work for various market cycles and geographic regions. Our sector specialists have rated and invested in some of the most efficient companies in the world.</div>
                    <!-- <div class="link-box"><a href="#" class="theme-btn">Read More</a></div> -->
                </div>
            </div>

            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
                <img src="images/transnational/8.jpg" alt="Brand Marketing" />
                <div class="inner-box">

                    <h4><a href="#">Fund Raising</a></h4>
                    <div class="text">There are more funds than listed stocks in the US (this includes mutual funds). Our alternative investment managers are some of the brightest in the world. Our investment consultants have not only co-worked with investment managers but have conducted their due diligence together. We deeply understand this process and keep close relationships with the managers, the funds, and the philosophy.</div>
                    <!-- <div class="link-box"><a href="#" class="theme-btn">Read More</a></div> -->
                </div>
            </div>
            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                <img src="images/transnational/7.jpg" alt="E-Commerce and Digital Consulting" />
                <div class="inner-box">
                    <h4><a href="#">E-Commerce and Digital Consulting</a></h4>
                    <div class="text">In the digital world, e-commerce has made conducting business faster, more accessible, and reached a wider audience. Through the initial learning curve, we help clients navigate challenges so they can improve delivery across regions, partners, and vendors. </div>
                    <!-- <div class="link-box"><a href="#" class="theme-btn">Read More</a></div> -->
                </div>
            </div>


            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
                <img src="images/transnational/4.jpg" alt="B2B / B2C Connections" />
                <div class="inner-box">

                    <h4><a href="#">B2B / B2C Connections</a></h4>
                    <div class="text">We help facilitate transactions and negotiations between businesses, whether by partnering or direct to retail consumers. E-commerce has made it easier to do business across the world, if you adapt to the changes.</div>
                    <!-- <div class="link-box"><a href="#" class="theme-btn">Read More</a></div> -->
                </div>
            </div>

            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
                <img src="images/transnational/6.jpg" alt="Brand Marketing" />
                <div class="inner-box">

                    <h4><a href="#">Brand Marketing</a></h4>
                    <div class="text">High-end marketing is a specialized approach that focuses on promoting luxury or premium brands to affluent or discerning customers. Deep understanding of the luxury market, strategic thinking, creativity, and the ability to develop tailored marketing strategies that align with the unique characteristics of high-end brands and their target audience is our speciality. The ultimate goal of high-end marketing is to generate business growth in the competitive luxury market.</div>
                    <!-- <div class="link-box"><a href="#" class="theme-btn">Read More</a></div> -->
                </div>
            </div>


        </div>
    </div>



    </div>
</section>




<section class="features-section section-whatwedo" style="background-image: url(images/banner-whatwedo.jpg); background-size: contain;">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>What We Do
            </h2>
        </div>

        <div class="row">
            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <!-- <div class="icon-box"><span class="icon flaticon-search"></span></div> -->
                    <h4><a href="#">Business Industry Consultant</a></h4>
                    <div class="text">Every one of our consultants are industry experts in Biotech, Marketing, Investment Strategy, Banking, Private Equity, Food & Beverage, Manufacturing, Infrastructure, Real Estate, and Sourcing. We take upmost pride in what our clients want to establish.</div>
                    <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block feature-block-border col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <!-- <div class="icon-box"><span class="icon flaticon-search"></span></div> -->
                    <h4><a href="#">Real Estate and New World Infrastructure</a></h4>
                    <div class="text">Real estate is usually one of the most valuable assets a household buys. People must take various factors into account, not just simple mortgage rates and home prices. Infrastructure is usually a government project to make the city modernized. As a fund that invests into infrastructure, you get a steady return that is a relatively safe asset. We are making roads into the future so that it is comfortable and sustainable. To make these tough choices, SCG provides advice so that you will have a better world tomorrow.</div>
                    <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                </div>
            </div>



            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
                <div class="inner-box">
                    <!-- <div class="icon-box"><span class="icon flaticon-success"></span></div> -->
                    <h4><a href="#">Expert Network Connections</a></h4>
                    <div class="text">In this digital world, we have networks of specialty consultants, analysts, and business owners that track and remain ahead of the trends that shape our global economy.</div>
                    <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                </div>
            </div>

            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="inner-box">
                    <!-- <div class="icon-box"><span class="icon flaticon-search"></span></div> -->
                    <h4><a href="#">Brand Marketing & Ads</a></h4>
                    <div class="text">Every client is different in their culture and needs. Our marketing & ad campaigns use all the technology available to build a strong foundation to grow and compete. We combine client understanding with market awareness to provide the optimum strategy for sustained growth.</div>
                    <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                <div class="inner-box">
                    <!-- <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div> -->
                    <h4><a href="#"> Evaluation of Alternative Investments</a></h4>
                    <div class="text">The Investing landscape has changed dramatically. Evaluating Alternative Investment Strategies is a lot different than it was even a few years ago. New and alternative asset classes have gotten more functional and essential. Our investment consultants provide a way forward in this new environment. We review risk and reward, but also proactively strategize to keep our clients in the best and most current model. </div>
                    <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="hidden feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
                <div class="inner-box">
                    <!-- <div class="icon-box"><span class="icon flaticon-success"></span></div> -->
                    <h4><a href="#">Fund-Raising Support</a></h4>
                    <div class="text">There are as much if not more funds than listed stocks in the US (this includes mutual funds). Alternative investment managers are some of the brightest managers in the world. Our investment consultants have not only co-worked with investment managers but have conducted due diligence together. We understand the process like no others and with some other managers, we have kept close relationship understanding the fund process and philosophy.</div>
                    <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                <div class="inner-box">
                    <!-- <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div> -->
                    <h4><a href="#">Deep Dive Research</a></h4>
                    <div class="text">Deep dive research from our consultants not only provides industry research, but we also thoroughly understand the vision and philosophy of our clients. Our consultants strive to maintain deep relationships with our clients and other companies in the industry. </div>
                    <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="map-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Our Global Network of Consultants
            </h2>
        </div>
        <div class="row">


            <img src="images/map.svg" alt="Synergy Map Locations" />
        </div>
    </div>
</section>





<?php include "footer.php" ?>