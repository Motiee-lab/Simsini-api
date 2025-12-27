<?php
try {
    $db = new PDO("sqlite:database.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("
        CREATE TABLE IF NOT EXISTS simsimi (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            question TEXT NOT NULL,
            answer TEXT NOT NULL
        )
    ");
} catch (Exception $e) {
    die(json_encode(["error" => $e->getMessage()]));
}
