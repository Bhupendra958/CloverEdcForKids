<?php
// Simple schema importer. Run from project web root with PHP CLI.
$sqlFile = __DIR__ . '/../sql/schema.sql';
if (!file_exists($sqlFile)) {
    fwrite(STDERR, "schema.sql not found at: $sqlFile\n");
    exit(1);
}
$sql = file_get_contents($sqlFile);

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;charset=$charset";
$opts = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $opts);
} catch (PDOException $e) {
    fwrite(STDERR, "Connection failed: " . $e->getMessage() . "\n");
    exit(1);
}

$parts = array_filter(array_map('trim', preg_split('/;\s*\n/', $sql)));
foreach ($parts as $part) {
    if ($part === '') continue;
    try {
        $pdo->exec($part);
        $short = strlen($part) > 80 ? substr($part,0,80) . '...' : $part;
        echo "Executed: " . preg_replace('/\s+/', ' ', $short) . "\n";
    } catch (PDOException $e) {
        fwrite(STDERR, "Failed to execute statement: " . $e->getMessage() . "\n");
        fwrite(STDERR, "Statement: $part\n");
        exit(1);
    }
}

echo "Schema import completed.\n";
