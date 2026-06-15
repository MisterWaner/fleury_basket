<?php

// 1. Strict types for better type safety
declare(strict_types=1);

// 2. Define constants for paths
define('ROOT_PATH', dirname(__DIR__)); // This will point to the parent directory of the current file, which is the root of the project
define('SRC_PATH', ROOT_PATH . '/src');

// Autoloader
spl_autoload_register(function (string $className) {
    $prefix = 'App\\';

    $baseDir = SRC_PATH . '/';

    $len = strlen($prefix);
    if (strncmp($prefix, $className, $len) !== 0) {
        return;
    }

    $relativeClass = substr($className, $len);

    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

// 3. Load environment variables from the ".env" file
if (file_exists(ROOT_PATH . '/.env')) {
    $lines = file(ROOT_PATH . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        // Skip comments and empty lines
        if (str_starts_with(trim($line), '#')) continue;

        // Split the line into key and value
        [$key, $value] = explode('=', $line, 2);
        $_ENV[trim($key)] = trim($value);
    }
} else {
    die('Erreur critique: Le fichier de configuration "env" est manquant.');
}


// 4. Rooting system for better organization
// We get only the path from the URL, without query parameters
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// 5. Basic routing system
switch ($requestUri) {
    case '/':
    case '/home':
        require_once SRC_PATH . '/Views/home.php';
        break;
    case '/actualites':
        require_once SRC_PATH . '/Views/blog/index.php';
        break;
    case '/equipes':
        require_once SRC_PATH . '/Views/teams/index.php';
        break;
    case '/club/a-propos':
        require_once SRC_PATH . '/Views/club/about.php';
        break;
    case '/club/organigramme':
        require_once SRC_PATH . '/Views/club/organigramme.php';
        break;
    case '/club/partenaires':
        require_once SRC_PATH . '/Views/club/sponsors.php';
        break;
    case '/contact':
        require_once SRC_PATH . '/Views/contact.php';
        break;
    case '/inscription':
        require_once SRC_PATH . '/Views/inscription.php';
        break;
    case '/faq':
        require_once SRC_PATH . '/Views/faq.php';
        break;
    default:
        http_response_code(404);
        require_once SRC_PATH . '/Views/not-found.php';
        break;
}