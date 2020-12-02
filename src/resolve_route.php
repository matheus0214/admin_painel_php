<?php

function resolve_path(string $path)
{
    $current = $_SERVER["PATH_INFO"] ?? "/";

    $regexp = "/^" . str_replace("/", "\/", $path) . "$/";

    if (preg_match($regexp, $current)) {
        return true;
    }

    return false;
}