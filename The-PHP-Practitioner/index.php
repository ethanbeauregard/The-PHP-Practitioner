<?php 

require 'vendor/autoload.php';

$database = require 'core/bootstrap.php';
$routes = new Router;


// require $routes->direct($uri);

// die(var_dump($app));
require Router::load('routes.php')
  ->direct(Request::uri(), Request::method());

