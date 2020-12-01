<?php

function resolve_path($path)
{
    $current = $_SERVER["PATH_INFO"] ?? "/";

    $regexp = "/^". str_replace("/", "\/", $path) ."$/";

    if(preg_match($regexp, $current)) {
        return true;
    }

    return false;
}

function render($template, $content)
{
    $content = __DIR__."/templates/" . $template . "/" . $content . ".tpl.php";
    return require __DIR__."/templates/default.tpl.php";
}

if(resolve_path("/admin/?(.*)")) {
    require __DIR__."/admin/routes.php";
} else if(resolve_path("/?(.*)")) {
    require __DIR__."/site/routes.php";
}