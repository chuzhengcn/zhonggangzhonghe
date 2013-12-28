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
	
	<title>Inceptio - Typography</title>
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
            <h1 class="one-half">Typography</h1>
            <nav id="breadcrumbs" class="one-half column-last">
                <ul>
                    <li><a href="index.php">Home</a> &rsaquo;</li>
                    <li><a href="icon-boxes.php">Shortcodes</a> &rsaquo;</li>
                    <li>Typography</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content">
    	<div class="container clearfix">
    <!-- begin intro -->
        <section>
            <h2>Intro</h2>
            <h3>Simple Intro</h3>
            <div class="intro">
                <h1><strong>Inceptio</strong> is a multi-purpose theme with a <strong>clean</strong> look, <strong>handy</strong> functionality and <strong>flexible</strong> customization possibilities.</h1>
                <div class="buttons-wrap">
                    <a href="#" class="button large black">Button Text</a>
                    <a href="#" class="button large">Button Text</a>
                </div>
            </div>
            
            <h3>Intro Box with a Ribbon</h3>
            <div class="introbox">
                <h1><strong>Inceptio</strong> is a multi-purpose theme with a <strong>clean</strong> look, <strong>handy</strong> functionality and <strong>flexible</strong> customization possibilities.</h1>
                <div class="buttons-wrap">
                    <a href="#" class="button large black">Button Text</a>
                    <a href="#" class="button large">Button Text</a>
                </div>
                <img src="images/ribbon-new.png" alt="New">
            </div>
            
            <h3>Intro Box without a Ribbon</h3>
            <div class="introbox">
                <h1><strong>Inceptio</strong> is a multi-purpose theme with a <strong>clean</strong> look, <strong>handy</strong> functionality and <strong>flexible</strong> customization possibilities.</h1>
                <div class="buttons-wrap">
                    <a href="#" class="button large black">Button Text</a>
                    <a href="#" class="button large">Button Text</a>
                </div>
            </div>
        </section>
        <!-- end intro -->
        
        <!-- begin infobox -->
        <section>
            <h2>Info Box</h2>
            <div class="infobox">
                <div class="infobox-inner">
                    <a class="button large" href="#">Button Text</a>
                    <div class="with-button">
                        <h2>Inceptio &ndash; Responsive Multi-Purpose Theme</h2>
                        <p>Inceptio is a multi-purpose theme with a clean look, handy functionality and flexible customization possibilities.</p>
                    </div>
                    <a class="button large mobile-button" href="#">Button Text</a>
                </div>
            </div>
        </section>
        <!-- end infobox -->
        
    	<!-- begin dropcaps -->
        <section class="one-fourth">
            <h2>Dropcaps</h2>
            <p><span class="dropcap simple">P</span>raesent eget elit vitae eros ornare euismod. Sed vel condimentum neque. Donec vel sem ac nisl accumsan mollis. Praesent est. Duis dignissim euismod porta.</p>
            <p><span class="dropcap with-bg">C</span>urabitur lectus neque, viverra sed convallis et, aliquam sit amet sem. Fusce non lectus sit amet tortor tincidunt sagittis et. Donec eu nisl dolor.</p>
        </section>
        <!-- end dropcaps -->
        
        <!-- begin highlights -->
        <section class="one-fourth">
            <h2>Highlights</h2>
            <p><mark class="highlight colored">Praesent eget elit vitae</mark> eros ornare euismod. Sed vel condimentum neque. Donec vel sem ac nisl accumsan mollis. Praesent est. Duis dignissim euismod porta.</p>
            <p><mark class="highlight black">Curabitur lectus neque</mark>, viverra sed convallis et, aliquam sit amet sem. Fusce non lectus sit amet tortor tincidunt sagittis et. Donec eu nisl dolor.</p>
        </section>
        <!-- end highlights -->
        
        <!-- begin preformatted text -->
        <section class="one-fourth">
            <h2>Computer Output</h2>
            <h3>Preformatted Text</h3>
