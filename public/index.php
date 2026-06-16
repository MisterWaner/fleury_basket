<?php

// 1. Strict types for better type safety
declare(strict_types=1);

// 2. Define constants for paths
define('ROOT_PATH', dirname(__DIR__)); // This will point to the parent directory of the current file, which is the root of the project
define('SRC_PATH', ROOT_PATH . '/src');

// Autoloader
// 3. Automatic class loading using Composer's autoloader
require_once ROOT_PATH . '/vendor/autoload.php';

// 4. Load environment variables from the ".env" file
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


// 5. Rooting system for better organization
use App\Router;
$router = new Router();

// 6. Define routes using the Router class
$router->get('/', 'home/home'); 
$router->get('/actualites', 'blog/index');
$router->get('/equipes', 'teams/index'); 
$router->get('/club/a-propos', 'club/about'); 
$router->get('/club/organigramme', 'club/organigramme');
$router->get('/club/partenaires', 'club/sponsors'); 
$router->get('/contact','contact'); 
$router->get('/inscription', 'inscription'); 
$router->get('/faq', 'faq'); 
$router->run();
