<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('LARAVEL_START', microtime(true));

// Check for Maintenance Mode
if (file_exists(__DIR__ . '/storage/framework/maintenance.php')) {
    require __DIR__ . '/storage/framework/maintenance.php';
}

// Load Composer Autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Bootstrap the Application and get the Application instance.
$app = require_once __DIR__ . '/bootstrap/app.php';

// Capture the HTTP request.
$request = \App\Http\Request::capture();

// Handle the request.
$app->handleRequest($request);

?>