<pre>
.container {
width: 92%;
padding: 4%;
margin: 0 auto;
}</pre>
            <h3>Computer Code</h3>
            <p>This is an example of computer code: <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>
        </section>
        <!-- end preformatted text -->
        
        <!-- begin blockquote -->
        <section class="one-fourth column-last">
            <h2>Blockquote</h2>
            <blockquote class="simple">
                <div class="quote-content">
                    <p>This is an example of a blockquote. Integer volutpat neque velit. Vestibulum posuere cursus ultrices. Proin ac ultricies velit. Phasellus quis sem magna. Nam dolor enim, sollicitudin et faucibus a, mollis ut nisl. Aliquam accumsan, sapien id elementum venenatis, sapien enim dapibus felis, non laoreet magna lacus sed sapien. Mauris eget dolor velit, at euismod est.</p>
                </div>	
                <div class="quote-meta">&mdash; Author, Profession, Company</div>
            </blockquote>
        </section>
        <!-- end blockquote -->
        
        <div class="clear"></div>
        
        <!-- begin lists -->
        <section>
            <h2>Lists</h2>
            <h3>Unordered Lists</h3>
            <div class="one-fourth">
                <ul class="arrow">
                    <li>Arrow List Item</li>
                    <li>Arrow List Item</li>
                    <li>Arrow List Item</li>
                    <li>Arrow List Item</li>
                </ul>
            </div>
            <div class="one-fourth">
                <ul class="circle">
                    <li>Circle List Item</li>
                    <li>Circle List Item</li>
                    <li>Circle List Item</li>
                    <li>Circle List Item</li>
                </ul>
            </div>
            <div class="one-fourth">
                <ul class="square">
                    <li>Square List Item</li>
                    <li>Square List Item</li>
                    <li>Square List Item</li>
                    <li>Square List Item</li>
                </ul>
            </div>
            <div class="one-fourth column-last">
                <ul class="check">
                    <li>Check List Item</li>
                    <li>Check List Item</li>
                    <li>Check List Item</li>
                    <li>Check List Item</li>
                </ul>
            </div>
            <div class="clear"></div>
            
            <div class="one-fourth">
                <ul class="green-arrow">
                    <li>Green Arrow List Item</li>
                    <li>Green Arrow List Item</li>
                    <li>Green Arrow List Item</li>
                    <li>Green Arrow List Item</li>
                </ul>
            </div>
            <div class="one-fourth">
                <ul class="green-plus">
                    <li>Green Plus List Item</li>
                    <li>Green Plus List Item</li>
                    <li>Green Plus List Item</li>
                    <li>Green Plus List Item</li>
                </ul>
            </div>
            <div class="one-fourth">
                <ul class="green-check">
                    <li>Green Check List Item</li>
                    <li>Green Check List Item</li>
                    <li>Green Check List Item</li>
                    <li>Green Check List Item</li>
                </ul>
            </div>
            <div class="clear"></div>
            
            <h3>Ordered Lists</h3>
            <div class="one-fourth">
                <ol class="decimal">
                    <li>Decimal List Item</li>
                    <li>Decimal List Item</li>
                    <li>Decimal List Item</li>
                    <li>Decimal List Item</li>
                </ol>
            </div>
            <div class="one-fourth">
                <ol class="upper-roman">
                    <li>Upper-Roman List Item</li>
                    <li>Upper-Roman List Item</li>
                    <li>Upper-Roman List Item</li>
                    <li>Upper-Roman List Item</li>
                </ol>
            </div>
            <div class="one-fourth">
                <ol class="lower-alpha">
                    <li>Lower-Alpha List Item</li>
                    <li>Lower-Alpha List Item</li>
                    <li>Lower-Alpha List Item</li>
                    <li>Lower-Alpha List Item</li>
                </ol>
            </div>
            <div class="one-fourth column-last">
                <ol class="upper-alpha">
                    <li>Upper-Alpha List Item</li>
                    <li>Upper-Alpha List Item</li>
                    <li>Upper-Alpha List Item</li>
                    <li>Upper-Alpha List Item</li>
                </ol>
            </div>
            <div class="clear"></div>
        </section>
        <!-- end lists -->
        
        <!-- begin dividers -->
        <section>
        	<h2>Dividers</h2>
            <h3>Simple Line Divider</h3>
            <hr>
            <h3>Double Line Divider</h3>
            <div class="divider-double-line"></div>
        </section>
        <!-- end dividers -->
    </div>    
    </section>
    <!-- end content -->  <!-- begin footer -->
	<?php include('includes/footer.php'); ?>
	<!-- end footer -->  
</div>
<!-- end container -->
</body>
</html>