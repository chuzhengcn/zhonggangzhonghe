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
        <section class="one-third">
        	<h2>Our Services</h2>
            <a class="entry-image inner-caption link-overlay" href="services.php" title="Our Skills">
            	<span class="overlay"></span>
            	<img src="images/entries/300x180/network-300x180.png" alt="Network">
                <div><p>Work That We Do</p></div>
            </a>
            <ul class="arrow">
            	<li>Website Design &amp; Development</li>
                <li>Branding &amp; Identity</li>
                <li>Interface Design for Web and Desktop Applications</li>
                <li>Graphic Design</li>
            </ul>
            <a href="services.php" class="button">View Our Services</a>
        </section>
        <!-- end services -->
        
        <!-- begin portfolio -->
        <section class="one-third">
        	<h2>Our Portfolio</h2>
        	<a class="entry-image inner-caption link-overlay" href="portfolio.php" title="Our Portfolio">
            	<span class="overlay"></span>
            	<img src="images/entries/300x180/business-development-300x180.png" alt="Business Development">
                <div><p>Work That We Have Done</p></div>
            </a>
            <p>Over the years, we have been working on a wide range of design and development projects and can't seem to get enough of it. We are constantly perfecting our craft, learning new methods and trends.</p>
            <a href="portfolio.php" class="button">View Our Portfolio</a>
        </section>
        <!-- end portfolio -->
        
        <!-- begin contact -->
        <section class="one-third column-last">
        	<h2>Contact Us</h2>
        	<a class="entry-image inner-caption link-overlay" href="contact.php" title="Contact Us">
            	<span class="overlay"></span>
            	<img src="images/entries/300x180/digital-tablet-300x180.png" alt="Digital Tablet">
                <div><p>Get in Touch with Us</p></div>
            </a>
            <p>Interested in working with us? Give it a try! Send us an email or fill out our contact form and we will get back to you with an initial cost estimation. Our quotation is free of charge and there is no commitment involved.</p>
            <a href="contact.php" class="button">Get in Touch</a>
        </section>
        <!-- end contact -->
        <div class="clear"></div>
        
        <!-- begin about -->
        <section class="one-half">
        	<h2>About Us</h2>
            <!-- begin tabs -->
            <div class="tabs">
                <ul class="tabs-nav clearfix">
                    <li><a href="#history">History</a></li>
                    <li><a href="#mission">Mission</a></li>
                    <li><a href="#vision">Vision</a></li>
                    <li><a href="#values">Values</a></li>
                </ul>
                <div id="history" class="tab">
                	<div class="one-half">
                        <div class="caption">
                            <div class="entry-image"><img src="images/entries/full-size/business-woman.jpg" alt="Our Company" title="Our Company"></div>
                            <p class="caption-text">Our Company</p>
                        </div>
                    </div>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos.</p>
                    <ul class="square indent">
                    	<li>Mauris sagittis condimentum elit.</li>
                        <li>Aenean lacinia euismod lectus.</li>
                        <li>Quisque pulvinar ullamcorper ligula.</li>
                    </ul>
                    <p>Sed ante metus, ornare eu vulputate nec, lacinia aliquam elit. Vestibulum congue enim id lorem sodales id faucibus nulla ultricies. Sed eu nisl ut dui accumsan ornare sit amet in magna. Etiam nec erat nec neque molestie rhoncus a ac neque. Curabitur dapibus, tellus.</p>
                </div>
                
                <div id="mission" class="tab">
                    <p>Integer eget orci non metus vehicula luctus ac at nisl. Donec vestibulum convallis urna, non luctus felis auctor iaculis. Fusce at diam vitae augue convallis posuere. Pellentesque vitae nisi in eros faucibus sagittis.</p>
                    <ol class="decimal indent">
                    	<li>Nullam pharetra sapien quis ante auctor volutpat.</li>
                        <li>Mauris enim dolor, lobortis non tristique sit amet, posuere et ante.</li>
                        <li>Sed mollis tincidunt nunc, nec scelerisque lorem fermentum sed.</li>
                    </ol>
                    <p>Donec lobortis egestas dapibus. Mauris in tellus sit amet est blandit cursus ac sed sapien. Aliquam erat volutpat. Nunc imperdiet volutpat ultricies. Ut consequat magna vel mi convallis sed rutrum libero imperdiet. Suspendisse potenti. In non tortor purus, iaculis euismod odio. Nullam vitae molestie lacus.</p>
                </div>
                <div id="vision" class="tab">
                    <p>Praesent non ipsum eu turpis euismod adipiscing egestas a nisl. Cras cursus euismod ante ut porta. Aliquam molestie condimentum metus, ut bibendum felis consectetur a. Curabitur faucibus, arcu eget lacinia sagittis, libero felis adipiscing enim, eget tristique lacus enim ac sapien.</p>
                    <ul class="arrow indent">
                    	<li>Ut tempus velit eu felis consectetur sed pharetra odio eleifend.</li>
                        <li>Curabitur felis mauris, dapibus vel lacinia ut, sollicitudin sed odio.</li>
                        <li>Aliquam ligula diam, consequat eget gravida quis, vehicula eget.</li>
                    </ul>
                    <p>Proin vitae lorem hendrerit est iaculis lobortis. In ipsum diam, euismod id euismod ut, pharetra quis leo. Morbi auctor vestibulum lacus, id fringilla tortor luctus in. Praesent a nulla tortor.</p>
                </div>
                <div id="values" class="tab">
                    <p>Fusce eu lacus nulla, a varius nulla. Nunc ultrices scelerisque odio quis posuere. Sed pharetra congue commodo.</p>
                    <ul class="check indent">
                    	<li><strong>Excellence</strong> &mdash; Pellentesque condimentum magna eros, quis blandit.</li>
                        <li><strong>Customer Focus</strong> &mdash; Vestibulum iaculis posuere quam, a fermentum.</li>
                        <li><strong>Integrity</strong> &mdash; Suspendisse ligula neque, facilisis sit amet cursus luctus.</li>
                    </ul>
                    <p>Integer ornare leo et metus posuere at convallis ante imperdiet. Aenean vitae diam lacus, ac gravida enim. Praesent aliquet molestie sem in condimentum. Praesent sodales sapien quis justo elementum rhoncus. Phasellus at tellus vitae justo vehicula scelerisque. Pellentesque odio ante, pellentesque lobortis feugiat accumsan, ultricies et libero.</p>
                </div>
            </div>
            <!-- end tabs -->
        </section>
        <!-- end about -->
        
        <!-- begin latest posts -->
        <section class="one-half column-last">
            <h2>Recent News</h2>
            <!-- begin post carousel -->
            <ul class="post-carousel">
                <!-- begin first column -->
                <li>
                    <div class="entry">
                        <div class="entry-date">
                            <div class="entry-day">15</div>
                            <div class="entry-month">Jan</div>   
                        </div>
                        <div class="entry-body">
                            <h4 class="entry-title"><a href="blog-post-image.php">Responsive Web Design Techniques, Tools and Design Strategies</a></h4>
                            <div class="entry-meta"><a href="#">4 Comments</a></div>
                            <div class="entry-content">
                                <p>Aliquam quis libero dapibus ante rhoncus eleifend quis vitae erat. Quisque vel nisi nibh. Suspendisse ipsum lorem integer nec interdum massa. Sed ornare rutrum sem, vitae imperdiet risus ullamcorper &hellip;</p>
                                <a href="blog-post-image.php">Learn More &rsaquo;</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="entry">
                        <div class="entry-date">
                            <div class="entry-day">10</div>
                            <div class="entry-month">Dec</div>   
                        </div>
                        <div class="entry-body">
                            <h4 class="entry-title"><a href="blog-post-slider.php">Designing For Device Orientation: From Portrait To Landscape</a></h4>
                            <div class="entry-meta"><a href="#">4 Comments</a></div>
                            <div class="entry-content">
                                <p>Phasellus varius, felis ac ullamcorper aliquet, justo nunc laoreet turpis, eget pharetra nulla arcu sed purus curabitur hendrerit bibendum erat, id sollicitudin arcu adipiscing eget. Nullam in nibh &hellip;</p>
                                <a href="blog-post-slider.php">Learn More &rsaquo;</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- end first column -->
                
                <!-- begin second column -->
                <li>
                	<div class="entry">
                        <div class="entry-date">
                            <div class="entry-day">27</div>
                            <div class="entry-month">Nov</div>   
                        </div>
                        <div class="entry-body">
                            <h4 class="entry-title"><a href="blog-post-video.php">Useful Talks and Videos from Web Design Conferences</a></h4>
                            <div class="entry-meta"><a href="#">4 Comments</a></div>
                            <div class="entry-content">
                                <p>Aliquam quis libero dapibus ante rhoncus eleifend quis vitae erat. Quisque vel nisi nibh. Suspendisse ipsum lorem integer nec interdum massa. Sed ornare rutrum sem, vitae imperdiet risus ullamcorper &hellip;</p>
                                <a href="blog-post-video.php">Learn More &rsaquo;</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="entry">
                        <div class="entry-date">
                            <div class="entry-day">4</div>
                            <div class="entry-month">Oct</div>   
                        </div>
                        <div class="entry-body">
                            <h4 class="entry-title"><a href="blog-post-no-media.php">The Creative Way to Maximize Design Ideas with Type</a></h4>
                            <div class="entry-meta"><a href="#">4 Comments</a></div>
                            <div class="entry-content">
                                <p>Phasellus varius, felis ac ullamcorper aliquet, justo nunc laoreet turpis, eget pharetra nulla arcu sed purus curabitur hendrerit bibendum erat, id sollicitudin arcu adipiscing eget. Nullam in nibh &hellip;</p>
                                <a href="blog-post-no-media.php">Learn More &rsaquo;</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- end second column -->
            </ul>
            <!-- end post carousel -->
        </section>
        <!-- end latest posts -->
        
        <div class="clear"></div>
        
        <!-- begin clients -->
        <section>
        	<h2>Our Clients</h2>
            <ul class="clients clearfix">
                <li><a href="#"><img src="images/client-logos/themeforest.png" alt="ThemeForest" title="ThemeForest"></a></li>
                <li><a href="#"><img src="images/client-logos/photodune.png" alt="PhotoDune" title="PhotoDune"></a></li>
                <li><a href="#"><img src="images/client-logos/audiojungle.png" alt="AudioJungle" title="AudioJungle"></a></li>
                <li><a href="#"><img src="images/client-logos/codecanyon.png" alt="CodeCanyon" title="CodeCanyon"></a></li>
                <li><a href="#"><img src="images/client-logos/graphicriver.png" alt="GraphicRiver" title="GraphicRiver"></a></li>
            </ul>
        </section>
        <!-- end clients --> 
    </div>    
    </section>
    <!-- end content -->  <!-- begin footer -->
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