<?php
require "init.php";

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path === "/sim") {
    require "sim.php";
    exit;
}

if ($path === "/teach") {
    require "teach.php";
    exit;
}

echo json_encode([
    "status" => "ok",
    "routes" => [
        "/sim?query=hi",
        "/teach?ask=hello&ans=hey!"
    ]
]);
