<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function app_base_path(): string {
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    $marker = '/HtmlFiles/';
    $pos = strpos($script, $marker);
    if ($pos !== false) {
        return substr($script, 0, $pos + strlen('/HtmlFiles'));
    }

    return '';
}

function app_url(string $path = ''): string {
    $base = rtrim(app_base_path(), '/');
    $clean = '/' . ltrim($path, '/');
    return $base . $clean;
}

function is_logged_in(): bool {
    return !empty($_SESSION['user_id']);
}

function require_login(): void {
    if (!is_logged_in()) {
        $redirect = $_SERVER['REQUEST_URI'] ?? app_url('index.php');
        header('Location: ' . app_url('login.php') . '?redirect=' . urlencode($redirect));
        exit;
    }
}

function set_flash(string $type, string $message): void {
    if (session_status() === PHP_SESSION_NONE) session_start();
    $_SESSION['flash'] = ['type' => $type, 'message' => $message];
}

function get_flash(): ?array {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (!isset($_SESSION['flash'])) return null;
    $f = $_SESSION['flash'];
    unset($_SESSION['flash']);
    return $f;
}

function render_header_links(): void {
    // echo <li> elements for header nav depending on login state
    if (is_logged_in()) {
        $name = htmlspecialchars($_SESSION['user_name'] ?? '');
        echo "<li><a href=\"" . app_url('index.php') . "\" class=\"hover:text-yellow-300 transition-all duration-300 font-medium\">Home</a></li>";
        echo "<li><span class=\"px-3 text-white font-medium\">Hello, $name</span></li>";
        echo "<li><a href=\"" . app_url('src/logout.php') . "\" class=\"hover:text-yellow-300 transition-all duration-300 font-medium\">Logout</a></li>";
        echo "<li><a href=\"" . app_url('About.php') . "\" class=\"hover:text-yellow-300 transition-all duration-300 font-medium\">About</a></li>";
    } else {
        echo "<li><a href=\"" . app_url('index.php') . "\" class=\"hover:text-yellow-300 transition-all duration-300 font-medium\">Home</a></li>";
        echo "<li><a href=\"" . app_url('login.php') . "\" class=\"hover:text-yellow-300 transition-all duration-300 font-medium\">Login</a></li>";
        echo "<li><a href=\"" . app_url('registration.php') . "\" class=\"hover:text-yellow-300 transition-all duration-300 font-medium\">Registration</a></li>";
        echo "<li><a href=\"" . app_url('About.php') . "\" class=\"hover:text-yellow-300 transition-all duration-300 font-medium\">About</a></li>";
    }
}

function logout_and_redirect(string $to = 'index.php'): void {
    if (session_status() === PHP_SESSION_NONE) session_start();
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params['path'], $params['domain'], $params['secure'], $params['httponly']
        );
    }
    session_destroy();
    header('Location: ' . app_url($to));
    exit;
}
