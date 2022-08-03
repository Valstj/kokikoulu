<?php

// index.php -> point d'entrée, contrôlleur frontal ()

// Routeur (analyse de la requête HTTP pour déterminer quoi afficher)
// if (isset($_GET['page'])) {
//     $page = $_GET['page'];
// } else {
//     $page = 'home';
// }

// Autoloader
spl_autoload_register(function ($className) {
    // On transforme tous les "\" du namespace en "/"
    require str_replace("\\", "/", $className) . ".php";
});

// Opérateur de coalescence null
$page = $_GET['page'] ?? 'home';

// switch ($page) {
//     case 'home':
//         $controller = new HomeController();
//         $controller->index();
//         break;
//     case 'login':
//         $controller = new UserController();
//         $controller->login();
//         break;
//     case 'register':
//         $controller = new UserController();
//         $controller->register();
//         break;
//     default:
//         // Page 404
// }

// Remplace le switch
// Appelle un contrôleur et sa méthode en fonction de la route dans le fichier routes.php
$routes = require 'routes.php';

// Si la route n'existe pas
if (! isset($routes[$page])) {
    // Affichage d'une page 404
    http_response_code(404);
    echo '404 NOT FOUND';
    exit();
}

// $controllerName = $routes[$page][0];
// $method = $routes[$page][1];

// Lignes ci-dessus peuvent être raccourcies comme ceci :
list($controllerName, $method) = $routes[$page];

// Instanciation dynamique du contrôleur et de la méthode
$controller = new $controllerName();
$controller->$method();