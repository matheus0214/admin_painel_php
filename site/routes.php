<?php

if (resolve_path("/?")) {
    render("site", "home", ["name" => "matheus"]);
} else {
    http_response_code(404);
}