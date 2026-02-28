<?php
// Entry point for the MVC application

// Autoload dependencies
require_once __DIR__ . '/vendor/autoload.php';

// Start the application
$app = new App();
$app->run();
?>