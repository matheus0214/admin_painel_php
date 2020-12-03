<?php

function set_internal_server_error($errno, $errstr, $errfile, $errline)
{
    // echo $errno . "<br />";
    // echo $errstr . "<br />";
    // echo $errfile . "<br />";
    // echo $errline . "<br />";
    http_response_code(500);
    if (!DEBUG) {
        exit;
    }

    switch ($errno) {
        case E_USER_ERROR:
            echo "<strong>Error</strong> [" . $errno . "] " . $errstr . "<br />";
            echo "<strong>File</strong> [" . $errfile . "] " . "<br />";
            echo "<strong>Line</strong> [" . $errline . "] " . "<br />";
            break;
        case E_USER_WARNING:
            echo "<strong>Warning</strong> [" . $errno . "] " . $errstr . "<br />";
            echo "<strong>File</strong> [" . $errfile . "] " . "<br />";
            echo "<strong>Line</strong> [" . $errline . "] " . "<br />";
            break;
        case E_USER_NOTICE:
            echo "<strong>Notice</strong> [" . $errno . "] " . $errstr . "<br />";
            echo "<strong>File</strong> [" . $errfile . "] " . "<br />";
            echo "<strong>File</strong> [" . $errfile . "] " . "<br />";
            break;
        default:
            echo "<strong>Unknow error type</strong> [" . $errno . "] " . $errstr . "<br />";
            echo "<strong>File</strong> [" . $errfile . "] " . "<br />";
            echo "<strong>Line</strong> [" . $errline . "] " . "<br />";
            break;
    }
    exit;
}

set_error_handler("set_internal_server_error");
set_exception_handler("set_internal_server_error");