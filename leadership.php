
<?php include "header.php"; ?>
<?php include "inc/config.php"; ?>
<?php require_once 'inc/Leader.php';?>



<!-- About Us Page -->
<!--Page Title-->
<section class="page-title" style="background-image:url(images/banner-leadership.jpg);">
        <div class="auto-container">
      
        </div>
    </section>
    <!--End Page Title-->

    <section class="speakers-section-two">
        <div class="anim-icons">
            <span class="icon icon-circle-4 wow zoomIn"></span>
            <span class="icon icon-circle-3 wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title"></span>
                <h2>Our Leadership Team</h2>
            </div>

            <div class="row">
                <?php
                    foreach ($leaders as $leader) {
                        $leaderObj = new Leader($leader['name'], $leader['designation'], $leader['image'],  $leader['bio'], $leader['email']);
                        echo $leaderObj->generateHtml();
                    }
                ?>
            </div>

            <div class="row">

<p>
We are also advised by Advisory Boards from CEOs of Private Equity, Venture Capital, Investment Banking, and Industrial Industries. Our Marketing Team Includes Sports Casters, Aerospace Engineers, Cosmetic Logistics and Branding and Sales.</p>

            </div>
        </div>
    </section>
    <!-- End Speakers Section -->
    <section class="call-to-action" style="background-image: url(images/background/12.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">The Power of Synergy</div>
                <h2>Collaborative effort to create greater value.</h2>
                <div class="btn-box">
                    <a href="contacts.php" class="theme-btn btn-style-one"><span class="btn-title">Contact Us</span></a>
                </div>
            </div>
        </div>
    </section>

         <!-- Event Detail -->
         <section class="event-detail">
        <div class="auto-container">
           

            <div class="content-box">
                
            <h2>SIC in the works:</h2> 
<p>We educate the investors in the market/businesses/industry trends and investments. There are many new asset classes and however, some while correlation may differ from traditional assets, there are other risk factors to consider. Our consultants consists of experts that have over 20 years of experience in their respective fields and have gone through many market cycles. </p>

<h2>Current projects:</h2> 
<p>Digital marketing/Brand ambassador consulting and negotiations with retailers. SIC is currently consulting to an international cosmetic company expanding their business in the Americas launching their brand with FDA guidelines, usage of various ingredients and designing their products. </p>

<p>SIC is currently looking for deal sourcing for our international fund with strong track record since inception. We are searching for an infrastructure sourcing. They have already funded in building infrastructure in Europe, US and emerging market countries.  </p>

<p>Assist in sales of a smaller pharmaceutical company sell their services to the bigger pharmas. Biotech and tech are one of our stronger areas. Testing and going through the trials could be expensive but also rewarding in monetary and moral aspects. One firm figured out how to get more accurate results species that only grow in their country. </p>

<p>Institutional investment consultants generally use asset allocation strategy, peer group performance (mostly looking at 3 to 5 year) track-records and fees to evaluate managers. However, over the last 2 decades, equity market has changed. Many pension, endowment, and foundations are no longer the usual 60/40 asset allocation. There are many new and interesting funds in the market that don't belong in your traditional asset class. Many endowment funds have allocated beyond these asset classes so it has become more difficult to classify them in a box. Consultants now have to take a deeper qualitative research and see if it makes sense to invest in such asset classes. We help our clients understand, how these relatively new alternative funds work and investing risks and reward profiles are.</p>

<p>Most consultants have already attended more than thousands of meetings with corporates, attended multiple conferences, meetings with management. Additionally, as for fund investing, some of us have met and experienced, how various funds invest in their portfolio. As a client, through our research portal you get access to real experiences of meeting not only the corporate management but also the fund managers and their strategy. </p>

<p>SIC not only help fund raising process but also help start-ups generate strategy and sound structure.</p>

<p>For larger clients, we move our consultant team assigned to the project, utilizing the shared-office space so they are available at all times.</p>

<h3>Companies where consultants have previously connected with.</h3>
            </div>
        </div>
    </section>
    <!--End Event Detail -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                 <h4 class="modal-name"></h4>
                 <h5 class="modal-designation" style="margin-bottom: 24px;"></h5>
                 <p class="modal-email"><a href=""></a></p>
                 <p class="modal-bio"> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>