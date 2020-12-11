<?php

require __DIR__ . "/db.php";

if (resolve_path("admin/users")) {
    flash();
    $users = $users_all();

    render("admin/users", "index", ["users" => $users]);
} else if (resolve_path("/admin/users/create")) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $users_create();

        $regexp = "/\/admin\/users.*/";

        return header("location: " . preg_replace($regexp, "", $_SERVER["REDIRECT_URL"]) . "/admin/users");
    } else {
        flash();
    }

    render("admin/users", "create");
} else if ($params = resolve_path("/admin/users/(\d+)")) {

    $user = $users_view($params[1]);

    render("admin/users", "show", ["user" => $user]);
} else if ($params = resolve_path("/admin/users/(\d+)/edit")) {
    $user = $users_view($params[1]);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $users_update($params[1]);
        $regexp = "/\/admin\/users.*/";
        return header("location: " . preg_replace($regexp, "", $_SERVER["REDIRECT_URL"]) . "/admin/users");
    }

    render("admin/users", "edit", ["user" => $user]);
} else if ($params = resolve_path("/admin/users/(\d+)/delete")) {
    var_dump($params);

    $users_delete($params[1]);
    $regexp = "/\/admin\/users.*/";

    return header("location: " . preg_replace($regexp, "", $_SERVER["REDIRECT_URL"]) . "/admin/users");

    render("admin/users", "delete");
} else {
    $regexp = "/\/admin\/users.*/";
    return header("location: " . preg_replace($regexp, "", $_SERVER["REDIRECT_URL"]) . "/admin/users");
}