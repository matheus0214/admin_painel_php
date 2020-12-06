<?php

if (resolve_path("/admin")) {
    render("admin", "home");
} else if (resolve_path("/admin/pages")) {
    echo "olasd";
} else if (resolve_path("/admin/pages/create")) {
    render("admin", "home");
} else if (resolve_path("/admin/pages/(\d)+")) {
    render("admin", "home");
} else if (resolve_path("/admin/pages/(\d)+/edit")) {
    render("admin", "home");
} else if (resolve_path("/admin/pages/(\d)+/delete")) {
    render("admin", "home");
} else {
    http_response_code(404);
}