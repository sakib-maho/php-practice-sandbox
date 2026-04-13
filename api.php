<?php

declare(strict_types=1);

header('Content-Type: application/json');

$dataPath = __DIR__ . '/data/candidates.json';
$content = file_get_contents($dataPath);
$candidates = json_decode($content ?: '[]', true);
if (!is_array($candidates)) {
    $candidates = [];
}

usort($candidates, static function (array $a, array $b): int {
    return (int)$b['score'] <=> (int)$a['score'];
});

echo json_encode([
    'total' => count($candidates),
    'data' => $candidates,
], JSON_PRETTY_PRINT);
