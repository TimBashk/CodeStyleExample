<?php

spl_autoload_register( 'psr4_autoloader' );

/**
 *
 * @param string $class
 * @return void
 */
function psr4_autoloader($class) {
    $class_path = str_replace('\\', '/', $class);

    $file =  'classes/' . $class_path . '.php';

    if (file_exists($file)) {
        require $file;
    }
}