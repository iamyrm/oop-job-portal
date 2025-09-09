<?php
require '../helpers.php';

require basePath('Router.php');
require basePath('Database.php');

// Instantiate the routes
$router = new Router();

// Get Routes
$routes = require basePath('routes.php');

// Get current URI and HTTP Method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);
