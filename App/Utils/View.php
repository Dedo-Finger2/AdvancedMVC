<?php

namespace App\Utils;

trait View
{
    public static function render(string $view, array $data = [])
    {
        extract($data);

        if (!file_exists(__DIR__ ."/../Resources/Views/$view.php")) ErrorHandle::view_not_found($view);

        require_once __DIR__ ."/../Resources/Views/$view.php";
    }

    public static function renderWithLayout(string $layout, string $view, array $data = [])
    {
        extract($data);

        if (!file_exists(__DIR__ ."/../Resources/Views/$view.php")) ErrorHandle::view_not_found($view);
        if (!file_exists(__DIR__ ."/../Resources/Views/Layouts/$layout.layout.php")) ErrorHandle::layout_not_found($layout);

        ob_start();
        include(__DIR__ ."/../Resources/Views/$view.php");
        $content = ob_get_clean();

        require_once __DIR__ ."/../Resources/Views/Layouts/$layout.layout.php";
    }

}
