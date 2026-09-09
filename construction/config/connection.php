<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
$thename = 'AGILE CARES';
// $website = 'http://localhost/weblist-studio/agilecares.com/construction';
$website = 'https://agilecares.com';
$website_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";