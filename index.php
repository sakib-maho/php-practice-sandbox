<?php

declare(strict_types=1);

$dataPath = __DIR__ . '/data/candidates.json';
$content = file_get_contents($dataPath);
$candidates = json_decode($content ?: '[]', true);
if (!is_array($candidates)) {
    $candidates = [];
}

usort($candidates, static function (array $a, array $b): int {
    return (int)$b['score'] <=> (int)$a['score'];
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice Sandbox - Candidate Dashboard</title>
    <link rel="stylesheet" href="public/assets/styles.css">
</head>
<body>
<main class="container">
    <h1>Candidate Dashboard</h1>
    <p>Simple PHP project for ranking candidates by score and visualizing profile data.</p>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Country</th>
            <th>Score</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($candidates as $candidate): ?>
            <tr>
                <td><?= htmlspecialchars((string)$candidate['name']) ?></td>
                <td><?= htmlspecialchars((string)$candidate['role']) ?></td>
                <td><?= htmlspecialchars((string)$candidate['country']) ?></td>
                <td><?= (int)$candidate['score'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <a href="api.php">View API JSON</a>
</main>
</body>
</html>
