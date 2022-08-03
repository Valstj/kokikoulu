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

    /**
     * Récupère les catégories contenant des événements
     */
    public function getEventCategory(): array
    {
        $connection = new Connection();

        $query = $connection->getPdo()->prepare('
            SELECT category.id, name, count(event.id) AS totalEvents
            FROM `category`
            INNER JOIN event ON event.category_id = category.id
            GROUP BY category.name
        ');

        $query->execute();
        $categories = $query->fetchAll();

        return $categories;
    }

    public function create(): void
    {
        // 
    }
}
