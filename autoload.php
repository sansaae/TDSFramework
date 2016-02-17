<?php

/**
 * Description of autoloads
 *
 * @author Teodor
 */

function autoload_classes($class)
{
    $filepath = __DIR__.DIRECTORY_SEPARATOR.'Core'.DIRECTORY_SEPARATOR.  str_replace("\\", DIRECTORY_SEPARATOR, $class).'.php';
    if(file_exists($filepath)){
        require_once $filepath;
    }
}
spl_autoload_register('autoload_classes');