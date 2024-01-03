<?php

namespace App\Utils;

final class Debug
{
    /**
     * Método responsável por mostrar na tela os dados de uma forma mais organizada e legível
     * dd = DumpAndDie
     *
     * @param mixed $args - Variáveis que serão mostradas na tela
     * @return void
     */
    public static function dd(mixed $args)
    {
        echo "<pre>";
        print_r($args);
        echo "</pre>";
        die();
    }
}
