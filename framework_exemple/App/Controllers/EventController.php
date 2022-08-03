<?php

namespace App\Controllers;

use Library\Controllers\AbstractController;
use App\Models\EventModel;
use App\Models\CategoryModel;

class EventController extends AbstractController
{
    public function show(): void
    {

        $eventModel = new EventModel();
        $events = $eventModel->getAll();

        $categoryModel = new CategoryModel;
        $categories = $categoryModel->getAll();

        $this->render('index.phtml', [
            'events' => $events,
            'categories' => $categories
        ]);
    }

    public function add() {

    }

    public function delete() {
        
    }
}
