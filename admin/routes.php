<?php

if (resolve_path("/admin")) {
    render("admin", "home");
} else if (resolve_path("/admin/upload/image")) {
    $file = $_FILES["file"] ?? null;

    if (!$file) {
        http_response_code(422);
        echo json_encode(["status" => "Files not found"]);
        exit;
    }

    $allowed_types = [
        "image/gif",
        "image/jpg",
        "image/jpeg",
        "image/png",
    ];

    if (!in_array($file["type"], $allowed_types)) {
        http_response_code(422);
        echo json_encode(["status" => "Invalid data format"]);
        exit;
    }

    $name = uniqid(rand(), true) . "." . pathinfo($file["name"], PATHINFO_EXTENSION);
    move_uploaded_file($file["tmp_name"], __DIR__ . "/../public/uploads/" . $name);

    echo "/upload/" . $name;

} else if (resolve_path("/admin/pages.*")) {
    require __DIR__ . "/pages/routes.php";
} else if (resolve_path("/admin/users.*")) {
    require __DIR__ . "/users/routes.php";
} else {
    http_response_code(404);
}