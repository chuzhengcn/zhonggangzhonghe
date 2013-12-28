<?php require_once (dirname(__FILE__) . DIRECTORY_SEPARATOR . 'settings.php'); ?>
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
    <script src="js/jquery.ui.totop.min.js" type="text/javascript"></script> <!-- scroll to top -->
    <script src="js/jquery.fitvids.js" type="text/javascript"></script> <!-- responsive video embeds -->
    <script src="js/jquery.tweet.js" type="text/javascript"></script> <!-- Twitter widget -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> <!-- Google maps -->
    <script src="js/jquery.gmap.min.js" type="text/javascript"></script> <!-- gMap -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script> <!-- swipe gestures -->
    <script src="js/jquery.tipsy.js" type="text/javascript"></script> <!-- tooltips -->
    <script src="js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
    <!-- end JS -->
	
	<title>Inceptio - Contact</title>
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
            <h1 class="one-half">Contact</h1>
            <nav id="breadcrumbs" class="one-half column-last">
                <ul>
                    <li><a href="index.php">Home</a> &rsaquo;</li>
                    <li>Contact</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content">
    	<div class="container clearfix">
        <!-- begin google map --> 
        <section>
            <div id="map"
                data-address="40 Broadway, London"
                data-zoom="17"
                style="width: 100%; height: 400px;">
            </div>
        </section>
        <!-- end google map -->
        
        <!-- begin main -->
        <section id="main" class="three-fourths">
        <!-- begin contact form -->
        <h2>Contact Us</h2>
        <p>We would be glad to have feedback from you. Drop us a line, whether it is a comment, a question, a work proposition or just a hello. You can use either the form below or the contact details on the right.</p>
        <div id="contact-notification-box-success" class="notification-box notification-box-success" style="display: none;">
            <p>Your message has been successfully sent. We will get back to you as soon as possible.</p>
            <a href="#" class="notification-close notification-close-success">x</a>
        </div>
        
        <div id="contact-notification-box-error" class="notification-box notification-box-error " style="display: none;">
            <p id="contact-notification-box-error-msg" data-default-msg="Your message couldn't be sent because a server error occurred. Please try again."></p>
            <a href="#" class="notification-close notification-close-error">x</a>
        </div>
        <form id="contact-form" class="content-form" method="post" action="#">
            <p>
                <label for="name">Name:<span class="note">*</span></label>
                <input id="name" type="text" name="name" class="required">
            </p>
            <p>
                <label for="email">Email:<span class="note">*</span></label>
                <input id="email" type="email" name="email" class="required">
            </p>
            <p>
                <label for="url">Website:</label>
                <input id="url" type="url" name="url">
            </p>
            <p>
                <label for="subject">Subject:<span class="note">*</span></label>
                <input id="subject" type="text" name="subject" class="required">
            </p>
            <p>
                <label for="message">Message:<span class="note">*</span></label>
                <textarea id="message" cols="68" rows="8" name="message" class="required"></textarea>
            </p>
            <?php
            if(ENABLE_CAPTCHA){
                require_once ('recaptcha/recaptchalib.php');
                echo '<p>';
                echo recaptcha_get_html($captcha_public_key, null, USE_SSL);
                echo '</p>';
            }
            ?>
            <p>
                <input id="submit" class="button" type="submit" name="submit" value="Send Message">
            </p>
        </form>
        <p><span class="note">*</span> Required fields</p>
        <!-- end contact form -->
        </section>
        <!-- end main -->
        
        <!-- begin sidebar -->
        <aside id="sidebar" class="one-fourth column-last">
            <div class="widget contact-info">
                <h3>Contact Info</h3>
                <p>You can also reach us here:</p>
                <div>
                    <p class="address"><strong>Address:</strong> 123 Street, City, Country</p>
                    <p class="phone"><strong>Phone:</strong> (123) 456-7890</p>
                    <p class="fax"><strong>Fax:</strong> (123) 456-7890</p>
                    <p class="email"><strong>Email:</strong> <a href="mailto:office@company.com">office@company.com</a></p>
                    <p class="business-hours"><strong>Business Hours:</strong><br>
                    Monday-Friday: 9:00-18:00<br>
                    Saturday: 10:00-17:00<br>
                    Sunday: Closed
                    </p>
                </div>
            </div>
        </aside>
        <!-- end sidebar -->
    </div>    
    </section>
    <!-- end content -->  <!-- begin footer -->
	<?php include('includes/footer.php'); ?>
	<!-- end footer -->  
</div>
<!-- end container -->
</body>
</html>