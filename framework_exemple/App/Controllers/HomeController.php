<?php

namespace App\Controllers;

use Library\Controllers\AbstractController;
use App\Models\PostModel;

class HomeController extends AbstractController
{
    public function index(): void
    {
        $name = 'Toto';
        
        $model = new PostModel();
        $posts = $model->getAll();
        
        $this->render('index.phtml', [
            'name' => $name,
            'age' => 20,
            'posts' => $posts
        ]);
    }
}