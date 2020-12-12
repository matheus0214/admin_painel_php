<?php

define("REGEXP", "/(\/?admin|\/?pages)\/?.*/");

function get_user()
{
    return $_SESSION["user"] ?? null;
}

function auth_protection()
{
    $user = get_user();

    if (!$user && !preg_match("/\/login/", $_SERVER["REDIRECT_URL"])) {
        return header("location: " . preg_replace(REGEXP, "", $_SERVER["REDIRECT_URL"]) . "/admin/auth/login");
    }
}

function logout()
{
    unset($_SESSION["user"]);
    return header("location: " . preg_replace(REGEXP, "", $_SERVER["REDIRECT_URL"]) . "/admin/auth/login");
}