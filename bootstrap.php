<?php
session_save_path(__DIR__ . "/sessions");
session_start();
session_regenerate_id(true);

require __DIR__ . "/config.php";
// require __DIR__ . "/src/error_handler.php";
require __DIR__ . "/src/resolve_route.php";
require __DIR__ . "/src/render.php";
require __DIR__ . "/src/connection.php";
require __DIR__ . "/src/flash.php";

if (resolve_path("/admin/?(.*)")) {
    require __DIR__ . "/admin/routes.php";
} else if (resolve_path("/?(.*)")) {
    require __DIR__ . "/site/routes.php";
}