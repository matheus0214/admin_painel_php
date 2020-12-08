<?php

function resolve_path(string $path)
{
    $current = $_SERVER["REDIRECT_URL"] ?? "/";

    $regexp = "/" . str_replace("/", "\/", $path) . "\/?$/";

    if (preg_match($regexp, $current, $matches)) {
        return $matches;
    }

    return false;
}