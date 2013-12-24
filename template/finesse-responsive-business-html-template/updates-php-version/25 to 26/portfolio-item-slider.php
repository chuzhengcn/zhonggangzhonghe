<!DOCTYPE HTML>
<!--[if IE 8]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!-- begin meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8, IE=9, IE=10">
	<meta name="description" content="Finesse is a responsive business and portfolio theme carefully handcrafted using the latest technologies. It features a clean design, as well as extended functionality that will come in very handy.">
	<meta name="keywords" content="Finesse, responsive business portfolio theme, HTML5, CSS3, clean design">
	<meta name="author" content="Ixtendo">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end meta -->
	
	<!-- begin CSS -->
	<link href="style.css" type="text/css" rel="stylesheet">
	<!--[if IE]> <link href="css/ie.css" type="text/css" rel="stylesheet"> <![endif]-->
	<link href="css/colors/orange.css" type="text/css" rel="stylesheet">
    <!-- end CSS -->
	
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon">
	
	<!-- begin JS -->
    <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script> <!-- jQuery -->
    <script src="js/ie.js" type="text/javascript"></script> <!-- IE detection -->
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
	<script src="js/modernizr.custom.js" type="text/javascript"></script> <!-- Modernizr -->
    <!--[if IE 8]><script src="js/respond.min.js" type="text/javascript"></script><![endif]--> <!-- Respond -->
	<!-- begin language switcher -->
	<script src="js/jquery.polyglot.language.switcher.js" type="text/javascript"></script> 
    <!-- end language switcher -->
    <script src="js/ddlevelsmenu.js" type="text/javascript"></script> <!-- drop-down menu -->
    <script type="text/javascript"> <!-- drop-down menu -->
        ddlevelsmenu.setup("nav", "topbar");
    </script>
    <script src="js/tinynav.min.js" type="text/javascript"></script> <!-- tiny nav -->
    <script src="js/jquery.jcarousel.min.js" type="text/javascript"></script> <!-- carousel -->
    <script src="js/jquery.ui.totop.min.js" type="text/javascript"></script> <!-- scroll to top -->
    <script src="js/jquery.fancybox.pack.js" type="text/javascript"></script> <!-- lightbox -->
    <script src="js/jquery.cycle.all.js" type="text/javascript"></script> <!-- entry slider -->
    <script src="js/jquery.fitvids.js" type="text/javascript"></script> <!-- responsive video embeds -->
	<script src="js/jquery.tweet.js" type="text/javascript"></script> <!-- Twitter widget -->
	<script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script> <!-- touchSwipe -->
    <script src="js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
    <!-- end JS -->
    
	<title>Finesse - Portfolio Item &ndash; Slider</title>
</head>

