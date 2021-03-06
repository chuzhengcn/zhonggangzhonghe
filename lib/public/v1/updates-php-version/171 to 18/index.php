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
    
    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen">
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/rs-custom.css" media="screen">
    
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
    <script src="js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> <!-- tabs, toggles, accordion -->
    <script src="js/jquery.flexslider-min.js" type="text/javascript"></script> <!-- slider -->
    <script src="js/jquery.jcarousel.min.js" type="text/javascript"></script> <!-- carousel -->
    <script src="js/jquery.ui.totop.min.js" type="text/javascript"></script> <!-- scroll to top -->
    <script src="js/jquery.fitvids.js" type="text/javascript"></script> <!-- responsive video embeds -->
    <script src="js/jquery.tweet.js" type="text/javascript"></script> <!-- Twitter widget -->
    <script src="js/jquery.tipsy.js" type="text/javascript"></script> <!-- tooltips -->
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script> <!-- swipe gestures -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> <!-- Revolution Slider -->
    <script src="js/jquery.fancybox.pack.js" type="text/javascript"></script> <!-- lightbox -->
    <script src="js/jquery.fancybox-media.js" type="text/javascript"></script> <!-- lightbox -->
    <script src="js/froogaloop.min.js" type="text/javascript"></script> <!-- video manipulation -->
    <script src="js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
    <!-- end JS -->
	
	<title>Inceptio - Responsive Multi-Purpose Theme</title>
</head>

