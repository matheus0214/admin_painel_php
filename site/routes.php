<?php

if(resolve_path("/?(home)/?(.*)")) {
    render("site", "home");
} else {
    echo "Page does not found";
}