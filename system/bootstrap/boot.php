<?php

require "./system/config.php" ;

require_once('system/bootstrap/Autoload.php');
$autoload = new \system\bootstrap\Autoload() ;
$autoload->Autoloader();

$router = new  \system\router\Routing();
$router->run();



