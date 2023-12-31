<?php

namespace Router;

use Exception\RouteNotFound;

class Router
{
    private array $routes = [];

    public function __construct()
    {
    }

    public function register(string $path, callable|array $action): void
    {
        $this->routes[$path] = $action;
    }

    public function run(string $uri)
    {
        $path = explode('?', $uri)[0];
        $action = $this->routes[$path] ?? null;

        if (is_callable($action)) {
            return $action();
        }

        if (is_array($action)) {
            [$className, $method] = $action;
            if (class_exists($className) && method_exists($className, $method)) {
                $class = new $className();
                return call_user_func_array([$class, $method], []);
            }
        }

        new RouteNotFound();
    }
}
