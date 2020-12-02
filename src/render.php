<?php

function render(string $template, string $content, array $variables = [])
{
    $content = __DIR__ . "/../templates/" . $template . "/" . $content . ".tpl.php";
    return require __DIR__ . "/../templates/default.tpl.php";
}