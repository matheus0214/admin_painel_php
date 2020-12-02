<?php

$connection_db = new mysqli(
    "localhost",
    "root",
    "",
    "admin_php",
    "3306"
);

if ($connection_db->connect_errno) {
    $connection_db->close();
    die("Error to connect DB ($connection_db->connect_errno) $connection_db->connect_error");
}