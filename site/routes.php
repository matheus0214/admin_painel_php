<?php

if (resolve_path("/?(home)*/?(.*)")) {
    render("site", "home", ["name" => "matheus"]);
}