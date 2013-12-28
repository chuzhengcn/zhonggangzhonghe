<?php //@skip-indexing ?>
<?php
$paths = array(realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR));
set_include_path(implode(PATH_SEPARATOR, $paths));

include_once (dirname(__FILE__) . '/settings.php');
include_once (dirname(__FILE__) . '/admin/util.php');
include_once (dirname(__FILE__) . '/admin/db.php');
require_once 'Zend/Search/Lucene.php';

global $my_email;
global $private_key;
global $server_path;
$all_settings = get_all_settings();

$status = 'forbidden';
$success_msg = '';
$error_msg = '';
$warning_msg = '';
$http_method = strtolower($_SERVER['REQUEST_METHOD']);
$action = array_key_exists('action', $_REQUEST)? $_REQUEST['action'] : '';

if ((strlen(trim($server_path)) == 0)) {
    $settings_file_name = dirname(__FILE__) . DIRECTORY_SEPARATOR . "settings.php";
    $file = fopen($settings_file_name, 'a');
    if ($file) {
        fwrite($file, "\n\$server_path='" . $settings_file_name . "';");
        fclose($file);
    }
}

if ((strlen(trim($private_key)) == 0)) {
    if ($http_method == 'get') {
        $status = 'private_key_must_be_generated';
    } elseif ($http_method == 'post') {
        generate_private_key();
        $status = 'private_key_generated';
    }
} elseif ($_REQUEST['pk'] == $private_key) {
    $status = 'display_settings';
    if ($http_method == 'get') {
        if ($action == 'rsi') {
            rebuild_search_indexes();
        }
    } elseif ($http_method == 'post') {
        if ($_POST['submit'] == 'restore') {
            $all_settings = restore_settings();
            $success_msg = 'The settings were successfully restored.';
        } else {
            try{
                $all_settings = save_custom_settings();
                $success_msg = 'The settings were successfully saved.';
            }catch (Exception $e) {
                $error_msg = $e->getMessage();
            }
        }
    }
}

function generate_private_key()
{
    global $my_email;
    $private_key = uniqid();
    $subject = 'Your Admin Page Private Link';
    $headers = "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $my_email\r\n";
    $admin_page_url = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    if (strpos($admin_page_url, '?')) {
        $admin_page_url = substr($admin_page_url, 0, strpos($admin_page_url, '?'));
    }
    $admin_page_url .= '?pk=' . $private_key;
    $message = '<html><body>Your admin page private link is <a href="' . $admin_page_url . '">' . $admin_page_url . '</a>.</body></html>';

    $file_name = dirname(__FILE__) . DIRECTORY_SEPARATOR . "settings.php";
    $file = fopen($file_name, 'a');
    if ($file) {
        fwrite($file, "\n\$private_key='" . $private_key . "';");
        fclose($file);
    }
    mail($my_email, $subject, $message, $headers);
}

function save_custom_settings()
{
    global $all_settings;
    $new_settings = array();
    $search_result_items = max(1, intval($_POST['search-result-items']));
    $public_html_dir = $_POST['public-html-dir'];
    $search_indexes_folder = $_POST['search-indexes-folder'];
    $search_description_length = $_POST['search-description-length'];
    $search_dynamic_pages = encode_dynamic_urls($_POST['search-dynamic-pages']);
    $search_exclude_from_indexing = encode_dynamic_urls($_POST['search-exclude-from-indexing']);

    check_public_html_existence($public_html_dir);

    if (get_setting('public_html_dir', $all_settings) != $public_html_dir) {
        $new_settings['public_html_dir'] = $public_html_dir;
    }
    if (get_setting('search_result_items', $all_settings) != $search_result_items) {
        $new_settings['search_result_items'] = $search_result_items;
    }
    if (get_setting('search_indexes_folder', $all_settings) != $search_indexes_folder) {
        $new_settings['search_indexes_folder'] = $search_indexes_folder;
    }
    if (get_setting('search_description_length', $all_settings) != $search_description_length) {
        $new_settings['search_description_length'] = $search_description_length;
    }
    if (get_setting('search_dynamic_pages', $all_settings) != $search_dynamic_pages) {
        $new_settings['search_dynamic_pages'] = $search_dynamic_pages;
    }
    if (get_setting('search_exclude_from_indexing', $all_settings) != $search_exclude_from_indexing) {
        $new_settings['search_exclude_from_indexing'] = $search_exclude_from_indexing;
    }
    save_settings($new_settings);

    $return_array = array();
    foreach ($all_settings as $key => $value) {
        $return_array[$key] = $value;
    }
    foreach ($new_settings as $key => $value) {
        $return_array[$key]['custom_value'] = $value;
    }
    return $return_array;
}

