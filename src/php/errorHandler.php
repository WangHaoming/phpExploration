<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


function shutdown()
{
    $error = error_get_last();
    if (empty($error)) {
        return;
    }
    switch($error['type']){
        case(E_ERROR):   $type = "Fatal Error"; break;
        case(E_WARNING): $type = "Warning"; break;
        case(E_NOTICE):  $type = "Notice"; break;
        default:         $type = "Error";
    }

    var_dump($error['file'], $error['line'], $error['message']);
//    $date = new DateTime();
//    $line = sprintf("%s: %s. %s in %s on line %s\n",
//        $date->format('Y-m-d H:i:s'), $type, $error['message'],
//        $error['file'], $error['line']);
//    file_put_contents(dirname(__FILE__) . "/log.txt", $line,
//        FILE_APPEND | LOCK_EX);
}

register_shutdown_function('shutdown');

var_dump(Null.info());


