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
    <script src="js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> <!-- tabs, toggles, accordion -->
    <script src="js/jquery.flexslider-min.js" type="text/javascript"></script> <!-- slider -->
    <script src="js/jquery.ui.totop.min.js" type="text/javascript"></script> <!-- scroll to top -->
    <script src="js/jquery.fitvids.js" type="text/javascript"></script> <!-- responsive video embeds -->
    <script src="js/jquery.tweet.js" type="text/javascript"></script> <!-- Twitter widget -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script> <!-- swipe gestures -->
    <script src="js/jquery.tipsy.js" type="text/javascript"></script> <!-- tooltips -->
    <script src="js/froogaloop.min.js" type="text/javascript"></script> <!-- video manipulation -->
    <script src="js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
    <!-- end JS -->
	
	<title>Inceptio - About Us</title>
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
            <h1 class="one-half">About Us</h1>
            <nav id="breadcrumbs" class="one-half column-last">
                <ul>
                    <li><a href="index.php">Home</a> &rsaquo;</li>
                    <li><a href="about-us.php">Templates</a> &rsaquo;</li>
                    <li>About Us</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content">
    	<div class="container clearfix">
    	<!-- begin our company -->
        <section>
        	<div class="one-half">
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
            </div>
            
            <div class="one-half column-last">
            	<h2>Our Company</h2>
                <p>Donec adipiscing malesuada ultrices. Aenean egestas ullamcorper nibh, sed euismod nisi ultricies sit amet. Etiam facilisis mauris quis nisi ullamcorper sed vestibulum tortor luctus. Cras ornare sem quam. Donec ante eros, aliquet et adipiscing eget, condimentum quis sem. Aliquam nec dapibus dolor. Mauris in leo sed mauris convallis ornare vel ut lectus. Phasellus sollicitudin, nisi non vestibulum consequat, libero ante luctus justo, sit amet pharetra lacus odio quis libero. In nunc libero, mattis sed rutrum eget, placerat in enim.</p>
                <p>Pellentesque bibendum, arcu non pulvinar dignissim, est felis blandit sem, a sodales sapien risus nec odio. Fusce quis leo in ipsum commodo faucibus. Fusce ultrices erat ut ante adipiscing a cursus odio ultrices. Nullam nisi erat, adipiscing consectetur varius eu, dictum in enim. In vestibulum consequat purus. In non dui nunc, a molestie nisi. Suspendisse leo risus, commodo sed tempus quis, posuere ut sem. Nulla ac massa tortor, nec blandit dolor. Nulla porttitor rhoncus.</p>
            </div>
            <div class="clear"></div>
        </section>
        <!-- begin our company -->
        
        <!-- begin our team -->
        <section>
        	<h2>Our Team</h2>
            
            <div class="one-fourth">
            	<div class="team-member">
                    <img class="photo" src="images/team/team-member-1.png" alt="Team Member">
                    <div class="content">
                        <h3 class="name">James Patterson</h3>
                        <span class="job-title">Director and Founder</span>
                        <ul class="social-links">
                            <li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                            <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                            <li class="google-plus"><a href="#" title="Google+" target="_blank">Google+</a></li>
                            <li class="linkedin"><a href="#" title="LinkedIn" target="_blank">LinkedIn</a></li>
                            <li class="skype"><a href="#" title="Skype" target="_blank">Skype</a></li>
                            <li class="mail"><a href="#" title="Mail" target="_blank">Mail</a></li>
                        </ul>
                        <p>Cras pellentesque suscipit iaculis. Nulla lobortis, risus sed consequat pretium, ligula tellus luctus ipsum, non egestas elit enim et orci. Sed blandit ligula.</p>
                    </div>
                </div>
            </div>
            
            <div class="one-fourth">
            	<div class="team-member">
                    <img class="photo" src="images/team/team-member-2.png" alt="Team Member">
                    <div class="content">
                        <h3 class="name">Patricia Brooks</h3>
                        <span class="job-title">Web Designer</span>
                        <ul class="social-links">
                            <li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                            <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                            <li class="google-plus"><a href="#" title="Google+" target="_blank">Google+</a></li>
                            <li class="linkedin"><a href="#" title="LinkedIn" target="_blank">LinkedIn</a></li>
                            <li class="skype"><a href="#" title="Skype" target="_blank">Skype</a></li>
                            <li class="mail"><a href="#" title="Mail" target="_blank">Mail</a></li>
                        </ul>
                        <p>Cras pellentesque suscipit iaculis. Nulla lobortis, risus sed consequat pretium, ligula tellus luctus ipsum, non egestas elit enim et orci. Sed blandit ligula.</p>
                    </div>
                </div>
            </div>
            
            <div class="one-fourth">
            	<div class="team-member">
                    <img class="photo" src="images/team/team-member-3.png" alt="Team Member">
                    <div class="content">
                        <h3 class="name">Michael Henderson</h3>
                        <span class="job-title">Web Developer</span>
                        <ul class="social-links">
                            <li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                            <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                            <li class="google-plus"><a href="#" title="Google+" target="_blank">Google+</a></li>
                            <li class="linkedin"><a href="#" title="LinkedIn" target="_blank">LinkedIn</a></li>
                            <li class="skype"><a href="#" title="Skype" target="_blank">Skype</a></li>
                            <li class="mail"><a href="#" title="Mail" target="_blank">Mail</a></li>
                        </ul>
                        <p>Cras pellentesque suscipit iaculis. Nulla lobortis, risus sed consequat pretium, ligula tellus luctus ipsum, non egestas elit enim et orci. Sed blandit ligula.</p>
                    </div>
                </div>
            </div>
            
            <div class="one-fourth column-last">
            	<div class="team-member">
                    <img class="photo" src="images/team/team-member-4.png" alt="Team Member">
                    <div class="content">
                        <h3 class="name">Stephanie Murray</h3>
                        <span class="job-title">Account Manager</span>
                        <ul class="social-links">
                            <li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                            <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                            <li class="google-plus"><a href="#" title="Google+" target="_blank">Google+</a></li>
                            <li class="linkedin"><a href="#" title="LinkedIn" target="_blank">LinkedIn</a></li>
                            <li class="skype"><a href="#" title="Skype" target="_blank">Skype</a></li>
                            <li class="mail"><a href="#" title="Mail" target="_blank">Mail</a></li>
                        </ul>
                        <p>Cras pellentesque suscipit iaculis. Nulla lobortis, risus sed consequat pretium, ligula tellus luctus ipsum, non egestas elit enim et orci. Sed blandit ligula.</p>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <!-- end our team -->
        
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
	<?php include('includes/footer.php'); ?>
	<!-- end footer -->  
</div>
<!-- end container -->
</body>
</html>