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
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script> <!-- swipe gestures -->
    <script src="js/jquery.tipsy.js" type="text/javascript"></script> <!-- tooltips -->
    <script src="js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
    <!-- end JS -->
	
	<title>Inceptio - Sitemap</title>
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
            <h1 class="one-half">Sitemap</h1>
            <nav id="breadcrumbs" class="one-half column-last">
                <ul>
                    <li><a href="index.php">Home</a> &rsaquo;</li>
                    <li><a href="about-us.php">Templates</a> &rsaquo;</li>
                    <li>Sitemap</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content">
    	<div class="container clearfix">
    
        <!-- begin pages -->
        <section class="one-third">
            <h2>Pages</h2>
            <ul class="square">
                <li><a href="#">Page Title</a></li>
                <li><a href="#">Page Title</a>
                	<ul>
                    	<li><a href="#">Page Title</a></li>
                        <li><a href="#">Page Title</a></li>
                        <li><a href="#">Page Title</a></li>
                    </ul>
                </li>
                <li><a href="#">Page Title</a></li>
                <li><a href="#">Page Title</a>
                	<ul>
                    	<li><a href="#">Page Title</a></li>
                        <li><a href="#">Page Title</a>
                        	<ul>
                                <li><a href="#">Page Title</a></li>
                                <li><a href="#">Page Title</a></li>
                                <li><a href="#">Page Title</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Page Title</a></li>
                    </ul>
                </li>
                <li><a href="#">Page Title</a></li>
                <li><a href="#">Page Title</a>
                	<ul>
                    	<li><a href="#">Page Title</a></li>
                        <li><a href="#">Page Title</a></li>
                        <li><a href="#">Page Title</a></li>
                    </ul>
                </li>
                <li><a href="#">Page Title</a>
                	<ul>
                    	<li><a href="#">Page Title</a></li>
                        <li><a href="#">Page Title</a>
                        	<ul>
                                <li><a href="#">Page Title</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Page Title</a></li>
                    </ul>
                </li>
                <li><a href="#">Page Title</a></li>
            </ul>
        </section>
        <!-- end pages-->
        
        <!-- begin blog archives -->
        <section class="one-third">
            <h2>Blog Archives</h2>
            <section>
                <h3>Archives by Month</h3>
                <ul class="square">
                    <li><a title="January 2013" href="#">January 2013</a></li>
                    <li><a title="December 2012" href="#">December 2012</a></li>
                    <li><a title="November 2012" href="#">November 2012</a></li>
                    <li><a title="October 2012" href="#">October 2012</a></li>
                </ul>
            </section>
            
            <section>
                <h3>Archives by Category</h3>
                <ul class="square">
                    <li><a title="View all posts filed under Graphic Design" href="#">Graphic Design</a></li>
                    <li><a title="View all posts filed under Photography" href="#">Photography</a></li>
                    <li><a title="View all posts filed under Web Design" href="#">Web Design</a></li>
                    <li><a title="View all posts filed under Web Development" href="#">Web Development</a></li>
                </ul>
            </section>
            
            <section>
                <h3>Archives by Tag</h3>
                <ul class="square">
                    <li><a href="#">jQuery</a></li>
                    <li><a href="#">HTML/CSS</a></li>
                    <li><a href="#">Photoshop</a></li>
                    <li><a href="#">PHP</a></li>
                </ul>
            </section>
            
            <section>
                <h3>Archives by Author</h3>
                <ul class="square">
                    <li><a href="#">admin</a></li>
                </ul>
            </section>
        </section>
        <!-- end blog archives -->
        
        <!-- begin latest 20 posts -->
        <section class="one-third column-last">
            <h2>Latest 20 Posts</h2>
            <ul class="square">
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
                <li><a href="#">Post Title</a></li>
            </ul>
        </section>
        <!-- end latest 20 posts -->
        
    </div>    
    </section>
    <!-- end content -->  <!-- begin footer -->
	<?php include('includes/footer.php'); ?>
	<!-- end footer -->  
</div>
<!-- end container -->
</body>
</html>