<?php

$base_url = "http://localhost/mvc/";
$base_dir = "/mvc/";

$tmp = explode('?', $_SERVER['REQUEST_URI']); 
$current_route = str_replace($base_dir, '', $tmp[0]); 
unset($tmp);

$dbHost = "localhost" ;
$dbName  = "mvc_blog" ;
$dbUserName = "root";
$dbPassword = "";
