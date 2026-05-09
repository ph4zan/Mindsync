<?php

namespace Core;

class Router
{
    private array $routes = [];

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function put($uri, $action)
    {
        $this->routes['PUT'][$uri] = $action;
    }

    
    public function patch($uri, $action)
    {
        $this->routes['PATCH'][$uri] = $action;
    }

    public function delete($uri, $action)
    {
        $this->routes['DELETE'][$uri] = $action;
    }

    public function resolve()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestMethod = $_SERVER['REQUEST_METHOD'];
    
        foreach ($this->routes[$requestMethod] ?? [] as $route => $action) {
    
            // превращаем /tasks/{id} → regex
            $pattern = preg_replace('#\{[^/]+\}#', '([^/]+)', $route);
            $pattern = "#^" . $pattern . "$#";
    
            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // убираем полный матч
    
                [$controller, $method] = $action;
    
                $controller = new $controller();
    
                // передаём параметры (id)
                return $controller->$method(...$matches);
            }
        }
    
        http_response_code(404);
        echo "404";
    }
}