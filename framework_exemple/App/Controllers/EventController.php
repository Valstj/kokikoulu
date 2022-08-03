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
        $events = $eventModel->getOne($_GET['id']);

        $categoryModel = new CategoryModel;
        $categories = $categoryModel->getAll();

        $this->render('show.phtml', [
            'events' => $events,
            'categories' => $categories
        ]);
    }

    public function add() {
        $this->render('add.phtml');
    }

    public function delete() {

    }
}