function rebuild_search_indexes()
{
    global $success_msg;
    global $error_msg;
    global $warning_msg;
    global $all_settings;
    global $indexable_folders;
    $index_folder = get_setting('search_indexes_folder', $all_settings);
    try {
        setlocale(LC_CTYPE, LOCALE);
        Zend_Search_Lucene_Analysis_Analyzer::setDefault(new Zend_Search_Lucene_Analysis_Analyzer_Common_Utf8_CaseInsensitive());
        $index = new Zend_Search_Lucene($index_folder, true);
        $files_to_index = get_website_files($indexable_folders);

        foreach ($files_to_index as $html_file => $page_url) {
            if(can_index_website_file($html_file)){
                $f1 = strtolower($html_file);
                if(end_with($f1, 'html') || end_with($f1, 'htm')){
                    $file_content = file_get_contents($html_file);
                }elseif(end_with($f1, 'php')){
                    if(is_http_code_200($page_url)){
                        $file_content = get_url_content($page_url);
                    }
                }
                if(isset($file_content)){
                    $file_content = '<html>'.strstr($file_content, '<head');
                    $doc = Zend_Search_Lucene_Document_Html::loadHTML($file_content, true, 'UTF-8');
                    $doc->addField(Zend_Search_Lucene_Field::Text('url', $page_url, 'UTF-8'));
                    $index->addDocument($doc);
                    flush();
                }
            }
        }

        $broken_urls = array();
        foreach (get_dynamic_urls(get_setting('search_dynamic_pages', $all_settings)) as $url) {
            if(is_http_code_200($url)){
                $content = get_url_content($url);
                $content = '<html>'.strstr($content, '<head');
                $doc = Zend_Search_Lucene_Document_Html::loadHTML($content, true, 'UTF-8');
                $doc->addField(Zend_Search_Lucene_Field::Text('url', $url, 'UTF-8'));
                $index->addDocument($doc);
                flush();
            }else{
                array_push($broken_urls, $url);
            }
        }

        if (file_exists($index_folder)) {
            if(count($broken_urls)>0){
                $warning_msg = '<p>The website was successfully indexed, but the following URL\'s were skipped because they are broken:</p>';
                $warning_msg .= '<ul class="disc">';
                foreach($broken_urls as $broken_url){
                    $warning_msg .= '<li><a href="'.$broken_url.'">'.$broken_url.'</a></li>';
                }
                $warning_msg .= '</ul>';
                $warning_msg .= '<p>Please remove them from the "List of dynamic pages" field.</p>';
            }else{
                $success_msg = 'The website was successfully indexed.';
            }
        } else {
            $error_msg = 'An error occurred during the website indexing. The error message is: the folder that stores the website indexes couldn\'t be created';
        }
    } catch (Exception $e) {
        $error_msg = 'An error occurred during the website indexing. The error message is: ' . $e->getMessage();
    }
}

