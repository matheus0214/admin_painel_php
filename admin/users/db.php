<?php

function get_datas_form($page_to_return = "")
{
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");

    if (is_null($email) || $email == "") {
        flash("Campo de email deve ser preenchido", "error");

        $regexp = "/" . str_replace("/", "\/", $page_to_return) . "/";
        header("location: " . preg_replace($regexp, "", $_SERVER["REDIRECT_URL"]) . $page_to_return);

        die();
    }

    return compact("email", "password");
}

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

    return $stmt->get_result()->fetch_assoc();
};

$users_create = function () use ($connection_db) {
    $datas = get_datas_form("/admin/users/create.*");

    if (is_null($datas["password"]) || $datas["password"] == "") {
        flash("Todos os campos devem ser preenchidos", "error");

        $regexp = "/\/admin\/users\/create.*/";
        header("location: " . preg_replace($regexp, "", $_SERVER["REDIRECT_URL"]) . $page_to_return);

        die();
    }

    $stmt = $connection_db->prepare(
        "
            INSERT INTO `users` (`email`, `password`)
            VALUES (?, ?)
        "
    );

    $password = password_hash($datas["password"], PASSWORD_DEFAULT);
    $stmt->bind_param("ss", $datas["email"], $password);
    $stmt->execute();

    flash("Usuário criado com sucesso", "success");
};

$users_update = function ($id) use ($connection_db) {
    $datas = get_datas_form("/admin/users/" . $id . "/edit");

    if (!$datas["password"]) {
        $stmt = $connection_db->prepare(
            "
                UPDATE `users`
                    SET
                        `users`.`email` = ?,
                    WHERE
                        `users`.`id` = ?
            "
        );
        $stmt->bind_param("si", $datas["email"], $id);
    } else {
        $stmt = $connection_db->prepare(
            "
                UPDATE `users`
                    SET
                        `users`.`email` = ?,
                        `users`.`password` = ?
                    WHERE
                        `users`.`id` = ?
            "
        );
        $password = password_hash($datas["password"], PASSWORD_DEFAULT);
        $stmt->bind_param("ssi", $datas["email"], $password, $id);
    }
    $stmt->execute();

    flash("Usuário atualizado com sucesso", "success");
};

$users_delete = function ($id) use ($connection_db) {
    $stmt = $connection_db->prepare(
        "
            DELETE FROM `users` WHERE `users`.`id` = ?
        "
    );

    $stmt->bind_param("i", $id);
    $stmt->execute();

    flash("Usuário deletado com sucesso", "success");
};