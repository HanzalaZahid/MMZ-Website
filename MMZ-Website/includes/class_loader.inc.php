<?php

function autoloadModelClasses($class)
{
    $file = __DIR__ . '/../classes/models/' . $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
}

function autoloadViewClasses($class)
{
    $file = __DIR__ . '/../classes/views/' . $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
}

function autoloadControllerClasses($class)
{
    $file = __DIR__ . '/../classes/controllers/' . $class . '.php';
    if (file_exists($file)) {
        require $file;
    }
}

spl_autoload_register('autoloadModelClasses');
spl_autoload_register('autoloadViewClasses');
spl_autoload_register('autoloadControllerClasses');
