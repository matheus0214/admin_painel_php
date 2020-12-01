<?php

if(resolve_path("/admin/?(.*)")) {
    render("admin", "home");
}