function get_website_files($paths)
{
    global $all_settings;
    $public_html_dir = '/'.get_setting('public_html_dir', $all_settings).'/';
    if(!is_array($paths)){
        $paths = array($paths);
    }
    $html_files = array();
    foreach($paths as $path){
        $path = rtrim(str_replace("\\", "/", $path), '/') . '/';
        if(file_exists($path)){
            $entries = array();
            $dir = dir($path);
            while (false !== ($entry = $dir->read())) {
                $entries[] = $entry;
            }
            $dir->close();
            foreach ($entries as $entry) {
                $entry1 = strtolower($entry);
                if(end_with($entry1, 'html') || end_with($entry1, 'htm') || end_with($entry1, 'php')){
                    $fullname = $path . $entry;
                    if ($entry != '.' && $entry != '..' && is_dir($fullname)) {
                        //$html_files = array_merge($html_files, get_website_files($fullname));
                    } else if (is_file($fullname)) {
                        $html_files[$fullname] = get_url_for_html_file($public_html_dir, $path, $entry);
                    }
                }
            }
        }
    }
    return $html_files;
}

function get_url_for_html_file($public_html_dir, $path, $entry)
{
    $html_file = str_replace("\\", "/", $path . $entry);
    $site_url = 'http://' . $_SERVER["HTTP_HOST"];
    $i = strrpos($html_file, $public_html_dir);
    if ($i && $i >= 0) {
        return $site_url . '/' . substr($html_file, $i + strlen($public_html_dir));
    } else {
        return $site_url . '/' . $entry;
    }
}

function can_index_website_file($html_file)
{
    global $all_settings;
    foreach (get_dynamic_urls(get_setting('search_exclude_from_indexing', $all_settings)) as $excluded_file) {
        $excluded_file = rtrim(str_replace("\\", "/", $excluded_file), '/');
        $pos = strpos($html_file, $excluded_file);
        if($pos && $pos >= 0){
            return false;
        }
    }
    $file_content = file_get_contents($html_file);
    $pos = strpos($file_content, '@skip-indexing');
    if($pos && $pos >= 0){
        return false;
    }
    return true;
}

function get_url_content($url){
    $m = HTTP_CALL_METHOD;
    if($m == 'curl'){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }else{
        return file_get_contents($url);
    }
}

function is_http_code_200($url){
    $m = HTTP_CALL_METHOD;
    if($m == 'curl'){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_TIMEOUT,10);
        curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $http_code == 200;
    }else{
        $headers = get_headers($url);
        if(strrpos($headers[0], '200')){
            return true;
        }else{
            return false;
        }
    }

}

