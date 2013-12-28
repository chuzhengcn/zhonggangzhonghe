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
    <script src="js/jquery.ui.totop.min.js" type="text/javascript"></script> <!-- scroll to top -->
    <script src="js/jquery.fitvids.js" type="text/javascript"></script> <!-- responsive video embeds -->
    <script src="js/jquery.tweet.js" type="text/javascript"></script> <!-- Twitter widget -->
    <script src="js/jflickrfeed.min.js" type="text/javascript"></script> <!-- Flickr widget -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script> <!-- swipe gestures -->
    <script src="js/jquery.tipsy.js" type="text/javascript"></script> <!-- tooltips -->
    <script src="js/froogaloop.min.js" type="text/javascript"></script> <!-- video manipulation -->
    <script src="js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
    <!-- end JS -->
	
	<title>Inceptio - Blog</title>
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
            <h1 class="one-half">Blog</h1>
            <nav id="breadcrumbs" class="one-half column-last">
                <ul>
                    <li><a href="index.php">Home</a> &rsaquo;</li>
                    <li><a href="blog.php">Blog</a> &rsaquo;</li>
                    <li>Blog Overview</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content">
    	<div class="container clearfix">
    	<!-- begin main content -->
        <section id="main" class="blog-entry-list three-fourths">
        
            <article class="entry clearfix">
            	<a class="entry-image link-overlay" href="blog-post-image.php" title="Post Title"><span class="overlay"></span><img src="images/entries/700x300/southern-alps-700x300.png" alt=""></a>
            	<div class="entry-date">
                    <div class="entry-day">15</div>
                    <div class="entry-month">Jan</div>   
                </div>
                <div class="entry-body">
                    <h2 class="entry-title"><a href="blog-post-image.php">Responsive Web Design Techniques, Tools and Design Strategies</a></h2>
                    <div class="entry-meta">
                    	<span class="author"><a href="#">admin</a></span> 
                        <span class="category"><a href="#">Photography</a>, <a href="#">Web Design</a></span>
                        <span class="comments"><a href="#">4 Comments</a></span>
                    </div>
                    <div class="entry-content">
                        <p>Aliquam quis libero dapibus ante rhoncus eleifend quis vitae erat. Quisque vel nisi nibh. Suspendisse ipsum lorem integer nec interdum massa. Sed ornare rutrum sem, vitae imperdiet risus ullamcorper non. Aliquam adipiscing iaculis lorem, luctus semper diam dignissim vitae. Phasellus vel enim vel purus vehicula sollicitudin. In hac habitasse platea dictumst. Aliquam lacinia euismod odio id pulvinar. Quisque sagittis malesuada lectus &hellip;</p>
                    </div>
                </div>
            </article>
            
            <article class="entry clearfix">
            	<!-- begin entry slider -->
                <div class="entry-slider">
                    <div id="flexslider-portfolio-item" class="flex-container">
                        <div class="flexslider">
                            <ul class="slides">
                                <li><a class="link-overlay" href="blog-post-slider.php" title="Post Title"><span class="overlay"></span><img src="images/entries/700x300/spring-700x300.png" alt=""></a></li>
                                <li><a class="link-overlay" href="blog-post-slider.php" title="Post Title"><span class="overlay"></span><img src="images/entries/700x300/sailing-700x300.png" alt=""></a></li>
                                <li><a class="link-overlay" href="blog-post-slider.php" title="Post Title"><span class="overlay"></span><img src="images/entries/700x300/sunrise-700x300.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>	
                <!-- end entry slider -->
            	<div class="entry-date">
                    <div class="entry-day">10</div>
                    <div class="entry-month">Dec</div>   
                </div>
                <div class="entry-body">
                    <h2 class="entry-title"><a href="blog-post-slider.php">Designing For Device Orientation: From Portrait To Landscape</a></h2>
                    <div class="entry-meta">
                    	<span class="author"><a href="#">admin</a></span> 
                        <span class="category"><a href="#">Print Design</a>, <a href="#">Web Design</a></span>
                        <span class="comments"><a href="#">4 Comments</a></span>
                    </div>
                    <div class="entry-content">
                        <p>Phasellus varius, felis ac ullamcorper aliquet, justo nunc laoreet turpis, eget pharetra nulla arcu sed purus curabitur hendrerit bibendum erat, id sollicitudin arcu adipiscing eget. Nullam in nibh eget sapien placerat tincidunt nec ac dui. Ut lobortis, felis vel congue viverra, dui eros auctor lectus, sed sodales massa leo id sapien. Quisque nec tristique augue. Duis ut neque vitae velit rutrum gravida. Sed vel turpis nunc, non scelerisque nisi &hellip;</p>
                    </div>
                </div>
            </article>
            
            <article class="entry clearfix">
            	<div class="entry-video">
                    <iframe src="http://player.vimeo.com/video/58413545?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="700" height="394" allowFullScreen></iframe>
                </div>
            	<div class="entry-date">
                    <div class="entry-day">27</div>
                    <div class="entry-month">Nov</div>   
                </div>
                <div class="entry-body">
                    <h2 class="entry-title"><a href="blog-post-video.php">Useful Talks and Videos from Web Design Conferences</a></h2>
                    <div class="entry-meta">
                    	<span class="author"><a href="#">admin</a></span> 
                        <span class="category"><a href="#">Animation</a></span>
                        <span class="comments"><a href="#">4 Comments</a></span>
                    </div>
                    <div class="entry-content">
                        <p>Aliquam quis libero dapibus ante rhoncus eleifend quis vitae erat. Quisque vel nisi nibh. Suspendisse ipsum lorem integer nec interdum massa. Sed ornare rutrum sem, vitae imperdiet risus ullamcorper non. Aliquam adipiscing iaculis lorem, luctus semper diam dignissim vitae. Phasellus vel enim vel purus vehicula sollicitudin. In hac habitasse platea dictumst. Aliquam lacinia euismod odio id pulvinar. Quisque sagittis malesuada lectus &hellip;</p>
                    </div>
                </div>
            </article>
            
            <article class="entry clearfix">
            	<div class="entry-date">
                    <div class="entry-day">4</div>
                    <div class="entry-month">Oct</div>   
                </div>
                <div class="entry-body">
                    <h2 class="entry-title"><a href="blog-post-no-media.php">The Creative Way to Maximize Design Ideas with Type</a></h2>
                    <div class="entry-meta">
                    	<span class="author"><a href="#">admin</a></span> 
                        <span class="category"><a href="#">Print Design</a>, <a href="#">Web Design</a></span>
                        <span class="comments"><a href="#">4 Comments</a></span>
                    </div>
                    <div class="entry-content">
                        <p>Phasellus varius, felis ac ullamcorper aliquet, justo nunc laoreet turpis, eget pharetra nulla arcu sed purus curabitur hendrerit bibendum erat, id sollicitudin arcu adipiscing eget. Nullam in nibh eget sapien placerat tincidunt nec ac dui. Ut lobortis, felis vel congue viverra, dui eros auctor lectus, sed sodales massa leo id sapien. Quisque nec tristique augue. Duis ut neque vitae velit rutrum gravida. Sed vel turpis nunc, non scelerisque nisi &hellip;</p>
                    </div>
                </div>
            </article>
            
            <!-- begin pagination -->
            <nav class="page-nav">
                <span>Page 7 of 15</span>
                <ul>
                    <li><a href="#">&laquo; First</a></li>
                    <li><a href="#">&lsaquo; Previous</a></li>
                    <li><a href="#">6</a></li>
                    <li class="current">7</li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#">Next &rsaquo;</a></li>
                    <li><a href="#">Last &raquo;</a></li>
                </ul>
            </nav>
            <!-- end pagination --> 
        </section>
        <!-- end main content -->
        
        <!-- begin sidebar -->
        <aside id="sidebar" class="one-fourth column-last">
            <div class="widget">
                <h3>Text Widget</h3>
                <p>Phasellus ultricies sollicitudin eros, nec vehicula mauris volutpat in. Nulla non arcu nunc, id semper eros. Class aptent taciti sociosqu ad litora.</p>
            </div>
            
            <div class="widget">
                <h3>Categories</h3>		
                <ul class="menu">
                    <li><a title="View all posts filed under Web Design" href="#">Web Design</a></li>
                    <li><a title="View all posts filed under Print Design" href="#">Print Design</a>
                    	<ul>
                        	<li><a title="View all posts filed under Posters" href="#">Posters</a></li>
                            <li><a title="View all posts filed under Business Cards" href="#">Business Cards</a></li>
                        </ul>
                    </li>
                    <li><a title="View all posts filed under Photography" href="#">Photography</a></li>
                    <li><a title="View all posts filed under Animation" href="#">Animation</a></li>
                </ul>
            </div>
            
            <div class="widget">
                <h3>Tags</h3>
                <ul class="tags clearfix">
                	<li><a href="#">Animation</a></li>
                    <li><a href="#">HTML/CSS</a></li>
                    <li><a href="#">Photography</a></li>
                    <li><a href="#">Photoshop</a></li>
                    <li><a href="#">Print Design</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">WordPress</a></li>
                </ul>	
            </div>
            
            <div class="widget flickr-widget">
                <h3>Flickr Widget</h3>		
                <ul class="flickr-feed clearfix"></ul>
            </div>
            
            <div class="widget">
                <h3>Archives</h3>		
                <ul class="menu">
                    <li><a href="#" title="January 2013">January 2013</a></li>
                    <li><a href="#" title="December 2012">December 2012</a></li>
                    <li><a href="#" title="November 2012">November 2012</a></li>
                    <li><a href="#" title="October 2012">October 2012</a></li>
                </ul>
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