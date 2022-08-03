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

        $this->render('show.phtml', [
            'events' => $events
        ]);
    }

    public function add() {

        $categoryModel = new CategoryModel();
        $categories = $categoryModel->getAll();
        $this->render('add.phtml', [
            'categories' => $categories,
        ]);
    }
    public function category()
    {

        $categoryModel = new CategoryModel();
        $categories = $categoryModel->getAll();
        $eventModel = new EventModel();
        $events = $eventModel->getOne($_GET['id']);
        $this->render('category.phtml', [
            'categories' => $categories,
            'events' => $events

        ]);
    }

    public function delete() {

    }
}
