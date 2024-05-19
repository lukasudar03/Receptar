<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($classname){
    $path = 'JS/';
    $extension = '.js';
    $fileName = $path . $classname . $extension;

    if(!file_exists($fileName)){
        return false;
    }
    include_once  $path . $classname . $extension;
}