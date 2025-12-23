<?php

namespace system\bootstrap;

class Autoload
{
    public function Autoloader()
    {

        spl_autoload_register(function ($className) {
            $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
            include_once $_SERVER['DOCUMENT_ROOT'] . '/' . $className . '.php';
        });
    }
}
