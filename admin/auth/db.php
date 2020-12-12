<?php

$login = function () use ($connection_db) {
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");

    if (is_null($email) || is_null($password)) {
        return false;
    }

    $stmt = $connection_db->prepare(
        "
            SELECT * FROM `users`
            WHERE
                `users`.`email` = ?
            LIMIT 1
        "
    );

    $stmt->bind_param("s", $email);

    $stmt->execute();

    $result = $stmt->get_result()->fetch_assoc();
    if (!$result) {
        return false;
    }

    /** Verify password */
    if (password_verify($password, $result["password"])) {
        unset($result["password"]);
        $_SESSION["user"] = $result;

        return true;
    }

    return false;
};