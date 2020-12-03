<?php

if (resolve_path("/?(home)*/?(.*)")) {
    render("site", "home", ["name" => "matheus"]);
} else {
    http_response_code(404);
}