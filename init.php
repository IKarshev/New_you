<?
//SITE_DEFAULT_PATH
$isHttps = !empty($_SERVER['HTTPS']) && 'off' !== strtolower($_SERVER['HTTPS']);
$scheme = $isHttps ? "https" : "http";
define('SITE_DEFAULT_PATH', $scheme . '://' . $_SERVER['HTTP_HOST']);