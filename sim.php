<?php
require "db.php";

$query = trim($_GET['query'] ?? '');

if (!$query) {
    echo json_encode(["error" => "Missing query"]);
    exit;
}

$stmt = $db->prepare("
    SELECT answer FROM simsimi
    WHERE question LIKE ?
    ORDER BY RANDOM()
    LIMIT 1
");
$stmt->execute(["%$query%"]);

$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode([
    "query" => $query,
    "answer" => $row ? $row['answer'] : "I don't know that yet. Teach me!"
]);
