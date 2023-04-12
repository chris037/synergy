<?php include "header.php"; ?>

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/banner-2.jpg);">
        <div class="auto-container">
          
        </div>

    </section>
    <section>
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <h2 class="home-quote wow fadeIn">"Synergy is what happens when one plus one equals ten or a hundred or even a thousand!"  -Steven Convey</h2>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section -->
    <section class="about-section">
        <!-- <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div> -->
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 mb0">
                    <div class="inner-column p0">
                        <div class="sec-title">
                            <h2>Welcome to Synergy Investment and Business Consultants</h2>
                            <div class="text"><i>While most consulting firms conduct industry research and give advisory services, our team delivers solutions that can assist businesses and provide answers. We listen to management and proactively work together as a team.</i></div>
                        </div>
                    </div>
                </div>
                
                <div class="content-column col-lg-6 col-md-12 col-sm-12 mb0">
                    <div id="video-section">
                        <video id="my-video" style="width: 100%" src="videos/video-1.mp4" autoplay></video>
                    </div>

                </div>
            </div>
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12 mb0">
                    <div class="inner-columnx">
                        <div class="sec-title">
                            <div class="text">We have a diverse group of consultants and advisors from top marketing/PR firms, investment banks, hedge funds, private equity, venture capital, consumer retail, entertainment, entrepreneurial start-ups and biotech. Together we have extensive industry knowledge and not only have experience in due diligence but also have invested in the companies ourselves. We have given large to mid-size corporations advice for over 30 years. That said, we understand that every company is different and with that mindset we solve problems and give solutions tailored to each situation.</div>

                           <div class="text">We also have direct access to upper level management of multinational companies. Though this network, we are able to connect industry experts directly with our clients. And combined with our in-depth understanding of the competitive environment, we believe we can provide extreme value-added services to solve issues in today’s world.</div>    

                            <div class="text">It is this unique combination of industry knowledge, upper management access, and actual investment experience which separates us from even the top consulting firms. In this competitive environment aligning yourself with the right partner could be the difference in success.</div>

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
                <span class="icon icon-line-1 wow fadeIn animated" style="visibility: visible; animation-name: fa-spin;"></span>
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
                            array("real-estate.png", "Real Estate Property"),
                            array("b2bb2c.png", "B2B / B2C Consulting"),
                            array("funds.png", "Fund Raising / Creative Sourcing Deals")
                        );

                        // Loop through the array and generate the HTML code for each column
                        foreach ($columns as $column) {
                            $icon = $column[0];
                            $title = $column[1];
                            echo '<div class="counter-column col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">';
                            echo '<div class="count-box counted">';
                            echo '<span class="icon"><img src="images/icons/'.$icon.'"/></span>';
                            echo '<h4 class="counter-title">'.$title.'</h4>';
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
                <div class="feature-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <img src="images/transnational/5.jpg" alt="Hands-on Consulting"/>
                    <div class="inner-box">

                        <h4><a href="#">Hands-on Consulting</a></h4>
                        <div class="text">Active support in strategy, operations, or management with a complex approach. We roll-up our sleeves with our clients and dig deep, and kick the tires if you will to improve profitability, market share, and/or top-line growth. </div>
                        <!-- <div class="link-box"><a href="#" class="theme-btn">Read More</a></div> -->
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                    <img src="images/transnational/2.jpg" alt="E-Commerce and Digital Consulting"/>
                    <div class="inner-box">

                        <h4><a href="#">E-Commerce and Digital Consulting</a></h4>
                        <div class="text">In the digital world, e-commerce/digitalization have made conducting businesses faster, information more accessible and reach wider audience. While there are initial learning curves, we help navigate through these challenges so that our clients can improve communication across nations, clients and vendors.     </div>
                        <!-- <div class="link-box"><a href="#" class="theme-btn">Read More</a></div> -->
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
                    <img src="images/transnational/3.jpg" alt="Business Growth and Management"/>
                    <div class="inner-box">

                        <h4><a href="#">Business Growth and Management</a></h4>
                        <div class="text">We help management expand and operate companies effectively for long-term success. Many of us have been studying most sectors for years and understand what strategy works and does not in various market cycles and geographic regions. Our sector specialists have rated and invest in some of the most efficient companies in the world.  </div>
                        <!-- <div class="link-box"><a href="#" class="theme-btn">Read More</a></div> -->
                    </div>
                </div>
                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
                    <img src="images/transnational/4.jpg" alt="B2B / B2C Connections" />
                    <div class="inner-box">

                        <h4><a href="#">B2B / B2C Connections</a></h4>
                        <div class="text">Facilitating transactions and negotiations between businesses whether is partnering or to retail consumers. e-commerce and digitalization have made it easier to do business across the world if you adapt to the changes. </div>
                        <!-- <div class="link-box"><a href="#" class="theme-btn">Read More</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


   

    <section class="features-section">
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
                        <h4><a href="#">Business Industry</a></h4>
                        <div class="text">Everyone of our consultants are industry experts either in marketing & ads, investment research, investment banking, private equity, consumers, and food & beverage. We take upmost priority in what our clients want and establish. </div>
                        <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <!-- <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div> -->
                        <h4><a href="#">Deep Dive Research</a></h4>
                        <div class="text">Deep dive research entails our consultants to not only conduct industry and company research, but we also try to understand the management and the people that support the founder and the CEOs. Most of us have not only held more than tens of thousands of meetings combined with corporate management but have deep relationships with C-level to junior level employees. We compare this with other companies that are thriving in that same industry. </div>
                        <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <!-- <div class="icon-box"><span class="icon flaticon-success"></span></div> -->
                        <h4><a href="#">Expert Network Connections</a></h4>
                        <div class="text">In this digital world, we have network of friends, analysts, specialists’ business owners that we connect with to learn what’s going around across the globe and the new trends that’s shaping our economy.  </div>
                        <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                    </div>
                </div>

                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <!-- <div class="icon-box"><span class="icon flaticon-search"></span></div> -->
                        <h4><a href="#">Marketing and Ads Campaign</a></h4>
                        <div class="text">Every client is different in what their objectives are. Our marketing & ads campaigns we use the digital technology available to us but also combine that with traditional way of building real relationship with our clients to get to know them better to build a foundation and a strong relationship. Most importantly, we listen to our clients and strategize on what fits their needs the best.  </div>
                        <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <!-- <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div> -->
                        <h4><a href="#"> Evaluation of Alternative Investment</a></h4>
                        <div class="text">Investing world has changed dramatically after the Global Financial Crisis. Evaluating of Alternative i Investment (Private equity, venture capital, and hedge funds) is a lot different than it was even five years ago. Evaluating these new alternative asset classes, have not only gotten more difficult but more difficult to understand. Despite this investment consultants continue to utilize traditional way of evaluation. We review not only the risk and reward profile but also active approach in evaluating managers.  We are not afraid to ask difficult questions because of our deep understanding of the financial industry. </div>
                        <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated" data-wow-delay="800ms" style="visibility: visible; animation-delay: 800ms; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <!-- <div class="icon-box"><span class="icon flaticon-success"></span></div> -->
                        <h4><a href="#"> Alternative Investment</a></h4>
                        <div class="text">There are as much if not more funds than listed stocks in the US (this includes mutual funds). Alternative investment managers are some of the brightest managers in the world. Our investment consultants have not only co-worked with investment managers but have conducted due diligence together. We understand the process like no others and with some other managers, we have kept close relationship understanding the fund process and philosophy.</div>
                        <div class="link-box"><a href="#" class="theme-btn">Read More</a></div>
                    </div>
                </div>
            </div>

            

        </div>
    </section>

    <section class="map-section">
        <div class="auto-container">
        <div class="row">
                <img src="images/map.svg" alt="Synergy Map Locations"/>
            </div>
            </div>
    </section>


    


    <?php include "footer.php" ?>
   
