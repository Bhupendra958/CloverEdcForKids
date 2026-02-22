<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/auth.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . app_url('registration.php'));
    exit;
}

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$password = (string)($_POST['password'] ?? '');
$age = isset($_POST['age']) ? (int)$_POST['age'] : null;
$phone = trim((string)($_POST['phone'] ?? ''));
$country = trim((string)($_POST['country'] ?? ''));
$address = trim((string)($_POST['address'] ?? ''));

if ($name === '' || $email === '' || $password === '') {
    header('Location: ' . app_url('registration.php') . '?error=missing');
    exit;
}

try {
    $pdo = DB::getConnection();

    // Check for existing email
    $stmt = $pdo->prepare('SELECT id FROM users WHERE email = ? LIMIT 1');
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        header('Location: ' . app_url('registration.php') . '?error=exists');
        exit;
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $insert = $pdo->prepare('INSERT INTO users (name, email, password_hash, age, phone, country, address) VALUES (?, ?, ?, ?, ?, ?, ?)');
    $insert->execute([$name, $email, $passwordHash, $age, $phone, $country, $address]);

    // set flash and redirect to login
    set_flash('success', 'Registration successful. Please log in.');
    header('Location: ' . app_url('login.php'));
    exit;
} catch (Exception $e) {
    http_response_code(500);
    echo 'Server error: ' . htmlspecialchars($e->getMessage());
    exit;
}

?>
