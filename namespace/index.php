<?php

use App\Libraries\Database\Database;
use App\Models\UserModel;
use App\Controllers\HomeController;
use App\Controllers\UserController;

// Exemple d'autoloader en php natif (évite d'avoir à mettre des require pour appeler les classes)
// Fonction qui est appelée à chaque fois qu'une classe essaie d'être chargée
spl_autoload_register(function ($className) {
    // On transforme tous les "\" du namespace en "/"
    require str_replace("\\", "/", $className) . ".php";
});

$config = require 'config.php';

$db = new Database($config['host'], $config['dbname'], $config['user'], $config['password']);