<body>
<!-- begin container -->
<div id="wrap">
    <?php include('includes/header.php'); ?>
        
	<!-- begin content -->
    <section id="content" class="container clearfix">
        <!-- begin page header -->
        <header id="page-header">
            <h1 id="page-title">Portfolio Item &ndash; Slider</h1>
        </header>
        <!-- end page header -->

        <!-- begin main content -->

        <!-- begin project -->
        <section>
            <!-- begin project media -->
            <div class="three-fourths">
                <div class="entry-slider">
                    <ul>
                        <li><a class="fancybox" data-fancybox-group="gallery-living-brown" href="images/entries/full-size/living-brown.jpg" title="Image Title"><span class="overlay zoom"></span><img src="images/entries/700x500/living-brown-700x500.png" alt=""></a></li>
                        <li style="display: none;"><a class="fancybox" data-fancybox-group="gallery-living-brown" href="images/entries/full-size/dining-and-living-cream.jpg" title="Image Title"><span class="overlay zoom"></span><img src="images/entries/700x500/dining-and-living-cream-700x500.png" alt=""></a></li>
                        <li style="display: none;"><a class="fancybox" data-fancybox-group="gallery-living-brown" href="images/entries/full-size/living-white.jpg" title="Image Title"><span class="overlay zoom"></span><img src="images/entries/700x500/living-white-700x500.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <!-- end project media -->

            <!-- begin project description -->
            <div class="one-fourth column-last">
                <h3>Overview</h3>
                <p>Proin ut volutpat elit. Suspendisse ullamcorper vulputate placerat. Nam tincidunt urna nec dui bibendum varius. Nullam odio lectus, tempor eleifend aliquam at, fermentum a magna. Donec in lectus ac ante dignissim elementum vel ut nibh.</p>

                <h3>Customer</h3>
                <p>&mdash; SmartBiz</p>

                <h3>Year</h3>
                <p>&mdash; 2012</p>

                <h3>Technology</h3>
                <ul class="check">
                    <li>User Interface Design</li>
                    <li>HTML/CSS/JavaScript</li>
                    <li>PHP/MySQL</li>
                </ul>
                <a href="#" class="button">Visit Website</a>
            </div>
            <!-- end project description -->
            <div class="clear"></div>
        </section>
        <!-- end project -->

        <!-- begin related projects -->
        <section>
            <h2>Related Projects</h2>
            <!-- begin project carousel -->
            <ul class="project-carousel">
                <li class="entry">
                    <div class="entry-image">
                        <a class="fancybox" data-fancybox-group="gallery-living-large-windows" href="images/entries/full-size/living-large-windows.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/living-large-windows-220x130.png" alt=""></a>
                        <a class="fancybox invisible" data-fancybox-group="gallery-living-large-windows" href="images/entries/full-size/living-brown.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/living-brown-220x130.png" alt=""></a>
                        <a class="fancybox invisible" data-fancybox-group="gallery-living-large-windows" href="images/entries/full-size/dining-and-living-cream.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-and-living-cream-220x130.png" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.php">Living with Large Windows</a></h4>
                    <div class="entry-content">
                        <p>Gallery project with lightbox.</p>
                    </div>
                </li>
                <li class="entry">
                    <div class="entry-image">
                        <a class="fancybox" href="images/entries/full-size/living-white.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/living-white-220x130.png" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.php">White Living Room</a></h4>
                    <div class="entry-content">
                        <p>Image project with lightbox.</p>
                    </div>
                </li>
                <li class="entry">
                    <div class="entry-slider">
                        <ul>
                            <li><a class="fancybox" data-fancybox-group="gallery-dining-white2" href="images/entries/full-size/dining-white2.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-white2-220x130.png" alt=""></a></li>
                            <li style="display: none;"><a class="fancybox" data-fancybox-group="gallery-dining-white2" href="images/entries/full-size/dining-brown.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-brown-220x130.png" alt=""></a></li>
                            <li style="display: none;"><a class="fancybox" data-fancybox-group="gallery-dining-white2" href="images/entries/full-size/dining-white.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-white-220x130.png" alt=""></a></li>
                        </ul>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-slider.php">White Dining Room 2</a></h4>
                    <div class="entry-content">
                        <p>Gallery project with slider and lightbox.</p>
                    </div>
                </li>
                <li class="entry">
                    <div class="entry-image">
                        <a class="fancybox" data-fancybox-group="gallery-study" href="images/entries/full-size/study.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/study-220x130.png" alt=""></a>
                        <a class="fancybox invisible" data-fancybox-group="gallery-study" href="images/entries/full-size/dining-white2.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-white2-220x130.png" alt=""></a>
                        <a class="fancybox invisible" data-fancybox-group="gallery-study" href="images/entries/full-size/dining-brown.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-brown-220x130.png" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.php">Study</a></h4>
                    <div class="entry-content">
                        <p>Gallery project with lightbox.</p>
                    </div>
                </li>
                <li class="entry">
                    <div class="entry-image">
                        <a class="fancybox" href="images/entries/full-size/dining-white.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-white-220x130.png" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.php">White Dining Room</a></h4>
                    <div class="entry-content">
                        <p>Image project with lightbox.</p>
                    </div>
                </li>
            </ul>
            <!-- end project carousel -->
        </section>
        <!-- end related projects -->

        <!-- end main content -->
    </section>
    <!-- end content -->

    <?php include('includes/footer.php'); ?>
</div>
<!-- end container -->

</body>
</html>