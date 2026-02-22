<?php
require_once __DIR__ . '/db.php';

$email = $argv[1] ?? 'test+1@example.com';
try {
    $pdo = DB::getConnection();
    $stmt = $pdo->prepare('SELECT id, name, email, created_at FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        echo "FOUND USER:\n";
        echo json_encode($user, JSON_PRETTY_PRINT) . "\n";
        exit(0);
    }
    echo "USER NOT FOUND: $email\n";
    exit(2);
} catch (Exception $e) {
    fwrite(STDERR, "Error: " . $e->getMessage() . "\n");
    exit(1);
}
