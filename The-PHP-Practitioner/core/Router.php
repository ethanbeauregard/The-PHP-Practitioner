<?php



class Router {
  protected $routes = [];

  public function define($routes) {
    $this->routes = $routes;
  }

  public static function load($file) {
    
    $routes = new static;
    require $file;
    
    return $routes;
  }

  public function direct($uri) {
    // example.com/about/culture

    if(array_key_exists($uri, $this->routes)){
      return $this->routes[$uri];
    } else {
      throw new Exception('No route defined for this URI');
    }

    
  }

}