<?php


function getClass ($className) {
    $path = ROOT . DS . str_replace('\\', '/', $className);
    spl_autoload($path);
}
spl_autoload_register('getClass');