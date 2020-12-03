<?php

if (resolve_path("/admin/?(.*)")) {
    render("admin", "home");
} else {
    http_response_code(404);
}