<?php

namespace App\Models;

use Library\Database\Connection;

class CategoryModel
{
    public function getAll(): array
    {
        $connection = new Connection();
        $query = $connection->getPdo()->prepare('SELECT * FROM category');
        $query->execute();
        $categories = $query->fetchAll();

        return $categories;
    }

    public function getOne(int $id): array
    {
        $connection = new Connection();
        $query = $connection->getPdo()->prepare('SELECT * FROM category WHERE id = :id');
        $query->execute(['id' => $id]);
        $category = $query->fetch();

        return $category;
    }

    public function create(): void
    {
        // 
    }
}
