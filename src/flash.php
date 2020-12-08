<?php

function flash($message = null, $type = null)
{
    if ($message) {
        $_SESSION["xFlash"][] = compact("message", "type");
    } else {
        $flash = $_SESSION["xFlash"] ?? [];

        if (!count($flash)) {
            return;
        }

        foreach ($flash as $key => $message) {
            render_with_template("flash", $message["message"]);
            unset($_SESSION["xFlash"][$key]);
        }
    }
}

function close_flash()
{
    unset($_SESSION["xFlash"]);
}