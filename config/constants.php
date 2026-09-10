<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
$websiteAutoUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$appName = 'AGILE CARES';

// $websiteUrl = 'https://agilecares.com'; /// Live Url
$websiteUrl = 'http://localhost/weblist-studio/agilecares'; /// Local Url
// $websiteUrl = 'http://172.20.10.4/weblist-studio/agilecares'; /// Local Url


// $websitePath = $_SERVER['DOCUMENT_ROOT'];
$websitePath = $_SERVER['DOCUMENT_ROOT'] . '/weblist-studio/agilecares'; //dirname(__FILE__);
$codeVersion = '1.1';
?>
<script>
	var websiteUrl = "<?php echo $websiteUrl; ?>";
</script>