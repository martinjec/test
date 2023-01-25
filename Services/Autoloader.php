<?php

spl_autoload_register('autoloader');

function autoloader($class)
{
    $path =  str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        include $path;
    }
}
