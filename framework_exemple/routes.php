<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;
use App\Controllers\EventController;

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
    ],
    'show' => [
        EventController::class,
        'show'
    ],    
    'add' => [
        EventController::class,
        'add'
    ],
    'category'=> [
        EventController::class,
        'category'
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