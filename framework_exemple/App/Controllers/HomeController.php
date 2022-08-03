<?php

namespace App\Controllers;

use Library\Controllers\AbstractController;
use App\Models\EventModel;

class HomeController extends AbstractController
{
    public function index(): void
    {
        $name = 'Toto';
        
        $model = new EventModel();
        $events = $model->getAll();
        
        $this->render('index.phtml', [
            'name' => $name,
            'age' => 20,
            'posts' => $events
        ]);
    }
}