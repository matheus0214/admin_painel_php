<?php

require __DIR__ . "/db.php";

if (resolve_path("/admin/pages")) {

    $pages = $pages_all();
    flash();

    render("admin/pages", "index", ["pages" => $pages]);

} else if (resolve_path("/admin/pages/create")) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pages_create();
        $regexp = "/\/admin\/pages.*/";

        return header("location: " . preg_replace($regexp, "", $_SERVER["REDIRECT_URL"]) . "/admin/pages");
    }

    render("admin/pages", "create");

} else if ($params = resolve_path("/admin/pages/(\d+)")) {

    $page = $pages_one($params[1]);

    render("admin/pages", "show", ["page" => $page]);

} else if ($params = resolve_path("/admin/pages/(\d+)/edit")) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pages_edit("");
        $regexp = "/\/admin\/pages.*/";

        return header("location: " . preg_replace($regexp, "", $_SERVER["REDIRECT_URL"]) . "/admin/pages");
    }

    render("admin/pages", "edit");

} else if (resolve_path("/admin/pages/(\d+)/delete")) {
    $regexp = "/\/admin\/pages.*/";

    $pages_delete("");

    return header("location: " . preg_replace($regexp, "", $_SERVER["REDIRECT_URL"]) . "/admin/pages");
}