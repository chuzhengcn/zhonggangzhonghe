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
	
	<title>Inceptio - Pricing Tables</title>
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
            <h1 class="one-half">Pricing Tables</h1>
            <nav id="breadcrumbs" class="one-half column-last">
                <ul>
                    <li><a href="index.php">Home</a> &rsaquo;</li>
                    <li><a href="icon-boxes.php">Shortcodes</a> &rsaquo;</li>
                    <li>Pricing Tables</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
    
    <!-- begin content -->
    <section id="content">
    	<div class="container clearfix">
    	<!-- begin pricing tables four columns -->
        <section>
            <h2>Pricing Tables &ndash; Four Columns</h2>
                            
            <div class="pricing-box pricing-table one-fourth">
                <header class="header">
                    <div class="title">Basic</div>
                    <div class="price">
                        <span>$20</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>5</strong> Users</li>
                    <li><strong>10</strong> Forms</li>
                    <li><strong>20</strong> Reports</li>
                    <li><strong>500</strong> Entries / Month</li>
                    <li>&mdash;</li>
                    <li>&mdash;</li>
                    <li><strong>3 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button black">Order Now</a>
                </footer>
            </div>
            
            <div class="pricing-box pricing-table one-fourth">
                <header class="header">
                    <div class="title">Standard</div>
                    <div class="price">
                        <span>$50</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>20</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>3,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>15 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button black">Order Now</a>
                </footer>
            </div>
            
            <div class="pricing-box pricing-table featured one-fourth">
                <header class="header">
                    <div class="title">Plus</div>
                    <div class="price">
                        <span>$100</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>60</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>15,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>40 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button">Order Now</a>
                </footer>
            </div>
            
            <div class="pricing-box pricing-table one-fourth column-last">
                <header class="header">
                    <div class="title">Pro</div>
                    <div class="price">
                        <span>$150</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>120</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>100,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>100 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button black">Order Now</a>
                </footer>
            </div>
            <div class="clear"></div>
        </section>
        <!-- end pricing tables four columns -->
            
        <!-- begin pricing tables three columns -->
        <section>
            <h2>Pricing Tables &ndash; Three Columns</h2>
            
            <div class="pricing-box pricing-table one-third">
                <header class="header">
                    <div class="title">Standard</div>
                    <div class="price">
                        <span>$50</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>20</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>3,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>15 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button black">Order Now</a>
                </footer>
            </div>
            
            <div class="pricing-box pricing-table featured one-third">
                <header class="header">
                    <div class="title">Plus</div>
                    <div class="price">
                        <span>$100</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>60</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>15,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>40 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button">Order Now</a>
                </footer>
            </div>
            
            <div class="pricing-box pricing-table one-third column-last">
                <header class="header">
                    <div class="title">Pro</div>
                    <div class="price">
                        <span>$150</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>120</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>100,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>100 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button black">Order Now</a>
                </footer>
            </div>
            <div class="clear"></div>
        </section>
        <!-- end pricing tables three columns --> 
        
    	<!-- begin pricing boxes four columns -->
        <section>
            <h2>Pricing Boxes &ndash; Four Columns</h2>
                            
            <div class="pricing-box one-fourth">
                <header class="header">
                    <div class="title">Basic</div>
                    <div class="price">
                        <span>$20</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>5</strong> Users</li>
                    <li><strong>10</strong> Forms</li>
                    <li><strong>20</strong> Reports</li>
                    <li><strong>500</strong> Entries / Month</li>
                    <li>&mdash;</li>
                    <li>&mdash;</li>
                    <li><strong>3 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button black">Order Now</a>
                </footer>
            </div>
            
            <div class="pricing-box one-fourth">
                <header class="header">
                    <div class="title">Standard</div>
                    <div class="price">
                        <span>$50</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>20</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>3,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>15 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button black">Order Now</a>
                </footer>
            </div>
            
            <div class="pricing-box featured one-fourth">
                <header class="header">
                    <div class="title">Plus</div>
                    <div class="price">
                        <span>$100</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>60</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>15,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>40 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button">Order Now</a>
                </footer>
            </div>
            
            <div class="pricing-box one-fourth column-last">
                <header class="header">
                    <div class="title">Pro</div>
                    <div class="price">
                        <span>$150</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>120</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>100,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>100 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button black">Order Now</a>
                </footer>
            </div>
            <div class="clear"></div>
        </section>
        <!-- end pricing boxes four columns -->
            
         <!-- begin pricing boxes three columns -->
        <section>
            <h2>Pricing Boxes &ndash; Three Columns</h2>
            
            <div class="pricing-box one-third">
                <header class="header">
                    <div class="title">Standard</div>
                    <div class="price">
                        <span>$50</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>20</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>3,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>15 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button black">Order Now</a>
                </footer>
            </div>
            
            <div class="pricing-box featured one-third">
                <header class="header">
                    <div class="title">Plus</div>
                    <div class="price">
                        <span>$100</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>60</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>15,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>40 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button">Order Now</a>
                </footer>
            </div>
            
            <div class="pricing-box one-third column-last">
                <header class="header">
                    <div class="title">Pro</div>
                    <div class="price">
                        <span>$150</span>
                        <sup>/month</sup>
                    </div>
                </header>
                <ul class="features">
                    <li><strong>120</strong> Users</li>
                    <li><strong>Unlimited</strong> Forms</li>
                    <li><strong>Unlimited</strong> Reports</li>
                    <li><strong>100,000</strong> Entries / Month</li>
                    <li><strong>SSL</strong> Encryption</li>
                    <li><strong>Payment</strong> Integration</li>
                    <li><strong>100 GB</strong> Storage</li>
                </ul> 
                <footer class="footer">
                    <a href="#" class="button black">Order Now</a>
                </footer>
            </div>
            <div class="clear"></div>
        </section>
        <!-- end pricing boxes three columns --> 
    </div>    
    </section>
    <!-- end content -->  <!-- begin footer -->
	<?php include('includes/footer.php'); ?>
	<!-- end footer -->  
</div>
<!-- end container -->
</body>
</html>