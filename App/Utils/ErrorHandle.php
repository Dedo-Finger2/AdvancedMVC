<?php

namespace App\Utils;

final class ErrorHandle
{
    public static function controller_file_not_found(string $controller)
    {
        throw new \Exception("Controller file <strong>$controller.php</strong> was not found.", 404);
    }
    
    
    public static function controller_not_found(string $controller)
    {
        throw new \Exception("Controller <strong>App\\Http\\Controllers\\$controller</strong> was not found.", 404);
    }
    
    
    public static function route_not_found(string $uri)
    {
        throw new \Exception("Route <strong>$uri</strong> not found.", 404);
    }


    public static function view_not_found(string $view)
    {
        throw new \Exception("View $view not found.", 404);
    }


    public static function layout_not_found(string $layout)
    {
        throw new \Exception("Layout $layout not found.", 404);
    }
}