<body class="<?php echo WEBSITE_LAYOUT; ?>">
<!-- begin container -->
<div id="wrap">
	<!-- begin header -->
    <?php include('includes/header.php'); ?>
    <!-- end header -->
	
    <!-- begin slider -->
    <section id="slider-home">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <ul>
                    <!-- slide 1 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300">
                        <!-- main image -->
                        <img src="images/slider/slides/1920x400/southern-alps-1920x400.png" alt=""> 
                        
                        <!-- captions -->
                        <div class="tp-caption big colored sft"
                             data-x="0"
                             data-y="131"
                             data-speed="1000" 
                             data-start="1000" 
                             data-easing="easeOutBack">
                                A Flexible, Multi-Purpose Theme
                        </div>
                        
                        <div class="tp-caption small black sft"
                             data-x="0"
                             data-y="178"
                             data-speed="1000"
                             data-start="1500"
                             data-easing="easeOutBack">
                                Clean look, handy functionality, easy customization
                        </div>
                        
                        <div class="tp-caption sfb"
                             data-x="0"
                             data-y="236"
                             data-speed="1000"
                             data-start="2000"
                             data-easing="easeOutExpo">
                                <a href="portfolio.php" class="button colored">Learn More</a>
                        </div>
                    </li>
                    
                    <!-- slide 2 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300">
                        <!-- main image -->
                        <img src="images/slider/slides/1920x400/spring-1920x400.png" alt=""> 
                        
                        <!-- captions -->
                        <div class="tp-caption big black sfl"
                             data-x="0"
                             data-y="131"
                             data-speed="1000" 
                             data-start="1000" 
                             data-easing="easeOutBack">
                                Fully Responsive &amp; Touch Enabled
                        </div>
                        
                        <div class="tp-caption small white sfr"
                             data-x="0"
                             data-y="178"
                             data-speed="1000"
                             data-start="1500"
                             data-easing="easeOutBack">
                                Inceptio is ready to use on mobile devices, like tablets and phones.
                        </div>
                        
                        <div class="tp-caption sfb"
                             data-x="0"
                             data-y="236"
                             data-speed="1000"
                             data-start="2000"
                             data-easing="easeOutExpo">
                                <a href="portfolio.php" class="button black">Learn More</a>
                        </div>
                    </li>
                    
                    <!-- slide 3 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300">
                        <!-- main image -->
                        <img src="images/slider/slides/1920x400/sunrise-1920x400.png" alt=""> 
                        
                        <!-- captions -->
                        <div class="tp-caption big colored sfr"
                             data-x="0"
                             data-y="131"
                             data-speed="1000" 
                             data-start="1000" 
                             data-easing="easeOutBack">
                                Play YouTube &amp; Vimeo Video
                        </div>
                        
                        <div class="tp-caption small black sfl"
                             data-x="0"
                             data-y="178"
                             data-speed="1000"
                             data-start="1500"
                             data-easing="easeOutBack">
                                Adding video to the slider is possible, too.
                        </div>
                        
                        <div class="tp-caption sfb"
                             data-x="0"
                             data-y="236"
                             data-speed="1000"
                             data-start="2000"
                             data-easing="easeOutExpo">
                                <a href="portfolio.php" class="button colored">Learn More</a>
                        </div>
                        
                        <div class="tp-caption video sfr"
                             data-x="480"
                             data-y="70"
                             data-speed="1000"
                             data-start="1000"
                             data-easing="easeOutBack">
                                <iframe src="http://player.vimeo.com/video/58413545?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="460" height="259" allowFullScreen></iframe>
                        </div>
                    </li>
                </ul>		
           </div>
       </div>
    </section>
    <!-- end slider -->
           
    <!-- begin content -->
    <section id="content">
    	<!-- begin featured content -->
        <section>
            <div class="content-featured">
                <div class="container">
                    <p>Inceptio is a multi-purpose theme with a clean look, handy functionality and flexible customization possibilities. <a href="portfolio.php">Get Started &rsaquo;</a></p>
                </div>
            </div>
        </section>
        <!-- end featured content -->
    
    	<div class="container clearfix">
        <!-- begin services -->
        <section>
        	<div class="one-fourth">
                <div class="iconbox icon-top">
                    <a href="services.php#digital-art">
                    	<div class="iconbox-icon"><img src="images/icon-boxes/128x128/digital_art_128x128.png" alt="Digital Art"></div>
                        <h2 class="iconbox-title">Digital Art</h2>
                        <p>Pellentesque suscipit, mauris id scelerisque sagittis, nisl massa consectetur quam, vitae ultricies justo leo eu elit vestibulum.</p>
                        <p class="call-to-action"><strong>Save up to $100 instantly</strong></p>
                        <span class="button">Learn More</span>
                    	<div class="arrow-box-hover"></div>
                    </a>
                </div>
           </div>
           
           <div class="one-fourth">     
                <div class="iconbox icon-top">
                    <a href="services.php#vector-art">
                    	<div class="iconbox-icon"><img src="images/icon-boxes/128x128/vector_art_128x128.png" alt="Vector Art"></div>
                        <h2 class="iconbox-title">Vector Art</h2>
                        <p>Aenean lacinia euismod lectus, non viverra augue lobortis at. Praesent scelerisque nibh nec purus molestie sed hendrerit.</p>
                        <p class="call-to-action"><strong>All icon bundle at only $99</strong></p>
                        <span class="button">Learn More</span>
                    	<div class="arrow-box-hover"></div>
                    </a>
                </div>
            </div>
            
           <div class="one-fourth">     
                <div class="iconbox icon-top">
                    <a href="services.php#programming">
                    	<div class="iconbox-icon"><img src="images/icon-boxes/128x128/programming_128x128.png" alt="Programming"></div>
                        <h2 class="iconbox-title">Programming</h2>
                        <p>Integer rutrum vehicula quam nec eleifend. Pellentesque quis pulvinar lorem. Proin pharetra sagittis auctor mauris tristique.</p>
                        <p class="call-to-action"><strong>Check out our special offer</strong></p>
                        <span class="button">Learn More</span>
                    	<div class="arrow-box-hover"></div>
                    </a>
                </div>
            </div>
            
            <div class="one-fourth column-last">     
                <div class="iconbox icon-top">
                    <a href="services.php#photography">
                    	<div class="iconbox-icon"><img src="images/icon-boxes/128x128/photography_128x128.png" alt="Photography"></div>
                        <h2 class="iconbox-title">Photography</h2>
                        <p>Mauris pretium libero sit amet erat fringilla ut molestie sem accumsan. Nunc eu nibh diam, quis commodo diam curabitur.</p>
                        <p class="call-to-action"><strong>Stock photo bundle at only $49</strong></p>
                        <span class="button">Learn More</span>
                    	<div class="arrow-box-hover"></div>
                    </a>
                </div>
            </div>
            
            <div class="clear"></div>
        </section>
        <!-- end services -->
        
        <!-- begin process -->
        <section>
        	<div class="one-fourth">
            	<div class="arrowbox arrowbox-first">
                    <h2 class="arrowbox-title">Planning
                        <span class="arrowbox-title-arrow-front"></span>
                    </h2>
                    <p>Our process begins with a careful planning of each project:</p>
                    <ul class="green-arrow">
                        <li><strong>Requirements analysis</strong></li>
                        <li><strong>Project charter</strong></li>
                        <li><strong>Site map</strong></li>
                    </ul>
                </div>
            </div>
            
            <div class="one-fourth">
            	<div class="arrowbox">
                    <h2 class="arrowbox-title">Design
                        <span class="arrowbox-title-arrow-back"></span>
                        <span class="arrowbox-title-arrow-front"></span>
                    </h2>
                    <p>We move the planning further into reality in the design stage:</p>
                    <ul class="green-arrow">
                        <li><strong>Wireframe planning</strong></li>
                        <li><strong>Mock-ups creation</strong></li>
                        <li><strong>Review and approval cycle</strong></li>
                    </ul>
                </div>
            </div>
            
            <div class="one-fourth">
            	<div class="arrowbox">
                    <h2 class="arrowbox-title">Development
                        <span class="arrowbox-title-arrow-back"></span>
                        <span class="arrowbox-title-arrow-front"></span>
                    </h2>
                    <p>Development is the programming work and the content loading:</p>
                    <ul class="green-arrow">
                        <li><strong>Build development framework</strong></li>
                        <li><strong>Code page templates</strong></li>
                        <li><strong>Fill with content</strong></li>
                    </ul>
                </div>
            </div>
            
            <div class="one-fourth column-last">
            	<div class="arrowbox">
                    <h2 class="arrowbox-title">Quality Control
                        <span class="arrowbox-title-arrow-back"></span>
                        <span class="arrowbox-title-arrow-front"></span>
                    </h2>
                    <p>The website is put through a rigorous post-production process:</p>
                    <ul class="green-arrow">
                        <li><strong>Test planning</strong></li>
                        <li><strong>Browser testing</strong></li>
                        <li><strong>Process improvement</strong></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <!-- end process -->
        
        <!-- begin video -->
        <section class="two-thirds">
        	<h2>Featured Video</h2>
            <div class="one-half">
            	<div class="entry-video">
                	<iframe width="460" height="259" src="http://www.youtube.com/embed/LzTMRjufvqk?rel=0" allowfullscreen></iframe>
                </div>
            </div>
            
            <p>Curabitur risus justo, scelerisque vitae tristique nec, sodales quis orci. Cras sapien enim, adipiscing et varius sed, molestie quis nisl. Donec a blandit nunc. Praesent tincidunt, sapien sed consequat facilisis.</p>
            <ul class="green-check indent">
                <li>Maecenas porttitor accumsan magna.</li>
                <li>Mauris tempus blandit magna.</li>
                <li>Quisque mattis tincidunt fringilla.</li>
            </ul>  
        </section>
        <!-- end video -->
        
        <!-- begin featured projects -->
        <section class="one-third column-last">
        	<h2>Featured Projects</h2>
            <ul class="thumbs clearfix">
            	<li><a href="portfolio-item-image.php" title="Project Title"><img src="images/entries/70x70/canoes-on-moraine-lake-70x70.png" alt=""></a></li>
                <li><a href="portfolio-item-slider.php" title="Project Title"><img src="images/entries/70x70/spring-70x70.png" alt=""></a></li>
                <li><a href="portfolio-item-image.php" title="Project Title"><img src="images/entries/70x70/sailing-70x70.png" alt=""></a></li>
                <li><a href="portfolio-item-slider.php" title="Project Title"><img src="images/entries/70x70/sunrise-70x70.png" alt=""></a></li>
                <li><a href="portfolio-item-image.php" title="Project Title"><img src="images/entries/70x70/southern-alps-70x70.png" alt=""></a></li>
                <li><a href="portfolio-item-video.php" title="Project Title"><img src="images/entries/70x70/the-golden-sea-bali-70x70.png" alt=""></a></li>
            </ul>
        </section>
        <!-- end featured projects -->
        
    	</div>   
    </section>
    <!-- end content -->  
    
    <!-- begin footer -->
	<footer id="footer">
    	<!-- begin footer featured -->
        <div id="footer-featured">
        	<div class="container clearfix">
                <div class="three-fourths">
                    <h1><a href="#" title="Download (ZIP File) Questionnaire"><strong>Convinced</strong>? Get an <strong>estimate</strong>.</a></h1>
                    <p>Our process begins with knowing you and your visitors inside out. Download, complete and return our <a href="#" title="Download (ZIP File) Questionnaire">questionnaire</a>. We will get back to you with a quotation within a week.</p>
                </div>
                <div class="one-fourth column-last">
                    <a class="entry-image" href="#" title="Download (ZIP File) Questionnaire"><img src="images/mail.png" alt="Mail"></a>
                </div>
            </div>
        </div>
        <!-- end footer featured -->	
        
        <!-- begin footer top -->
        <div id="footer-top">
        	<div class="container clearfix">
                <div class="one-fourth">
                    <div class="widget">
                        <h3>Text Widget</h3>
                        <p>Cras pretium elit quis nunc congue ut sollicitudin ante mattis. Nam cursus tellus vel libero pretium ut sagittis felis.</p>
						<p>Etiam laoreet nisl a dolor convallis euismod. Nulla felis velit, elementum ut fringilla ac, tincidunt eu justo.</p>
                    </div>
                </div>
                <div class="one-fourth">
                    <div class="widget twitter-widget">
                        <h3>Latest Tweets</h3>
                        <div class="tweet"></div>
                    </div>
                </div>
                <div class="one-fourth">
                    <div class="widget newsletter">
                        <h3>Newsletter</h3>
                        <p>Subscribe to our email newsletter for useful tips and valuable resources sent out every second Monday.</p>
                        <div id="newsletter-notification-box-success" class="notification-box notification-box-success" style="display: none;">
                            <p>You have successfully subscribed to our newsletter. Look for the confirmation email.</p>
                            <a href="#" class="notification-close notification-close-success">x</a>
                        </div>
        
                        <div id="newsletter-notification-box-error" class="notification-box notification-box-error" style="display: none;">
                            <p>Your email address couldn't be subscribed because a server error occurred. Please try again later.</p>
                            <a href="#" class="notification-close notification-close-error">x</a>
                        </div>
                        <form id="newsletter-form" class="content-form" action="#" method="post">
                            <input id="newsletter" type="email" name="newsletter" placeholder="Enter your email address &hellip;" class="required">
                            <input id="subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="one-fourth column-last">
                    <div class="widget contact-info">
                        <h3>Contact Info</h3>
                        <div>
                            <p class="address"><strong>Address:</strong> 123 Street, City, Country</p>
                            <p class="phone"><strong>Phone:</strong> (123) 456-7890</p>
                            <p class="fax"><strong>Fax:</strong> (123) 456-7890</p>
                            <p class="email"><strong>Email:</strong> <a href="mailto:office@company.com">office@company.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer top -->

        <!-- begin footer bottom -->
        <div id="footer-bottom">
        	<div class="container clearfix">
                <div class="one-half">
                    <p>Copyright &copy; 2013 Inceptio. Created by <a href="http://themeforest.net/user/ixtendo">Ixtendo</a>.</p>
                </div>
        
                <div class="one-half column-last">
                    <ul class="social-links">
                        <li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                        <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                        <li class="google-plus"><a href="#" title="Google+" target="_blank">Google+</a></li>
                        <li class="linkedin"><a href="#" title="LinkedIn" target="_blank">LinkedIn</a></li>
                        <li class="vimeo"><a href="#" title="Vimeo" target="_blank">Vimeo</a></li>
                        <li class="youtube"><a href="#" title="YouTube" target="_blank">YouTube</a></li>
                        <li class="skype"><a href="#" title="Skype" target="_blank">Skype</a></li>
                        <li class="digg"><a href="#" title="Digg" target="_blank">Digg</a></li>
                        <li class="delicious"><a href="#" title="Delicious" target="_blank">Delicious</a></li>
                        <li class="tumbler"><a href="#" title="Tumbler" target="_blank">Tumbler</a></li>
                        <li class="dribbble"><a href="#" title="Dribbble" target="_blank">Dribbble</a></li>
                        <li class="stumbleupon"><a href="#" title="StumbleUpon" target="_blank">StumbleUpon</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end footer bottom -->
	</footer>
	<!-- end footer -->  
</div>
<!-- end container -->
</body>
</html>