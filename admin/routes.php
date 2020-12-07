<?php

if (resolve_path("/admin")) {
    render("admin", "home");
} else if (resolve_path("/admin/pages")) {
    render("admin/pages", "index");
} else if (resolve_path("/admin/pages/create")) {
    render("admin/pages", "create");
} else if (resolve_path("/admin/pages/(\d)+")) {
    render("admin/pages", "show");
} else if (resolve_path("/admin/pages/(\d)+/edit")) {
    render("admin/pages", "edit");
} else if (resolve_path("/admin/pages/(\d)+/delete")) {
    $regexp = "/\/admin\/pages.*/";

    header("location: " . preg_replace($regexp, "", $_SERVER["REDIRECT_URL"]) . "/admin/pages");
} else {
    http_response_code(404);
}