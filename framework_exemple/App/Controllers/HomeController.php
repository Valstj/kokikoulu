<?php

namespace App\Controllers;

use Library\Controllers\AbstractController;
use App\Models\EventModel;
use App\Models\CategoryModel;

class HomeController extends AbstractController
{
    public function index(): void
    {
        $name = 'Toto';
        
        $eventModel = new EventModel();
        $events = $eventModel->getAll();
        $categoryModel = new CategoryModel;
        $categories = $categoryModel->getAll();
        
        $this->render('index.phtml', [
            'name' => $name,
            'age' => 20,
            'events' => $events,
            'categories'=>$categories
        ]);
    }
}