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

        $eventModel = new EventModel();
        $events = $eventModel->getAll();
        $this->render('add.phtml', [
            'events' => $events,
        ]);
    }

    public function delete() {

    }
}
