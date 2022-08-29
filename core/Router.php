<?php

namespace Core;

class Router
{
    private static array $routes = [];

    public static function addRoute(string $uri, array $controllerAction): void
    {
        static::$routes[$uri] = $controllerAction;
    }

    public static function dispatch(string $requestUri): bool
    {
        if(array_key_exists($requestUri , static::$routes)){
            [$nameController , $nameAction] = static::$routes[$requestUri];
            $controllerObj = new $nameController;
            $controllerObj->$nameAction();
            return true;
        }

        foreach (Config::get('SERVE_DIRS') as $dir) {
            if (str_starts_with($requestUri, '/' . $dir)) {
                return false;
            }
        }
        http_response_code(404);
        return true;
    }
}

