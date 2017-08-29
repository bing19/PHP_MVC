<?php


function getClass ($className) {
    $path = str_replace('\\', '/', $className);
    spl_autoload($path);
}
spl_autoload_register('getClass');