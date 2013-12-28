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
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script> <!-- swipe gestures -->
    <script src="js/jquery.tipsy.js" type="text/javascript"></script> <!-- tooltips -->
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
        <div id="flexslider-home" class="flex-container container">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="images/slider/slides/940x400/southern-alps-940x400.png" alt="">
                        <div class="flex-caption">
                            <h1>A Flexible, Multi-Purpose Theme</h1>
                            <div>
                                <a class="button" href="http://themeforest.net/user/ixtendo/portfolio">Learn More</a>
                                <p>Mauris fringilla nibh vitae turpis rhoncus ornare luctus nibh tincidunt. Duis ultricies imperdiet leo id dictum amet.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="images/slider/slides/940x400/spring-940x400.png" alt="">
                        <div class="flex-caption">
                            <h1>Fully Responsive &amp; Touch Enabled</h1>
                            <div>
                                <a class="button" href="http://themeforest.net/user/ixtendo/portfolio">Learn More</a>
                                <p>Duis mattis odio non leo lacinia in vulputate lorem auctor. Praesent ac mauris tincidunt magna ultricies euismod.</p>
                            </div>  
                        </div>
                    </li>
                    <li>
                        <img src="images/slider/slides/940x400/sunrise-940x400.png" alt="">
                        <div class="flex-caption">
                            <h1>Carefully Handcrafted &amp; Easy to Use</h1>
                            <div>
                                <a class="button" href="http://themeforest.net/user/ixtendo/portfolio">Learn More</a>
                                <p>Aliquam magna erat, varius quis blandit sed, sodales ut libero. Maecenas nisi augue, rutrum tristique placerat.</p>
                            </div>   
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end slider -->
       
    <!-- begin content -->
    <section id="content">
    	<div class="container clearfix">
        <!-- begin intro -->
        <section>
        	<div class="intro">
                <h1><strong>Inceptio</strong> is a multi-purpose theme with a <strong>clean</strong> look, <strong>handy</strong> functionality and <strong>flexible</strong> customization possibilities.</h1>
                <div class="buttons-wrap">
                    <a href="portfolio.php" class="button large black">Learn More</a>
                    <a href="http://themeforest.net/user/ixtendo/portfolio" class="button large">Buy Theme</a>
                </div>
            </div>
        </section>
        <!-- end intro -->
        
        <div class="divider-double-line"></div>
        
        <!-- begin services -->
        <section>
            <div class="one-fourth">
                <div class="iconbox icon-left">
                    <a href="services-2.php#clean-design">
                        <h2 class="iconbox-title"><span class="iconbox-icon"><img src="images/icon-boxes/24x20/laptop.png" alt="Laptop"></span>Clean Design</h2>
                        <p>Inceptio features a clean design that is suitable for a wide variety of purposes, including business and portfolio presentation sites.</p>
                        <span class="button">Learn More</span>
                    	<div class="arrow-box-hover"></div>
                    </a>
                </div>
            </div>
            
            <div class="one-fourth">
                <div class="iconbox icon-left">
                    <a href="services-2.php#mobile-ready">
                        <h2 class="iconbox-title"><span class="iconbox-icon"><img src="images/icon-boxes/24x20/iphone.png" alt="iPhone"></span>Mobile Ready</h2>
                        <p>Inceptio has a responsive layout and can adapt to any screen size. It is also touch-enabled and easy to use on mobile devices.</p>
                        <span class="button">Learn More</span>
                        <div class="arrow-box-hover"></div>
                    </a>
                </div>
            </div>
            
            <div class="one-fourth">
                <div class="iconbox icon-left">
                    <a href="services-2.php#option-rich">
                        <h2 class="iconbox-title"><span class="iconbox-icon"><img src="images/icon-boxes/24x20/cog.png" alt="Cog"></span>Option Rich</h2>
                        <p>Numerous features and options were implemented in this theme to allow the customer a flexible and easy customization.</p>
                        <span class="button">Learn More</span>
                        <div class="arrow-box-hover"></div>
                    </a>
                </div>
            </div>
            
            <div class="one-fourth column-last">
                <div class="iconbox icon-left">
                    <a href="services-2.php#seo-ready">
                        <h2 class="iconbox-title"><span class="iconbox-icon"><img src="images/icon-boxes/24x20/chemical.png" alt="Chemical"></span>SEO Ready</h2>
                        <p>Inceptio was built with SEO in mind and uses a semantically rich, clean and well-organized HTML5 code.</p>
                        <span class="button">Learn More</span>
                        <div class="arrow-box-hover"></div>
                    </a>
                </div>
            </div>
            
            <div class="clear"></div>
        </section>
        <!-- end services -->
        
        <!-- begin about us -->
        <section class="one-half">
            <h2>About Us</h2>
            <div class="entry-slider">
                <div id="flexslider-about-us" class="flex-container">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="images/entries/full-size/business-development.jpg" alt="Our Company" title="Our Company">
                            </li>
                            <li>
                                <img src="images/entries/full-size/business-woman.jpg" alt="Our Team" title="Our Team">
                            </li>
                            <li>
                                <iframe src="http://player.vimeo.com/video/34750078?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff&amp;api=1" width="288" height="162" allowFullScreen></iframe>
                            </li>    
                        </ul>
                    </div>
                </div>
            </div>
            
            <p>Donec adipiscing malesuada ultrices. Aenean egestas ullamcorper nibh, sed euismod nisi ultricies sit amet. Etiam facilisis mauris quis nisi ullamcorper sed vestibulum tortor luctus. Cras ornare sem quam. Donec ante eros, aliquet et adipiscing eget, condimentum quis sem. Aliquam nec dapibus dolor.</p>
            <a class="button" href="about-us.php">Learn More</a>
        </section>
        <!-- end about us -->
        
        <!-- begin testimonials -->
        <section class="one-half column-last">
            <h2>Client Testimonials</h2>
            <!-- begin testimonial carousel -->
            <ul class="testimonial-carousel">
                <li>
                    <blockquote class="speech-bubble">
                        <div class="quote-content">
                            <p>Aliquam rhoncus, quam in pharetra sodales, lorem diam feugiat erat, sed egestas odio mauris id dolor. In at elit ante. Nullam vestibulum mi eu augue sagittis condimentum. Proin at ante eget quam auctor scelerisque porta adipiscing tortor. Donec elementum justo eget dolor semper consequat. Vivamus eu porttitor felis. Sed mattis pretium ligula quis egestas. Proin adipiscing ultricies tempor. Mauris fermentum velit sed orci suscipit ac tincidunt est euismod. Fusce faucibus felis ut odio ullamcorper in aliquam tortor sodales. Ut luctus nibh nec dui blandit quis laoreet libero facilisis. Proin at neque magna. Pellentesque interdum feugiat turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sapien diam, hendrerit vitae viverra id, congue sit amet mauris. Phasellus euismod scelerisque lorem non hendrerit.</p>
                            <span class="quote-arrow"></span>
                        </div>
                        <div class="quote-meta author-male"><strong>Mark Thompson</strong>, Web Designer<br>
                            <span>SmartBiz</span>
                        </div>
                    </blockquote>
                </li>
                <li>
                    <blockquote class="speech-bubble">
                        <div class="quote-content">
                            <p>Etiam hendrerit, lectus eu imperdiet aliquet, turpis turpis sollicitudin turpis, ut accumsan ipsum mi congue magna. Sed pellentesque congue eros, non dictum nisi porttitor eget. Praesent orci felis, sagittis et suscipit sit amet, consequat a neque. Pellentesque vel rhoncus ipsum. Cras quis felis libero. Pellentesque id ante sit amet lectus varius dapibus. Suspendisse nec consectetur urna. Aliquam id leo lectus. Integer eu sollicitudin neque. Aenean blandit odio eu ipsum bibendum sed porttitor felis porta. Curabitur sit amet augue massa, a pretium dolor. Vivamus adipiscing, metus non suscipit bibendum, purus metus bibendum augue, a elementum ipsum magna nec diam. Integer tempor elementum libero, eu malesuada ligula ullamcorper eu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            <span class="quote-arrow"></span>
                        </div>
                        <div class="quote-meta author-female"><strong>Diane Reynolds</strong>, Web Developer<br>
                            <span>CreativeBrains</span>
                        </div>
                    </blockquote>
                </li>
                <li>
                    <blockquote class="speech-bubble">
                        <div class="quote-content">
                            <p>Sed sollicitudin tortor convallis leo feugiat non mattis ligula aliquam. Vivamus volutpat tincidunt nibh id blandit. In congue mi vel augue posuere in iaculis purus elementum. Duis bibendum mauris vitae augue volutpat venenatis. Duis orci purus, dignissim ac fermentum ut, fermentum a felis. Vivamus fringilla lacinia nisl eget venenatis. In vel odio ipsum. Donec blandit erat sit amet nibh scelerisque iaculis. Nam et quam nunc. Sed ullamcorper odio at mi rhoncus vulputate. Aliquam ac mauris vel nibh pretium aliquet gravida vehicula orci. Morbi ullamcorper dui in velit sollicitudin egestas. Nunc vel nisl at leo pellentesque auctor. Donec a risus risus. Sed aliquam, neque at cursus feugiat, ligula tellus dapibus massa, a cursus mauris nulla sed lorem. Mauris sit amet felis sit amet leo condimentum condimentum ac sed dui.</p>
                            <span class="quote-arrow"></span>
                        </div>
                        <div class="quote-meta author-male"><strong>Robert Stevens</strong>, CEO<br>
                            <span>BitVenture</span>
                        </div>
                    </blockquote>
                </li>
            </ul>
            <!-- end testimonial carousel -->
        </section>
        <!-- end testimonials -->
        
        <div class="clear"></div>
        
        <!-- begin selected projects -->
        <section>
        	<h2>Selected Projects</h2>
            <!-- begin project carousel -->
            <ul class="project-carousel project-list">
            	<!-- begin row 1 -->
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
                    <a class="entry-image lightbox" data-fancybox-group="spring" href="images/entries/full-size/spring.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/spring-220x140.png" alt=""></a>
                    <a class="entry-image lightbox invisible" data-fancybox-group="spring" href="images/entries/full-size/sailing.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/sailing-220x140.png" alt=""></a>
                    <a class="entry-image lightbox invisible" data-fancybox-group="spring" href="images/entries/full-size/sunrise.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/sunrise-220x140.png" alt=""></a>
                    <a class="entry-meta" href="portfolio-item-slider.php">
                        <h4 class="entry-title">Spring</h4>
                        <div class="entry-content">
                            <p>Lightbox gallery</p>
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
                <!-- begin row 2 -->
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
        <!-- end selected projects -->
        
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