<?php
require "db.php";

$ask = trim($_GET['ask'] ?? '');
$ans = trim($_GET['ans'] ?? '');

if (!$ask || !$ans) {
    echo json_encode([
        "error" => "Usage: /teach?ask=hello&ans=hi"
    ]);
    exit;
}

$stmt = $db->prepare("
    INSERT INTO simsimi (question, answer)
    VALUES (?, ?)
");
$stmt->execute([$ask, $ans]);

echo json_encode([
    "status" => "learned",
    "ask" => $ask,
    "answer" => $ans
]);
