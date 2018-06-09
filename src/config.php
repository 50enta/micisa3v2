<?php

define('ROOT_PATH', dirname(__DIR__) . '/');

spl_autoload_register(function($class_name) {
    $file = str_replace('\\', '/', $class_name);
//    echo ROOT_PATH . "src/$file.php <br>";
    require ROOT_PATH . "src/$file.php";
});
