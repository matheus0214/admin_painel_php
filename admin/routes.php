<?php

if (resolve_path("/admin")) {
    render("admin", "home");
} else if (resolve_path("/admin/pages.*")) {
    require __DIR__ . "/pages/routes.php";
} else {
    http_response_code(404);
}