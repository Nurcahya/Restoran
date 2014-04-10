	<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CleanBIZ - Services vertical</title>
        <meta name="description" content="Creative Multipurpose HTML5 Theme">
        <meta name="author" content="pixel-industry">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width">


        <!-- stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />  
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/blue.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/pixons/style.css" />  
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nivo-slider.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/service-icons/style.css" />

       <!--[if (gte IE 9)]>
            <link rel="stylesheet" href="css/ie.css" media="screen" />
        <![endif]-->
        
        <!--[if IE 8]>
            <link rel="stylesheet" href="css/ie8.css" media="screen" />
        <![endif]-->

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>

    <body class="patt1">

        <!-- #page-wrap start -->
        <div id="page-wrap">

            <!-- header start -->
            <header id="header" class="clearfix">

                <!-- logo start -->
                <section id="logo">
                    <a href="index.html">
                        <img src="<?php echo base_url();?>assets/img/logo.png" alt="logo"/>
                    </a>
                </section><!-- #logo end -->

                <!-- #nav-ontainer start -->
                <section id="nav-container">

                    <!-- main navigation start  -->
                    <nav id="nav">
                        <ul>
                            <li class="home">
                                <a href="index.html">Home</a>
							</li>
							<li>
                                <a href="<?php echo site_url(); ?>">Lihat Halaman Frontend</a>
								</li>
							<li>
                                <a href="<?php echo site_url(); ?>admin/login/logout">Log out</a>
								</li>
								<li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul> 
                    </nav><!-- main navigation end -->

                    <!-- responsive navigation start -->
                    <select id="nav-responsive">
                        <option selected="" value="">Site Navigation...</option>

                        <option value="index.html">Home</option>

                        <option value="about.html">About us</option>
                        <option value="services.html">Services</option>
                        <option value="services-simple.html">Services simple</option>
                        <option value="services-vertical.html">Services vertical tabs</option>
                        <option value="404.html">404 Page</option>

                        <option value="portfolio3.html">Portfolio 3 col</option>
                        <option value="portfolio4.html">Portfolio 4 col</option>
                        <option value="portfolio-single.html">Portfolio single</option>

                        <option value="blog.html">Blog</option>
                        <option value="blog2.html">Blog alternative</option>
                        <option value="blog-single.html">Blog single</option>

                        <option value="elements.html">Elements</option>
                        <option value="media.html">Social media</option>

                        <option value="contact.html">Contact page</option>
                    </select> <!-- responsive navigation end -->

                    <!-- search start -->
                    <section id="search">
                        <form action="#" method="get">
                            <input class="search-submit" type="submit" />
                            <input id="s" class="search-bkg" name="s" type="text" placeholder="Type and hit enter..." />
                        </form>
                    </section><!-- search end -->
                </section><!-- nav container end -->
            </header>