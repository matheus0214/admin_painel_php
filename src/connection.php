<?php

$connection_db = new mysqli(
    DB_HOST,
    DB_USERNAME,
    DB_PASSWORD,
    DB_NAME,
    DB_PORT
);

if ($connection_db->connect_errno) {
    $connection_db->close();
    die("Error to connect DB ($connection_db->connect_errno) $connection_db->connect_error");
}