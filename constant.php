<?php
$app_url = 'http://localhost/practice/CL';
define('APP_URL', $app_url);
$current_url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
define('CURRENT_URL', $current_url);
$current_uri = trim(str_replace($app_url, "", $current_url), '/');
define('CURRENT_URI', $current_uri);
$current_uri_arr = !empty($current_uri) ? explode('/', $current_uri) : [];
define('CURRENT_URI_ARR', $current_uri_arr);


$resources_url = 'http://localhost/practice/CL/resources';
define('RESOURCES_URL', $resources_url);
define('ROOT_DIR', __DIR__);

define('DB_HOST', '127.0.0.1');
define('DB_PORT', '3306');
define('DB_DATABASE', 'cli');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_TABLE_PREFIX', 'cli_');

session_start();