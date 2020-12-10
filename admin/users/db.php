<?php

$users_all = function () use ($connection_db) {
    $result = $connection_db->query(
        "
            SELECT * FROM `users`
        "
    );

    return $result->fetch_all(MYSQLI_ASSOC);
};

$users_view = function ($id) use ($connection_db) {
    $stmt = $connection_db->prepare(
        "
            SELECT * FROM `users`
            WHERE `users`.`id` = ?
        "
    );

    $stmt->bind_param("i", $id);
    $stmt->execute();

    return $stmt->fetch_assoc();
};

$users_create = function () use ($connection_db) {

};

$users_update = function () use ($connection_db) {

};

$users_delete = function () use ($connection_db) {

};