<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/auth.php';
if (session_status() === PHP_SESSION_NONE) session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . app_url('login.php'));
    exit;
}

$email = trim((string)($_POST['email'] ?? ''));
$password = (string)($_POST['password'] ?? '');

if ($email === '' || $password === '') {
    header('Location: ' . app_url('login.php') . '?error=missing');
    exit;
}

try {
    $pdo = DB::getConnection();
    $stmt = $pdo->prepare('SELECT id, name, password_hash FROM users WHERE email = ? LIMIT 1');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if (!$user || !password_verify($password, $user['password_hash'])) {
        header('Location: ' . app_url('login.php') . '?error=invalid');
        exit;
    }

    // Successful login
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];

    // flash and safe redirect
    set_flash('success', 'Welcome back, ' . $user['name'] . '!');
    $redirect = app_url('index.php');
    $r = $_POST['redirect'] ?? $_GET['redirect'] ?? null;
    if (!empty($r)) {
        // only allow internal redirects
        if (strpos($r, '/') === 0 && strpos($r, '\n') === false && strpos($r, '\r') === false) {
            $redirect = $r;
        }
    }

    header('Location: ' . $redirect);
    exit;
} catch (Exception $e) {
    http_response_code(500);
    echo 'Server error: ' . htmlspecialchars($e->getMessage());
    exit;
}

?>
