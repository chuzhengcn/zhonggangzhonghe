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
    <script src="js/jquery.ui.totop.min.js" type="text/javascript"></script> <!-- scroll to top -->
    <script src="js/jquery.fitvids.js" type="text/javascript"></script> <!-- responsive video embeds -->
    <script src="js/jquery.tweet.js" type="text/javascript"></script> <!-- Twitter widget -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script> <!-- swipe gestures -->
    <script src="js/jquery.tipsy.js" type="text/javascript"></script> <!-- tooltips -->
    <script src="js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
    <!-- end JS -->
	
	<title>Inceptio - Elements</title>
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
            <h1 class="one-half">Elements</h1>
            <nav id="breadcrumbs" class="one-half column-last">
                <ul>
                    <li><a href="index.php">Home</a> &rsaquo;</li>
                    <li><a href="icon-boxes.php">Shortcodes</a> &rsaquo;</li>
                    <li>Elements</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content">
    	<div class="container clearfix">
        
    	<!-- begin tabs -->
        <section class="one-fourth">
            <h2>Tabs</h2>
            <div class="tabs">
                    <ul class="tabs-nav clearfix">
                        <li><a href="#tab-1">Title</a></li>
                        <li><a href="#tab-2">Title</a></li>
                        <li><a href="#tab-3">Title</a></li>
                    </ul>
                    <div id="tab-1" class="tab">
                        <p>Aliquam vestibulum, sapien sit amet imperdiet placerat, mi augue euismod augue, sit amet tincidunt nisi quam a quam.</p>
                        <p>Suspendisse molestie metus leo, in hendrerit lacus. Donec pellentesque gravida enim at.</p>
                    </div>
                    
                    <div id="tab-2" class="tab">
                        <p>Maecenas venenatis luctus neque. Duis aliquam urna ac quam gravida et laoreet urna pulvinar. Praesent et nisi ipsum.</p>
                        <p>Aliquam aliquet dui eu odio imperdiet dignissim. Donec et sapien nisl. Integer in dolor tortor.</p>
                    </div>
                    <div id="tab-3" class="tab">
                        <p>Cras convallis lorem vitae nunc mollis adipiscing. Donec tincidunt odio vel metus imperdiet semper. In volutpat orci in leo ornare sed.</p>
                        <p>Donec rutrum purus vitae nisi pharetra id lacinia enim ullamcorper. Mauris dictum, orci.</p>
                    </div>
                </div>
        </section>
        <!-- end tabs -->
        
        <!-- begin toggles -->
        <section class="one-fourth">
            <h2>Toggles</h2>
            <!-- begin toggles wrap -->
            <div class="toggles-wrap">
                <!-- begin toggle -->
                <div data-id="closed" class="toggle">
                    <span class="toggle-title">Title goes here</span>
                    <div class="toggle-inner">
                        <p>In hac habitasse platea dictumst. Aenean malesuada, lectus quis hendrerit iaculis, ipsum nibh malesuada sapien.</p>
                        <p>Fusce posuere adipiscing nisi, eget dapibus urna accumsan in. Cras eleifend magna nec sem.</p>
                    </div>
                </div>
                <!-- end toggle -->
                
                <!-- begin toggle -->
                <div data-id="closed" class="toggle">
                    <span class="toggle-title">Title goes here</span>
                    <div class="toggle-inner">
                        <p>In hac habitasse platea dictumst. Aenean malesuada, lectus quis hendrerit iaculis, ipsum nibh malesuada sapien.</p>
                        <p>Fusce posuere adipiscing nisi, eget dapibus urna accumsan in. Cras eleifend magna nec sem.</p>
                    </div>
                </div>
                <!-- end toggle -->
                
                <!-- begin toggle -->
                <div data-id="closed" class="toggle">
                    <span class="toggle-title">Title goes here</span>
                    <div class="toggle-inner">
                        <p>In hac habitasse platea dictumst. Aenean malesuada, lectus quis hendrerit iaculis, ipsum nibh malesuada sapien.</p>
                        <p>Fusce posuere adipiscing nisi, eget dapibus urna accumsan in. Cras eleifend magna nec sem.</p>
                    </div>
                </div>
                <!-- end toggle -->
                
                <!-- begin toggle -->
                <div data-id="closed" class="toggle">
                    <span class="toggle-title">Title goes here</span>
                    <div class="toggle-inner">
                        <p>In hac habitasse platea dictumst. Aenean malesuada, lectus quis hendrerit iaculis, ipsum nibh malesuada sapien.</p>
                        <p>Fusce posuere adipiscing nisi, eget dapibus urna accumsan in. Cras eleifend magna nec sem.</p>
                    </div>
                </div>
                <!-- end toggle -->
                
                <!-- begin toggle -->
                <div data-id="closed" class="toggle">
                    <span class="toggle-title">Title goes here</span>
                    <div class="toggle-inner">
                        <p>In hac habitasse platea dictumst. Aenean malesuada, lectus quis hendrerit iaculis, ipsum nibh malesuada sapien.</p>
                        <p>Fusce posuere adipiscing nisi, eget dapibus urna accumsan in. Cras eleifend magna nec sem.</p>
                    </div>
                </div>
                <!-- end toggle -->
            </div>
            <!-- end toggles wrap -->
        </section>
        <!-- end toggles -->
            
        <!-- begin accordion -->
        <section class="one-fourth">
            <h2>Accordion</h2>
            <div class="accordion">
                <div>
                    <span class="accordion-title">Title goes here</span>
                    <div class="accordion-inner">
                        <p>In hac habitasse platea dictumst. Aenean malesuada, lectus quis hendrerit iaculis, ipsum nibh malesuada sapien.</p>
                        <p>Fusce posuere adipiscing nisi, eget dapibus urna accumsan in. Cras eleifend magna nec sem.</p>
                    </div>
                </div>
                    
                <div>
                    <span class="accordion-title">Title goes here</span>
                    <div class="accordion-inner">
                        <p>In hac habitasse platea dictumst. Aenean malesuada, lectus quis hendrerit iaculis, ipsum nibh malesuada sapien.</p>
                        <p>Fusce posuere adipiscing nisi, eget dapibus urna accumsan in. Cras eleifend magna nec sem.</p>
                    </div>
                </div>
                    
                <div>
                    <span class="accordion-title">Title goes here</span>
                    <div class="accordion-inner">
                        <p>In hac habitasse platea dictumst. Aenean malesuada, lectus quis hendrerit iaculis, ipsum nibh malesuada sapien.</p>
                        <p>Fusce posuere adipiscing nisi, eget dapibus urna accumsan in. Cras eleifend magna nec sem.</p>
                    </div>
                </div>
                    
                <div>
                    <span class="accordion-title">Title goes here</span>
                    <div class="accordion-inner">
                        <p>In hac habitasse platea dictumst. Aenean malesuada, lectus quis hendrerit iaculis, ipsum nibh malesuada sapien.</p>
                        <p>Fusce posuere adipiscing nisi, eget dapibus urna accumsan in. Cras eleifend magna nec sem.</p>
                    </div>
                </div>
                
                <div>
                    <span class="accordion-title">Title goes here</span>
                    <div class="accordion-inner">
                        <p>In hac habitasse platea dictumst. Aenean malesuada, lectus quis hendrerit iaculis, ipsum nibh malesuada sapien.</p>
                        <p>Fusce posuere adipiscing nisi, eget dapibus urna accumsan in. Cras eleifend magna nec sem.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end accordion -->
            
        <!-- begin notification boxes -->
            <section class="one-fourth column-last">
                <h2>Notification Boxes</h2>
                <div class="notification-box notification-box-info">
                    <p>Your information text.</p>
                    <a href="#" class="notification-close notification-close-info">x</a>
                </div>
                <div class="notification-box notification-box-success">
                    <p>Your success text.</p>
                    <a href="#" class="notification-close notification-close-success">x</a>
                </div>
                <div class="notification-box notification-box-warning">
                    <p>Your warning text.</p>						
                    <a href="#" class="notification-close notification-close-warning">x</a>
                </div>
                <div class="notification-box notification-box-error">
                    <p>Your error text.</p>
                    <a href="#" class="notification-close notification-close-error">x</a>
                </div>
            </section>
            <!-- end notification boxes -->
        
        <div class="clear"></div>
        
        <!-- begin buttons -->
        <section>
            <h2>Buttons</h2>
            <h3>Normal Buttons</h3>
            <a class="button green" href="#">Button Text</a>
            <a class="button retro-green" href="#">Button Text</a>
            <a class="button teal" href="#">Button Text</a>
            <a class="button orange" href="#">Button Text</a>
            <a class="button yellow" href="#">Button Text</a>
            <a class="button blue" href="#">Button Text</a>
            <a class="button indigo" href="#">Button Text</a>
            <a class="button red" href="#">Button Text</a>
            <a class="button pink" href="#">Button Text</a>
            <a class="button purple" href="#">Button Text</a>
            <a class="button black" href="#">Button Text</a>
            <h3>Large Buttons</h3>
            <a class="button green large" href="#">Button Text</a>
            <a class="button retro-green large" href="#">Button Text</a>
            <a class="button teal large" href="#">Button Text</a>
            <a class="button orange large" href="#">Button Text</a>
            <a class="button yellow large" href="#">Button Text</a>
            <a class="button blue large" href="#">Button Text</a>
            <a class="button indigo large" href="#">Button Text</a>
            <a class="button red large" href="#">Button Text</a>
            <a class="button pink large" href="#">Button Text</a>
            <a class="button purple large" href="#">Button Text</a>
            <a class="button black large" href="#">Button Text</a>
        </section>
        <!-- end buttons -->
        
        <!-- begin process -->
        <section>
        	<h2>Process (Outline of Steps)</h2>
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
        
        <!-- begin testimonials -->
        <section>
            <h2>Testimonials</h2>
            <div class="one-half">
                <h3>Testimonial with a Male Author</h3>
                <blockquote class="speech-bubble">
                    <div class="quote-content">
                        <p>This is an example of a testimonial with a male author. Aenean bibendum venenatis aliquet. Nunc fermentum mauris ut odio tempor iaculis suscipit magna mollis. Proin sed tincidunt felis. Maecenas lacinia purus a arcu pulvinar pellentesque. Cras facilisis, urna eu pharetra sodales, massa magna facilisis erat, et interdum ligula justo et nunc. Duis eu dolor sed lectus pharetra bibendum et ultricies leo. Donec laoreet quam ut mi fermentum eleifend. Sed sodales pellentesque faucibus.</p>
                        <span class="quote-arrow"></span>
                    </div>
                    <div class="quote-meta author-male"><strong>Author</strong>, Profession<br>
                        <span>Company</span>
                    </div>
                </blockquote>
            </div>
            
            <div class="one-half column-last">
                <h3>Testimonial with a Female Author</h3>
                <blockquote class="speech-bubble">
                    <div class="quote-content">
                        <p>This is an example of a testimonial with a female author. Aenean bibendum venenatis aliquet. Nunc fermentum mauris ut odio tempor iaculis suscipit magna mollis. Proin sed tincidunt felis. Maecenas lacinia purus a arcu pulvinar pellentesque. Cras facilisis, urna eu pharetra sodales, massa magna facilisis erat, et interdum ligula justo et nunc. Duis eu dolor sed lectus pharetra bibendum et ultricies leo. Donec laoreet quam ut mi fermentum eleifend. Sed sodales pellentesque faucibus.</p>
                        <span class="quote-arrow"></span>
                    </div>
                    <div class="quote-meta author-female"><strong>Author</strong>, Profession<br>
                        <span>Company</span>
                    </div>
                </blockquote>
            </div>
            
            <div class="clear"></div>
        </section>
        <!-- end testimonials -->
        
        <!-- begin table -->
        <section>
            <h2>Table</h2>
            <table class="gen-table">
                <caption>
                Table Caption
                </caption>
                <thead>
                    <tr>
                        <th>Header 1</th>
                        <th>Header 2</th>
                        <th>Header 3</th>
                        <th>Header 4</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="4">Table Footer</td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Item 1</td>
                        <td>Description</td>
                        <td>Subtotal:</td>
                        <td>$1.00</td>
                    </tr>
                    <tr class="odd">
                        <td>Item 2</td>
                        <td>Description</td>
                        <td>Discount:</td>
                        <td>$2.00</td>
                    </tr>
                    <tr>
                        <td>Item 3</td>
                        <td>Description</td>
                        <td>Shipping:</td>
                        <td>$3.00</td>
                    </tr>
                    <tr class="odd">
                        <td>Item 4</td>
                        <td>Description</td>
                        <td>Tax:</td>
                        <td>$4.00</td>
                    </tr>
                    <tr class="row-last">
                        <td><strong>All Items</strong></td>
                        <td><strong>Description</strong></td>
                        <td><strong>Total:</strong></td>
                        <td><strong>$10.00</strong></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!-- end table -->	
        
    </div>    
    </section>
    <!-- end content -->  <!-- begin footer -->
	<?php include('includes/footer.php'); ?>
	<!-- end footer -->  
</div>
<!-- end container -->
</body>
</html>