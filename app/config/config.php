
<?php

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('URL_PROTOCOL', (isset($_SERVER['HTTPS']) && filter_var($_SERVER['HTTPS'], FILTER_VALIDATE_BOOLEAN)) ? 'https://' : 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST'] ?? '');
define('URL', URL_PROTOCOL . URL_DOMAIN . '/');
define('ROOT', __DIR__ . "/../");
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('STORAGE', __DIR__ . "/../storage/");
define('VIEWS', __DIR__ . "/../views/");
define('CACHE', __DIR__ . "/../views/");



define('USE_CACHE', false);