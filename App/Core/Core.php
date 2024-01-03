<?php

namespace App\Core;

use App\Utils\Debug;
use App\Utils\ErrorHandle;

class Core
{
    public static function run(array $routes)
    {
        try {
            $url = $_SERVER['REQUEST_URI'];
            
            $url = ($url != '/') ? rtrim($url, '/') : $url;

            $routeFound = false;

            foreach ($routes as $route) {
                $pattern = "#^". preg_replace("/{id}/", "([\w+])", $route['URI']) ."$#";
                
                if (preg_match($pattern, $url, $matches)) {
                    array_shift($matches);
                    
                    $routeFound = true;

                    self::executeController($route['CONTROLLER'], $route['ACTION'], $matches);
                }
            }

            if (!$routeFound) ErrorHandle::route_not_found($url);

        } catch (\Exception $e) {
            echo $e->getCode() . ": " .$e->getMessage();
            die();
        }
    }


    private static function executeController(string $controller, string $action, mixed $args)
    {
        $controllerFilePath = __DIR__ ."/../Http/Controllers/$controller.php";

        if (!file_exists($controllerFilePath)) ErrorHandle::controller_file_not_found($controller);

        $controllerNamespace = "App\\Http\\Controllers\\$controller";

        $controller = new $controllerNamespace;
        $controller->$action($args);
    }

}
