<?php
require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';
use Framework\Router;

// require basePath('Framework/Router.php');
// require basePath('Framework/Database.php');

// Instantiate the routes
$router = new Router();

// Get Routes
$routes = require basePath('routes.php');

// Get current URI and HTTP Method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);
