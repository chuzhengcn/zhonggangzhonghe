<!DOCTYPE HTML>
<!--[if IE 8]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<?php include_once (dirname(__FILE__) . '/settings.php'); ?>
<head>
	<!-- begin meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8, IE=9, IE=10">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end meta -->
	
	<!-- begin CSS -->
	<link href="style.css" type="text/css" rel="stylesheet" id="main-style">
	<link href="css/responsive.css" type="text/css" rel="stylesheet">
	<!--[if IE]> <link href="css/ie.css" type="text/css" rel="stylesheet"> <![endif]-->
	<link href="color-style.php" type="text/css" rel="stylesheet" id="color-style">
    <!-- end CSS -->
    
    <link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon">
	
	<!-- begin JS -->
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> <!-- jQuery -->
    <script src="js/ie.js" type="text/javascript"></script> <!-- IE detection -->
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
	<script src="js/modernizr.custom.js" type="text/javascript"></script> <!-- Modernizr -->
    <!--[if IE 8]>
    <script src="js/respond.min.js" type="text/javascript"></script> 
    <script src="js/selectivizr-min.js" type="text/javascript"></script> 
    <![endif]--> 
    <script src="js/ddlevelsmenu.js" type="text/javascript"></script>
    <script type="text/javascript">
        ddlevelsmenu.setup("nav", "topbar");
    </script>
    <script src="js/tinynav.min.js" type="text/javascript"></script> <!-- tiny nav -->
    <script src="js/jquery.validate.min.js" type="text/javascript"></script> <!-- form validation -->
    <script src="js/jquery.flexslider-min.js" type="text/javascript"></script> <!-- slider -->
    <script src="js/jquery.jcarousel.min.js" type="text/javascript"></script> <!-- carousel -->
    <script src="js/jquery.ui.totop.min.js" type="text/javascript"></script> <!-- scroll to top -->
    <script src="js/jquery.fitvids.js" type="text/javascript"></script> <!-- responsive video embeds -->
    <script src="js/jquery.tweet.js" type="text/javascript"></script> <!-- Twitter widget -->
    <script src="js/jquery.tipsy.js" type="text/javascript"></script> <!-- tooltips -->
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script> <!-- swipe gestures -->
    <script src="js/jquery.fancybox.pack.js" type="text/javascript"></script> <!-- lightbox -->
    <script src="js/jquery.fancybox-media.js" type="text/javascript"></script> <!-- lightbox -->
    <script src="js/froogaloop.min.js" type="text/javascript"></script> <!-- video manipulation -->
    <script src="js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
    <!-- end JS -->
	
	<title>Inceptio - Portfolio Item - Slider</title>
</head>

