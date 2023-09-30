<?php

namespace App\Services;

class Router
{
    private static array $list = [];

    public static function page(string $uri = '', string $page_name = ''): void
    {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name,
        ];
    }

    public static function enable(): void
    {
        foreach (self::$list as $route) {
            if ($route['uri'] === "/" . $_GET['q']) {
                include_once "views/pages/" . $route['page'] . ".php";
                die();
            }
        }

        self::notFound();
    }

    private static function notFound(): void
    {
        include_once "views/errors/404.php";
    }
}
