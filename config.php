<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$ip = $_SERVER['HTTP_HOST'];

// HTTP
// define('HTTP_SERVER', 'http://test.com/');
// // HTTPS
// define('HTTPS_SERVER', 'http://test.com/');

// HTTP
define('HTTP_SERVER', 'http://' . $ip . '/');
// HTTPS
define('HTTPS_SERVER', 'http://' . $ip . '/');



// DIR
define('DIR_APPLICATION', $root . '/catalog/');
define('DIR_SYSTEM', $root . '/system/');
define('DIR_IMAGE', $root . '/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
$host = explode('.', str_replace('www.','',$_SERVER['HTTP_HOST']));
if (sizeof($host) > 2) $db = $host[0];
else $db = 'opencart';

define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'mysql-container');
define('DB_USERNAME', 'samuel');
define('DB_PASSWORD', '1234');
define('DB_DATABASE', $db);
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');