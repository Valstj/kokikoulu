<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;

return [
    'home' => [
        HomeController::class,
        'index'
    ],
    'login' => [
        UserController::class,
        'login'
    ],
    'register' => [
        UserController::class,
        'register'
    ]
];
/*     ___
   //_\\_
 ."\\    ".
/          \
|           \_
|       ,--.-.)
 \     /  o \o\
 /\/\  \    /_/
  (_.   `--'__)
   |     .-'  \
   |  .-'.     )
   | (  _/--.-'
   |  `.___.'
         (
            */