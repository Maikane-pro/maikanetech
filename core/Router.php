<?php

class Router {
    private $routes = [];

    public function addRoute($method, $path, $handler) {
        $this->routes[] = compact('method', 'path', 'handler');
    }

    public function resolve($method, $path) {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $path) {
                return call_user_func($route['handler']);
            }
        }
        throw new Exception('No route matched.');
    }
}

?>