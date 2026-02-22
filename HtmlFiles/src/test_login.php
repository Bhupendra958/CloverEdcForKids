<?php
$loginUrl = 'http://127.0.0.1:8000/src/login.php';
$protectedUrl = 'http://127.0.0.1:8000/maths/math.php';
$jar = __DIR__ . '/cookie_test.txt';

function curl_post($url, $data, $jar) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $jar);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $jar);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $res = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
    return [$res, $info];
}

function curl_get($url, $jar) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $jar);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $res = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
    return [$res, $info];
}

// perform login
[$loginRes, $loginInfo] = curl_post($loginUrl, ['email' => 'test+1@example.com', 'password' => 'TestPass123!'], $jar);
echo "Login HTTP code: " . ($loginInfo['http_code'] ?? 'N/A') . "\n";

// fetch protected page
[$pageRes, $pageInfo] = curl_get($protectedUrl, $jar);
echo "Protected HTTP code: " . ($pageInfo['http_code'] ?? 'N/A') . "\n";
echo "Protected content length: " . strlen($pageRes) . "\n\n";
echo "--- START OF CONTENT PREVIEW ---\n";
echo substr($pageRes, 0, 1000) . "\n";
echo "--- END PREVIEW ---\n";
