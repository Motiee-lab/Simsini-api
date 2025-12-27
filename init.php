<?php
require "db.php";

$db->exec("
CREATE TABLE IF NOT EXISTS simsimi (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    question TEXT,
    answer TEXT
)");
