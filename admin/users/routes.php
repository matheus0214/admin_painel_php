<?php

require __DIR__ . "/db.php";

if (resolve_path("admin/users")) {
    render("admin/users", "index");
} else if (resolve_path("/admin/users/create")) {
    render("admin/users", "create");
} else if (resolve_path("/admin/users/(\d+)")) {
    render("admin/users", "show");
} else if (resolve_path("/admin/users/(\d+)/edit")) {
    render("admin/users", "edit");
} else if (resolve_path("/admin/users/(\d+)/delete")) {
    render("admin/users", "delete");
} else {
    $regexp = "/\/admin\/users.*/";
    header("location: " . preg_replace($regexp, "", $_SERVER["REDIRECT_URL"]) . "/admin/users");
}