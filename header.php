<?php
    function generate_title() {
        $page = basename($_SERVER['PHP_SELF'], ".php");
        $company_name = "Synergy Investments LLC";
        $titles = [
            "about" => "About Us",
            "mission" => "Mission",
            "contacts" => "Contact Us",
            "knowledge-center" => "Knowledge Center",
            "leadership" => "Leadership",
            "blog" => "Blog",
            "privacy-policy" => "Privacy Policy"
        ];
        $title = isset($titles[$page]) ? $titles[$page] . " | " . $company_name : $company_name;
        echo "<title>$title</title>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php generate_title(); ?>
    <meta name="description" content="Synergy LLC Investments provides hands-on consultancy services to help businesses achieve their goals. Our team works closely with clients, conducts deep research, and offers effective execution solutions.">
    <meta name="keywords" content="business consultancy, hands-on consultancy, industry research, advisory services, management solutions, strategic planning, business growth, performance improvement, market analysis, competitive intelligence, financial analysis, operations management, project management, change management, organizational development, leadership development, team building, talent management">

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/elegent-icon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link href="css/responsive.css" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>
    <!-- <h1 class="main-header">Business Consultancy Services | Synergy LLC Investments </h1> -->
    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->
        <!-- Header span -->

        <!-- Header Span -->
        <span class="header-span"></span>

        <!-- Main Header-->
        <header class="main-header header-style-two">
            <div class="main-box">
                <div class="auto-container clearfix">
                    <div class="logo-box">
                        <div class="logo">
                            <a href="index.php"><img src="images/logo-2.png" alt="" title=""></a>
                        </div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                            </div>

                            <?php
                                 $current_page = basename($_SERVER['PHP_SELF']);
                            ?>
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="<?php if ($current_page == 'index.php') echo 'current'; ?>"><a href="index.php">Home</a></li>
                                    <li class="<?php if ($current_page == 'about.php') echo 'current'; ?>"><a href="about.php">About</a></li>
                                    <li class="<?php if ($current_page == 'mission.php') echo 'current'; ?>"><a href="mission.php">Mission</a></li>
                                    <li class="dropdown <?php if ($current_page == 'knowledge-center.php') echo 'current'; ?>"><a href="knowledge-center.php">Knowledge Center</a>
                                        <ul>
                                            <li><a href="#">Client Portal</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?php if ($current_page == 'leadership.php') echo 'current'; ?>"><a href="leadership.php">Leadership</a></li>
                                    <li class="<?php if ($current_page == 'blog.php') echo 'current'; ?>"><a href="blog.php">Blog</a></li>
                                   
                                    <li class="<?php if ($current_page == 'contacts.php') echo 'current'; ?>"><a href="contacts.php">Contacts</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->


                    </div>
                </div>
            </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="nav-logo">
                <a href="index.html"><img src="images/logo-2.png" alt="" title=""></a>
            </div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
        </nav>
    </div>
    <!-- End Mobile Menu -->

    </header>
    <!--End Main Header -->