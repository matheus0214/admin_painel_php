<?php

$connection_db = new mysqli(
    "localhost",
    "root",
    "",
    "admin_php",
    "3306"
);

if ($connec->connect_errno) {
    $connection_db->close();
    die("Error to connect DB ($connec->connect_errno) $connec->connect_error");
}