<body class="<?php echo WEBSITE_LAYOUT; ?>">
<!-- begin container -->
<div id="wrap">
	<!-- begin header -->
    <?php include('includes/header.php'); ?>
    <!-- end header -->
	
    <!-- begin page title -->
    <section id="page-title">
    	<div class="container clearfix">
            <h1 class="one-half">Portfolio Item &ndash; Slider</h1>
            <nav id="breadcrumbs" class="one-half column-last">
                <ul>
                    <li><a href="index.php">Home</a> &rsaquo;</li>
                    <li><a href="portfolio.php">Portfolio</a> &rsaquo;</li>
                    <li>Portfolio Item &ndash; Slider</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content">
    	<div class="container clearfix">
    	<!-- begin pagination -->
        <nav class="page-nav prev-next">
            <ul>
                <li><a href="#">&lsaquo; Previous</a></li>
                <li><a href="#">Next &rsaquo;</a></li>
            </ul>
        </nav>
        <!-- end pagination -->
        
        <!-- begin project -->
        <section>
            <!-- begin project media -->
            <div class="three-fourths">
            	<!-- begin entry slider -->
                <div class="entry-slider">
                    <div id="flexslider-portfolio-item" class="flex-container">
                        <div class="flexslider">
                            <ul class="slides">
                                <li><a class="lightbox" data-fancybox-group="spring" href="images/entries/full-size/spring.jpg" title="Image Title"><span class="overlay zoom"></span><img src="images/entries/700x445/spring-700x445.png" alt=""></a></li>
                    			<li><a class="lightbox" data-fancybox-group="spring" href="images/entries/full-size/sailing.jpg" title="Image Title"><span class="overlay zoom"></span><img src="images/entries/700x445/sailing-700x445.png" alt=""></a></li>
                    			<li><a class="lightbox" data-fancybox-group="spring" href="images/entries/full-size/sunrise.jpg" title="Image Title"><span class="overlay zoom"></span><img src="images/entries/700x445/sunrise-700x445.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>	
                <!-- end entry slider -->
            </div>
            <!-- end project media -->
            
            <!-- begin project content -->
            <div class="one-fourth column-last">
                <!-- begin project description -->
                <div class="project-description">
                    <h2>Project Description</h2>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                </div>
                <!-- begin project description -->
                
                <!-- begin project details -->
                <div class="project-details">
                    <h2>Project Details</h2>
                        
                    <h4>Customer</h4>
                    <p>&mdash; SmartBiz</p>
                    
                    <h4>Year</h4>
                    <p>&mdash; 2013</p>
                    
                    <h4>Technology</h4>
                    <ul class="check">
                        <li>User Interface Design</li>
                        <li>HTML/CSS</li>
                        <li>Programming</li>
                    </ul>
                        
                    <a href="#" class="button">Visit Website</a>
                </div>
                <!-- end project details -->
            </div>
            <!-- end project content -->
            <div class="clear"></div>
        </section>
        <!-- end project -->
        
        <!-- begin related projects -->
        <section>
            <h2>Related Projects</h2> 
            <!-- begin project carousel -->
            <ul class="project-carousel project-list">
                <li class="entry">
                    <a class="entry-image lightbox" href="images/entries/full-size/canoes-on-moraine-lake.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/canoes-on-moraine-lake-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-image.php">
                        <h4 class="entry-title">Canoes on Moraine Lake</h4>
                        <div class="entry-content">
                            <p>Image with lightbox</p>
                        </div>
                        <div class="arrow-box-hover"></div>
                    </a>
                </li>
                
                <li class="entry">
                    <a class="entry-image lightbox" href="images/entries/full-size/sailing.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/sailing-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-image.php">
                        <h4 class="entry-title">Sailing</h4>
                        <div class="entry-content">
                            <p>Image with lightbox</p>
                        </div>
                        <div class="arrow-box-hover"></div>
                    </a>
                </li>
                
                <li class="entry">
                    <a class="entry-image lightbox" data-fancybox-group="sunrise" href="images/entries/full-size/sunrise.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/sunrise-220x140.png" alt=""></a>
                    <a class="entry-image lightbox invisible" data-fancybox-group="sunrise" href="images/entries/full-size/southern-alps.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/southern-alps-220x140.png" alt=""></a>
                    <a class="entry-image lightbox invisible" data-fancybox-group="sunrise" href="images/entries/full-size/canoes-on-moraine-lake.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/canoes-on-moraine-lake-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-slider.php">
                        <h4 class="entry-title">Sunrise</h4>
                        <div class="entry-content">
                            <p>Lightbox gallery</p>
                        </div>
                        <div class="arrow-box-hover"></div>
                    </a>
                </li>
                
                <li class="entry">
                    <a class="entry-image lightbox" href="images/entries/full-size/southern-alps.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/southern-alps-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-image.php">
                        <h4 class="entry-title">Southern Alps</h4>
                        <div class="entry-content">
                            <p>Image with lightbox</p>
                        </div>
                        <div class="arrow-box-hover"></div>
                    </a>
                </li>
                
                <li class="entry">
                    <a class="entry-image lightbox-video" href="http://player.vimeo.com/video/58413545?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/the-golden-sea-bali-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-video.php">
                        <h4 class="entry-title">The Golden Sea &ndash; Bali</h4>
                        <div class="entry-content">
                            <p>Video with lightbox (Vimeo)</p>
                        </div>
                        <div class="arrow-box-hover"></div>
                    </a>
                </li>
                
                <li class="entry">
                    <a class="entry-image lightbox-video" href="http://www.youtube.com/embed/KM-4KCWJ1YY?rel=0" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/grand-canyon-aerials-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-video.php">
                        <h4 class="entry-title">Grand Canyon Aerials</h4>
                        <div class="entry-content">
                            <p>Video with lightbox (YouTube)</p>
                        </div>
                        <div class="arrow-box-hover"></div>
                    </a>
                </li>
            </ul>
            <!-- end project carousel -->
        </section>
        <!-- end related projects -->
        
    </div>    
    </section>
    <!-- end content -->  <!-- begin footer -->
	<?php include('includes/footer.php'); ?>
	<!-- end footer -->  
</div>
<!-- end container -->
</body>
</html>