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
    <script src="js/jquery.fancybox.pack.js" type="text/javascript"></script> <!-- lightbox -->
    <script src="js/jquery.fancybox-media.js" type="text/javascript"></script> <!-- lightbox -->
    <script src="js/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
    <!-- end JS -->
	
	<title>Inceptio - Media</title>
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
            <h1 class="one-half">Media</h1>
            <nav id="breadcrumbs" class="one-half column-last">
                <ul>
                    <li><a href="index.php">Home</a> &rsaquo;</li>
                    <li><a href="icon-boxes.php">Shortcodes</a> &rsaquo;</li>
                    <li>Media</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content">
    	<div class="container clearfix">
    	<!-- begin images -->
        <section>
            <h2>Images</h2>
            <div class="one-fourth">
                <h3>Simple</h3>
                <div class="entry-image">
                    <img src="images/entries/220x140/canoes-on-moraine-lake-220x140.png" alt="" title="Image Title">
                </div>
            </div>
            
            <div class="one-fourth">
                <h3>With Caption</h3>
                <div class="caption">
                    <div class="entry-image"><img src="images/entries/220x140/spring-220x140.png" alt="" title="Image Title"></div>
                    <p class="caption-text">Caption Text</p>
                </div>
            </div>
            
            <div class="one-fourth">
                <h3>With Lightbox</h3>
                <a class="entry-image lightbox" href="images/entries/full-size/sailing.jpg" title="Image Title"><span class="overlay zoom"></span><img src="images/entries/220x140/sailing-220x140.png" alt=""></a>
            </div>
            
            <div class="one-fourth column-last">
                <h3>With Lightbox Gallery</h3>
                <div>
                    <a class="entry-image lightbox" data-fancybox-group="sunrise" href="images/entries/full-size/sunrise.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/sunrise-220x140.png" alt=""></a>
                    <a class="entry-image lightbox invisible" data-fancybox-group="sunrise" href="images/entries/full-size/southern-alps.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/southern-alps-220x140.png" alt=""></a>
                    <a class="entry-image lightbox invisible" data-fancybox-group="sunrise" href="images/entries/full-size/canoes-on-moraine-lake.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x140/canoes-on-moraine-lake-220x140.png" alt=""></a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="one-fourth">
                <h3>With Link</h3>
                <a class="entry-image link-overlay" href="#" title="Image Title">
                	<span class="overlay"></span>
                    <img src="images/entries/220x140/sailing-220x140.png" alt="">
                </a>
            </div>
            <div class="one-fourth">
                <h3>With Caption &amp; Link</h3>
                <div class="caption">
                    <a class="entry-image link-overlay" href="#" title="Image Title">
                        <span class="overlay"></span>
                        <img src="images/entries/220x140/grand-canyon-aerials-220x140.png" alt="">
                    </a>
                    <p class="caption-text">Caption Text</p>
                </div>
            </div>
            <div class="one-fourth">
                <h3>With Inner Caption</h3>
                <a class="entry-image inner-caption" href="#" title="Image Title">
                    <img src="images/entries/220x140/the-golden-sea-bali-220x140.png" alt="">
                    <div><p>Image with Inner Caption</p></div>
                </a>
            </div>
            <div class="one-fourth column-last">
                <h3>With Inner Caption &amp; Link</h3>
                <a class="entry-image inner-caption link-overlay" href="#" title="Image Title">
                    <span class="overlay"></span>
                    <img src="images/entries/220x140/canoes-on-moraine-lake-220x140.png" alt="">
                    <div><p>Image with Inner Caption &amp; Link</p></div>
                </a>
            </div>
            <div class="clear"></div>
       
            <h3>Left-Aligned</h3>
            <div class="entry-image alignleft"><img src="images/entries/220x140/southern-alps-220x140.png" alt="" title="Image Title"></div>
            <p>Vestibulum quis diam purus. Nulla id enim vel quam lacinia elementum. Phasellus a hendrerit enim. Suspendisse lacinia nulla lacinia tellus convallis non luctus tortor iaculis. Nam cursus augue sed lectus consequat non laoreet nulla sodales. Nunc sagittis sapien at urna mollis in porta sem mattis. Duis venenatis odio erat. Nullam nec commodo risus. Integer arcu eros, luctus in suscipit at, blandit in lectus. Quisque justo lorem, vulputate quis fermentum ac, cursus non leo.</p>
            <p>Fusce est eros, facilisis at sodales elementum, mollis eget erat. Vivamus vitae augue dolor, non accumsan ligula. Cras sed risus sed dolor scelerisque tempor. Duis vel lacus massa, sed vulputate sapien. Aenean at ligula risus. Quisque eget quam tellus. Sed tellus est, viverra eu feugiat ac, placerat nec tortor. Proin sodales nisi nec dolor aliquet id ornare odio eleifend. Pellentesque sem magna, rhoncus in sodales eget, tincidunt nec ante. Etiam ultricies pretium libero interdum accumsan. Proin facilisis tristique diam, eget consequat nunc euismod at. Quisque suscipit, justo id faucibus sollicitudin, purus lectus placerat massa, id euismod enim nibh faucibus nisi. In commodo lectus nec lorem eleifend pulvinar. Proin egestas condimentum est, ut dapibus urna mollis id.</p>
            
            <h3>Right-Aligned</h3>
            <div class="entry-image alignright"><img src="images/entries/220x140/spring-220x140.png" alt="" title="Image Title"></div>
            <p>Vestibulum quis diam purus. Nulla id enim vel quam lacinia elementum. Phasellus a hendrerit enim. Suspendisse lacinia nulla lacinia tellus convallis non luctus tortor iaculis. Nam cursus augue sed lectus consequat non laoreet nulla sodales. Nunc sagittis sapien at urna mollis in porta sem mattis. Duis venenatis odio erat. Nullam nec commodo risus. Integer arcu eros, luctus in suscipit at, blandit in lectus. Quisque justo lorem, vulputate quis fermentum ac, cursus non leo.</p>
            <p>Fusce est eros, facilisis at sodales elementum, mollis eget erat. Vivamus vitae augue dolor, non accumsan ligula. Cras sed risus sed dolor scelerisque tempor. Duis vel lacus massa, sed vulputate sapien. Aenean at ligula risus. Quisque eget quam tellus. Sed tellus est, viverra eu feugiat ac, placerat nec tortor. Proin sodales nisi nec dolor aliquet id ornare odio eleifend. Pellentesque sem magna, rhoncus in sodales eget, tincidunt nec ante. Etiam ultricies pretium libero interdum accumsan. Proin facilisis tristique diam, eget consequat nunc euismod at. Quisque suscipit, justo id faucibus sollicitudin, purus lectus placerat massa, id euismod enim nibh faucibus nisi. In commodo lectus nec lorem eleifend pulvinar. Proin egestas condimentum est, ut dapibus urna mollis id.</p>
        </section>
        <!-- end images -->	
        
        <!-- begin video -->
        <section>
            <h2>Video</h2>
            <div class="one-half">
            	<h3>Vimeo</h3>
                <div class="entry-video">
            		<iframe src="http://player.vimeo.com/video/58413545?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="460" height="259" allowFullScreen></iframe>
                </div>
            </div>
            <div class="one-half column-last">
            	<h3>YouTube</h3>
                <div class="entry-video">
                	<iframe width="460" height="259" src="http://www.youtube.com/embed/KM-4KCWJ1YY?rel=0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <!-- end video -->
    </div>    
    </section>
    <!-- end content -->  <!-- begin footer -->
	<?php include('includes/footer.php'); ?>
	<!-- end footer -->  
</div>
<!-- end container -->
</body>
</html>