<?php

$raiz = $_SERVER['DOCUMENT_ROOT'];
$ip = $_SERVER['HTTP_HOST'];

$folder = '/admin';
$folderUp = str_replace(strrchr($folder,'/'),'',$folder);
$up = $raiz . $folderUp ;

// HTTP
define('HTTP_SERVER', 'http://' . $ip . $folder . '/');
define('HTTP_CATALOG', 'http://' . $ip . $folderUp . '/');

// HTTPS
define('HTTPS_SERVER', 'http://' . $ip . $folder . '/');
define('HTTPS_CATALOG', 'http://' . $ip . $folderUp . '/');

// HTTP
// define('HTTP_SERVER', 'http://test.com/admin/');
// define('HTTP_CATALOG', 'http://test.com/');

// // HTTPS
// define('HTTPS_SERVER', 'http://test.com/admin/');
// define('HTTPS_CATALOG', 'http://test.com/');

// DIR
define('DIR_APPLICATION', $up . '/admin/');
define('DIR_SYSTEM', $up . '/system/');
define('DIR_IMAGE', $up . '/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', '/html/virtual.com/opencart/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
$host = explode('.', str_replace(['www.','.com','.br'],'',$_SERVER['HTTP_HOST']));
if (sizeof($host) > 1) $db = $host[0];
else $db = 'opencart';

define('SSODB_DRIVER', 'mysqli');
define('SSODB_HOSTNAME', 'mysql-sso');
define('SSODB_USERNAME', 'root');
define('SSODB_PASSWORD', '1234');
define('SSODB_DATABASE', 'sso');
define('SSODB_PORT', '3308');
define('SSODB_PREFIX', 'oc_');

if ($db == 'sso'){ 
  define('DB_DRIVER', SSODB_DRIVER);
  define('DB_HOSTNAME', SSODB_HOSTNAME);
  define('DB_USERNAME', SSODB_USERNAME);
  define('DB_PASSWORD', SSODB_PASSWORD);
  define('DB_PORT', SSODB_PORT);
} else {
  define('DB_DRIVER', 'mysqli');
  define('DB_HOSTNAME', 'mysql-opencart');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '1234');
  define('DB_PORT', '3306');
}

define('DB_DATABASE', $db);
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
