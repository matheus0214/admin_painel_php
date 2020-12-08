<?php

$pages_all = function () use ($connection_db) {
    $result = $connection_db->query(
        "
            SELECT * FROM `pages`
        "
    );

    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function ($id) {

};

$pages_create = function () {
    flash("Criou com sucesso", "success");
};

$pages_edit = function ($id) {
    flash("Atualizou com sucesso", "success");
};

$pages_delete = function ($id) {
    flash("Removeu com sucesso", "success");
};