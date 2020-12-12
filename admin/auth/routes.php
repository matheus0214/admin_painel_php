<?php

require __DIR__ . "/db.php";

if (resolve_path("/admin/auth/login")) {
    flash();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $regexp = "/\/admin\/auth.*/";
        if ($login()) {
            return header("location: " . preg_replace($regexp, "", $_SERVER["REDIRECT_URL"]) . "/admin/pages");
        } else {
            flash("Erro ao fazer login", "error");
        }
    }

    render_with_template("/admin/login");
} else {
    http_response_code(404);
}