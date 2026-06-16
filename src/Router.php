<?php

namespace App;

class Router {
    private array $routes = [];

    /**
     * Enregistre une route GET
     */
    public function get(string $path, callable|string $callback): void {
        $this->routes['GET'][$path] = $callback; 
    } 

    /**
     * Enregistre une route POST
     */
    public function post(string $path, callable|string $callback): void {
        $this->routes['POST'][$path] = $callback;
    }

    /**
     * Exécute la route correspondante à la requête
     */
    public function run(): void {
        // Récupère la méthode HTTP (GET, POST, etc.) de la requête
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

        // Récupère l'URL demandée et nettoie les paramètres de requête
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

        // Vérifie si la route existe pour la méthode et l'URL demandée
        if (isset($this->routes[$method][$uri])) {
            $callback = $this->routes[$method][$uri];

            // Si le callback est une fonction anonyme, on l'exécute
            if (is_callable($callback)) {
                $callback();
                return;
            }

            // Si le callback est une chaîne de caractères pointant vers un fichier de vue
            if (is_string($callback)) {
                include SRC_PATH . '/Views/' . $callback . '.php';
                return;
            }
        }

        // Si aucune route n'a été trouvée, on affiche une page 404
        http_response_code(404);
        include SRC_PATH . '/Views/not-found.php';
    }
}
