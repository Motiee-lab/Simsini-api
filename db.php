<?php
/*
  SQLite database using Render persistent disk
  Data is stored permanently in /var/data
*/

$databasePath = "/var/data/database.db";

try {
    $db = new PDO("sqlite:" . $databasePath);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create table if it doesn't exist
    $db->exec("
        CREATE TABLE IF NOT EXISTS simsimi (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            question TEXT NOT NULL,
            answer TEXT NOT NULL
        )
    ");
} catch (Exception $e) {
    die(json_encode([
        "error" => "Database connection failed"
    ]));
}
