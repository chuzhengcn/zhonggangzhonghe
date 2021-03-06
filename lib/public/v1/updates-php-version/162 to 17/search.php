<?php //@skip-indexing ?>
<?php
session_start();

include_once (dirname(__FILE__) . '/settings.php');
include_once (dirname(__FILE__) . '/admin/util.php');
include_once (dirname(__FILE__) . '/admin/db.php');
require_once 'Zend/Search/Lucene.php';

setlocale(LC_CTYPE, LOCALE);
$all_settings = get_all_settings();
Zend_Search_Lucene_Search_QueryParser::setDefaultEncoding('utf-8');
Zend_Search_Lucene_Analysis_Analyzer::setDefault(new Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8_CaseInsensitive ());
$index = new Zend_Search_Lucene(get_setting('search_indexes_folder', $all_settings));
$search = $_REQUEST['s'];
$hits = $index->find(strtolower($search));
$current_page = array_key_exists('p', $_REQUEST)? $_REQUEST['p'] : '0';
$current_page = (intval($current_page)==0)? 1 : intval($current_page);
$current_page = max(1, min(count($hits), $current_page));

$items_per_page = get_setting('search_result_items', $all_settings);
$no_of_pages = intval(count($hits)/$items_per_page);
if(count($hits) % get_setting('search_result_items', $all_settings) > 0){
    $no_of_pages++;
}
$prev_page = ($current_page-1 > 0)? $current_page-1 : -1;
$next_page = ($current_page+1 <= $no_of_pages)? $current_page+1 : -1;
?>

<!DOCTYPE HTML>
<!--[if IE 8]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
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

    <title>Inceptio - Search Results</title>
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
            <h1 class="one-half">Search Results</h1>
            <nav id="breadcrumbs" class="one-half column-last">
                <ul>
                    <li><a href="index.php">Home</a> &rsaquo;</li>
                    <li><a href="about-us.php">Templates</a> &rsaquo;</li>
                    <li>Search Results</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->

    <!-- begin content -->
    <section id="content">
        <div class="container clearfix">

            <p><?php echo count($hits);?> results found for &lsquo;<?php echo htmlentities($search);?>&rsquo;.</p>

            <!-- begin search results -->
            <ul id="search-results">
                <?php
                for($i = (($current_page-1)*$items_per_page); $i<min(($current_page*$items_per_page), count($hits)); $i++){
                    $page_title = $hits[$i]->getDocument()->getFieldValue('title');
                    $url = $hits[$i]->getDocument()->getFieldValue('url');
                    try{
                        $short_description = $hits[$i]->getDocument()->getFieldValue('body');
                        $first_pos = stripos($short_description, $search);
                        if($first_pos){
                            $short_description = substr($short_description, $first_pos, intval(get_setting('search_description_length', $all_settings)));
                            if($first_pos > 0){
                                $short_description = '&hellip; '.$short_description;
                            }
                        }else{
                            $short_description = '';
                        }
                    }catch(Exception $e){
                        $short_description = '';
                    }

                    $page_title = preg_replace("/$search/i", '<strong>$0</strong>', $page_title);
                    $short_description = preg_replace("/$search/i", '<strong>$0</strong>', $short_description);

                    echo '<li>';
                    echo '<h2><a href="'.$url.'">'.$page_title.'</a></h2>';
                    echo '<p>'.$short_description.' &hellip;</p>';
                    echo '<p><a href="'.$url.'">'.$url.'</a></p>';
                    echo '</li>';
                }
                ?>
            </ul>
            <!-- end search results -->

            <!-- begin pagination -->
            <?php
            if(count($hits) > 0){
                echo '<nav class="page-nav">';
                echo '<span>Page '.$current_page.' of '.$no_of_pages.'</span>';
                echo '<ul>';
                echo '<li><a href="'.$_SERVER['PHP_SELF'].'?s='.$search.'">&laquo; First</a></li>';
                if($prev_page != -1){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?s='.$search.'&p='.$prev_page.'">&lsaquo; Previous</a></li>';
                }
                $start_page = max(1, 5*(intval($current_page/5)));
                $end_page = min($no_of_pages, $start_page+4);
                while($start_page<=$end_page){
                    if($start_page==$current_page){
                        echo '<li class="current">'.$start_page.'</li>';
                    }else{
                        echo '<li><a href="'.$_SERVER['PHP_SELF'].'?s='.$search.'&p='.$start_page.'">'.$start_page.'</a></li>';
                    }
                    $start_page++;
                }
                if($next_page != -1){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?s='.$search.'&p='.$next_page.'">Next &rsaquo;</a></li>';
                }
                if($no_of_pages > 1){
                    echo '<li><a href="'.$_SERVER['PHP_SELF'].'?s='.$search.'&p='.$no_of_pages.'">Last &raquo;</a></li>';
                }
                echo '</ul>';
                echo '</nav>';
            }
            ?>
            <!-- end pagination -->

        </div>
    </section>
    <!-- end content -->  <!-- begin footer -->
    <footer id="footer">
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
