<?php

require __DIR__ . "/../admin/pages/db.php";

if (resolve_path("/?.*")) {
    $pages = $pages_all();

    if (preg_match("/\/pages.*/", $_SERVER["REDIRECT_URL"], $matches)) {
        preg_match("/(?<=pages).*/", $_SERVER["REDIRECT_URL"], $matches);

        $page = $pages_one_url(str_replace("/", "", $matches[0]));

        return render_site(["pages" => $pages, "content_page" => $page["body"]]);
    }

    render_site(["pages" => $pages]);
} else {
    http_response_code(404);
}