<?php //@skip-indexing ?>
<?php

include_once (dirname(__FILE__) . '/settings.php');
require_once (dirname(__FILE__) . '/mailchimp/MCAPI.class.php');

try {
    if (array_key_exists('email', $_POST)) {
        if (empty($mailchimp_api_key)) {
            throw new Exception('The MailChimp API key is not specified.');
        }
        if (empty($mailchimp_list_id)) {
            throw new Exception('The MailChimp List ID is not specified.');
        }
        $email = $_POST['email'];
        $mailchimp_api = new MCAPI($mailchimp_api_key);
        $ret_val = $mailchimp_api->listSubscribe($mailchimp_list_id, $email);

        if (!$ret_val || $mailchimp_api->errorCode) {
            $error_code = 'Your email address couldn\'t be subscribed because a server error occurred.';
            $error_code .= 'Details: code=' . $mailchimp_api->errorCode . ', msg=' . $mailchimp_api->errorMessage;
            throw new Exception($error_code);
        }
    } else {
        throw new Exception('The email address is not specified.');
    }
    header($_SERVER['SERVER_PROTOCOL'] . ' 200 OK');
} catch (Exception $e) {
    header($_SERVER['SERVER_PROTOCOL'] . " 500 Internal Server Error");
    echo $e->getMessage();
}
die();