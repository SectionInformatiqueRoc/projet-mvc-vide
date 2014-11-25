<?php

define('MVC', '/var/www/tp-mvc/mvc/');
define('INSTALL', '/var/www/tp-mvc/installs/install01/');


error_reporting(E_ALL | E_PARSE);
header('Cache-Control: max-age=1');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('html_errors', '1');
header('Content-Type: text/html; charset=UTF-8');

include(MVC . 'index.php');