function end_with($haystack, $needle)
{
    $length = strlen($needle);
    $start = $length * -1; //negative
    return (substr($haystack, $start) === $needle);
}

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

    <title>Inceptio - Page with Right Sidebar</title>
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
            <h1 class="one-half">Page with Right Sidebar</h1>
            <nav id="breadcrumbs" class="one-half column-last">
                <ul>
                    <li><a href="index.php">Home</a> &rsaquo;</li>
                    <li><a href="about-us.php">Templates</a> &rsaquo;</li>
                    <li>Page with Right Sidebar</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->

    <!-- begin content -->
    <section id="content">
        <div class="container clearfix">
            <!-- begin main content -->
            <section id="main" class="three-fourths">
                <?php if ($status == 'private_key_must_be_generated') { ?>
                    <form id="admin-settings-form" class="content-form" method="post" action="<?=$_SERVER['PHP_SELF']?>">
                        <p>This page is locked. To unlock it, click the button bellow.</p>
                        <input class="button" type="submit" name="submit" value="Unlock Page">
                    </form>
                <?php } elseif ($status == 'private_key_generated') { ?>
                    <div class="notification-box notification-box-success">
                        <p>The link you must use to access the administration page has been successfully sent to your email.</p>
                        <a href="#" class="notification-close notification-close-success">x</a>
                    </div>
                <?php } elseif ($status == 'display_settings') { ?>
                    <?php if ($success_msg != '') { ?>
                        <div class="notification-box notification-box-success">
                            <p><?php echo $success_msg; ?></p>
                            <a href="#" class="notification-close notification-close-success">x</a>
                        </div>
                    <?php } elseif ($error_msg != '') { ?>
                        <div class="notification-box notification-box-error">
                            <p><?php echo $error_msg; ?></p>
                            <a href="#" class="notification-close notification-close-error">x</a>
                        </div>
                    <?php } elseif ($warning_msg != '') { ?>
                        <div class="notification-box notification-box-warning">
                            <?php echo $warning_msg; ?>
                            <a class="notification-close notification-close-warning" href="#">x</a>
                        </div>
                    <?php } ?>
                    <form id="admin-settings-form" class="content-form" method="post" enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF']?>">
                        <p>
                            <label for="public-html-dir">The name of the folder where the website is located:<span class="note">*</span></label>
                            <input id="public-html-dir" type="text" name="public-html-dir" value="<?php echo get_setting('public_html_dir', $all_settings); ?>" class="required">
                        </p>
                        <p>
                            <label for="search-indexes-folder">Path to the folder that contains the website indexes:<span class="note">*</span></label>
                            <input id="search-indexes-folder" type="text" name="search-indexes-folder" value="<?php echo get_setting('search_indexes_folder', $all_settings); ?>" class="required">
                        </p>
                        <p>
                            <label for="search-description-length">The description length:<span class="note">*</span></label>
                            <input id="search-description-length" size="3" type="text" name="search-description-length" value="<?php echo get_setting('search_description_length', $all_settings); ?>" class="required">
                        </p>
                        <p>
                            <label for="search-result-items">Search results items per page:<span class="note">*</span></label>
                            <input id="search-result-items" size="3" type="text" name="search-result-items" value="<?php echo get_setting('search_result_items', $all_settings); ?>" class="required">
                        </p>
                        <p>
                            <label for="search-dynamic-pages">List of dynamic pages (Enter one URL per line.):</label>
                            <textarea id="search-dynamic-pages" rows="3" cols="7" name="search-dynamic-pages"><?php echo base64_decode(get_setting('search_dynamic_pages', $all_settings)); ?></textarea>
                        </p>
                        <p>
                            <label for="search-exclude-from-indexing">List of HTML files or folders which must be excluded from indexing (Enter one per line.):</label>
                            <textarea id="search-exclude-from-indexing" rows="3" cols="7" name="search-exclude-from-indexing"><?php echo base64_decode(get_setting('search_exclude_from_indexing', $all_settings)); ?></textarea>
                        </p>
                        <p>
                            <label for="search-debug">Debug mode:</label>
                            <select id="search-debug" name="debug">
                                <option value="off">Off</option>
                                <option value="on">On</option>
                            </select>
                        </p>
                        <p>
                            <input type="hidden" name="pk" value="<?php echo $private_key;?>">
                            <input id="restore" class="button" type="submit" name="submit" value="Restore Defaults">
                            <input id="submit" class="button" type="submit" name="submit" value="Save Settings">
                        </p>
                    </form>
                <?php } else { ?>
                    <div class="notification-box notification-box-error">
                        <p>You have no rights to access this page.</p>
                        <a href="#" class="notification-close notification-close-error">x</a>
                    </div>
                <?php } ?>
            </section>
            <!-- end main content -->

            <!-- begin sidebar -->
            <aside id="sidebar" class="one-fourth column-last">
                <div class="widget">
                    <h3>Admin Menu</h3>
                    <nav>
                        <ul class="menu">
                            <li class="current-menu-item"><a href="admin.php?pk=<?php echo $private_key;?>">Administration dashboard</a></li>
                            <li><a href="admin.php?action=rsi&amp;pk=<?php echo $private_key;?>">Rebuild search indexes</a></li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- end sidebar -->
        </div>
    </section>
    <!-- end content -->

    <!-- begin footer -->
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