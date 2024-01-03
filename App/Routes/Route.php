<?php

namespace App\Routes;

final class Route
{   
    /**
     * Rotas da aplicação
     *
     * @var array
     */
    private static array $routes = [];


    /**
     * Método responsável por registrar uma nova rota na aplicação, uma rota do tipo GET
     *
     * @param string $uri - URI da rota
     * @param string $controller - Controller que será ativado
     * @param string $action - Método do controller que será ativado
     * @return void
     */
    public static function get(string $uri, string $controller, string $action): void
    {
        self::$routes[] = [
            "METHOD" => "GET",
            "CONTROLLER" => $controller,
            "ACTION"=> $action,
            "URI" => $uri,
        ];
    }


    /**
     * Método responsável por registrar uma nova rota na aplicação, uma rota do tipo POST
     *
     * @param string $uri - URI da rota
     * @param string $controller - Controller que será ativado
     * @param string $action - Método do controller que será ativado
     * @return void
     */
    public static function post(string $uri, string $controller, string $action): void
    {
        self::$routes[] = [
            "METHOD" => "POST",
            "CONTROLLER" => $controller,
            "ACTION"=> $action,
            "URI" => $uri,
        ];
    }


    /**
     * Método responsável por registrar uma nova rota na aplicação, uma rota do tipo PUT
     *
     * @param string $uri - URI da rota
     * @param string $controller - Controller que será ativado
     * @param string $action - Método do controller que será ativado
     * @return void
     */
    public static function put(string $uri, string $controller, string $action): void
    {
        self::$routes[] = [
            "METHOD" => "PUT",
            "CONTROLLER" => $controller,
            "ACTION"=> $action,
            "URI" => $uri,
        ];
    }


    /**
     * Método responsável por registrar uma nova rota na aplicação, uma rota do tipo DELETE
     *
     * @param string $uri - URI da rota
     * @param string $controller - Controller que será ativado
     * @param string $action - Método do controller que será ativado
     * @return void
     */
    public static function delete(string $uri, string $controller, string $action): void
    {
        self::$routes[] = [
            "METHOD" => "DELETE",
            "CONTROLLER" => $controller,
            "ACTION"=> $action,
            "URI" => $uri,
        ];
    }

    /**
     * Método responsável por retornar as rotas
     *
     * @return array
     */
    public static function getRoutes(): array
    {
        return self::$routes;
    }

}
