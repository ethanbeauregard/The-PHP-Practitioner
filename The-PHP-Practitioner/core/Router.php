<?php



class Router {
  protected $routes = [
    'GET' => [],
    'POST' => []
  ];

  

  public function get($uri, $controller) {
    $this->routes['GET'][$uri] = $controller;
  }

  public function post($uri, $controller) {
    $this->routes['POST'][$uri] = $controller;
  }

  public static function load($file) {
    
    $routes = new static;
    require $file;
    
    return $routes;
  }

  public function direct($uri, $requestType) {
    // example.com/about/culture

    if(array_key_exists($uri, $this->routes[$requestType])){
      return $this->routes[$requestType][$uri];
    } else {
      throw new Exception('No route defined for this URI');
    }

    
  }

}