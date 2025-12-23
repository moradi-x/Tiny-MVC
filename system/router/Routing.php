<?php

namespace system\router;

use ReflectionMethod;

class Routing
{

    private $current_route;

    public function __construct()
    {
        global $current_route; // یک ارایه که یو ار ال ما با اسلش در هر اندیکسش قرار دارد
        $this->current_route = explode('/', $current_route);
    }

    public function run()
    {
        // برای گشتن و پیدا کردن اسم کلاس
        $path = realpath(dirname(__FILE__) . "/../../application/controllers/" . $this->current_route[0] . ".php");
        if (!file_exists($path)) {
            echo "404 - file not exist...";
            exit;
        }

        require_once($path);

        sizeof($this->current_route) == 1 ? $method = "index" : $method = $this->current_route[1]; // تشخیص متد از یوارال

        $class = 'application\controllers\\' . $this->current_route[0];
        $object = new $class;

        if (method_exists($object, $method)) {
            $reflection = new reflectionMethod($class, $method);
            $parameterCount = $reflection->getNumberOfParameters(); // تعداد پارامتر مورد نیاز متد درون متغیر ریخته شد

            if ($parameterCount <= count(array_slice($this->current_route, 2))) {
                // میاد و ارایه ای ک بهش دادی از اون عدد به بعد توی یک ارایه دیگ میریزه 
                call_user_func_array(array($object, $method), array_slice($this->current_route, 2));
                // میاد و به صورت ارابه نام کلاس و نام متد  و ارگون های متد کلاس رو بهش میدی و چاپ میکنه 
            } else {
                echo "404 - parametr error...";
            }
        } else {
            echo "404 - method not exist!...";
        }
    }
}
