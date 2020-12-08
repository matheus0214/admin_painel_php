<?php

function pages_get_date($page_to_redirect)
{
    $title = filter_input(INPUT_POST, "title");
    $url = filter_input(INPUT_POST, "url");
    $body = filter_input(INPUT_POST, "body");

    if (is_null($title) || is_null($url) || is_null(($body))) {
        flash("Todos os campos devem ser preenchidos", "error");
        header("location: " . $page_to_redirect);
        die();
    }

    return compact("title", "body", "url");
}

$pages_all = function () use ($connection_db) {
    $result = $connection_db->query(
        "
            SELECT * FROM `pages`
        "
    );

    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function ($id) use ($connection_db) {
    $stmt = $connection_db->prepare(
        "
            SELECT * FROM `pages` WHERE pages.`id` = ?
        "
    );

    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    return $result;
};

$pages_create = function () use ($connection_db) {
    $data = pages_get_date("admin/pages/create");

    $stmt = $connection_db->prepare(
        "
            INSERT INTO `pages` (`title`, `url`, `body`)
            VALUES (?, ?, ?)
        "
    );

    $stmt->bind_param("sss", $data["title"], $data["url"], $data["body"]);
    $stmt->execute();
    $stmt->close();

    flash("Criou com sucesso", "success");
};

$pages_edit = function ($id) {
    flash("Atualizou com sucesso", "success");
};

$pages_delete = function ($id) {
    flash("Removeu com sucesso", "success");
};