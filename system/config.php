<?php

$base_url = "http://localhost/mvc/";
$base_dir = "/mvc/";

$tmp = explode('?', $_SERVER['REQUEST_URI']); // خروجی ارایه جدا شده با ؟
$current_route = str_replace($base_dir, '', $tmp[0]); // اون ام وی سی رو حذف میکنه از یو ار ال 
unset($tmp);

$dbHost = "localhost" ;
$dbName  = "mvc_blog" ;
$dbUserName = "root";
$dbPassword = "MM13831383";
