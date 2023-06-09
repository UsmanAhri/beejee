<?php

class Router {
    protected $routes = [];

    public function addRoute($url, $controller, $method) {
        $this->routes[$url] = [
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function dispatch($url) {
        if (array_key_exists($url, $this->routes)) {
            $controllerName = $this->routes[$url]['controller'];
            $methodName = $this->routes[$url]['method'];

            $controller = new $controllerName();
            $controller->$methodName();
        } else {
            // Обработка ошибки: страница не найдена
            echo '404 Page Not Found';
        }
    }
}
