<?php

namespace system\traits;

trait View
{

    protected function View($dir, $vars = null)
    {
        $dir  = str_replace('.', '/', $dir);
        if ($vars)
            extract($vars);
        $path = realpath(dirname(__FILE__) . "/../../application/view/" . $dir . ".php");
        if (file_exists($path)) {
            return require_once($path);
        } else {
            echo "this view [" . $dir . "] not exist";
        }
    }

    protected function asset($dir)
    {
        $base_url = "http://localhost:8000/";
        $path = $base_url . "public/" . $dir;
        echo $path;
        //  برای ادرس دهی پوشه پابلیک 
    }

    protected function  include($dir, $vars = null)
    {
        // برای ادرس دهی پوشه لایاوت و چرا متغیر پاس میده ؟ چون چیزی مثل منو از دیتابیس میاد و متغیره
        $dir  = str_replace('.', '/', $dir);
        if ($vars) {
            extract($vars);
        }
        $path = realpath(dirname(__FILE__) . "/../../application/view/" . $dir . ".php");
        if (file_exists($path)) {
            return require_once($path);
        } else {
            echo "this view [" . $dir . "] not exist";
        }
    }

    protected function url($url)
    {
        //  اسم کلاس و اسم متد رو فقط میگیره و ادرس دهی نمیکنه 
        if ($url[0] == '/') {
            $url = substr($url, 1, strlen($url) - 1);
        }
        $base_url = "http://localhost:8000/mvc/";
        echo $base_url . $url;
    }
}
