<?php

namespace App\Services;

class Page
{
    public static function getPagePart(string $pagePartName): void
    {
        include_once "views/components/" . $pagePartName . ".php";
    }

}
