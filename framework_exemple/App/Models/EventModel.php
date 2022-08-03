<?php

namespace App\Models;

use Library\Database\Connection;

class EventModel
{
    public function getAll(): array
    {
        $connection = new Connection();
        $query = $connection->getPdo()->prepare('
        SELECT event.*, category.name FROM event 
        INNER JOIN category ON category.id = event.category_id');
        $query->execute();
        $events = $query->fetchAll();
        
        return $events;
    }
    
    public function getOne(int $id): array
    {
        $connection = new Connection();
        $query = $connection->getPdo()->prepare('
            SELECT event.*, category.name FROM event 
            INNER JOIN category ON category.id = event.category_id
            WHERE event.id = :id'
        );
        $query->execute(['id' => $id]);
        $event = $query->fetch();
        
        return $event;
    }

    public function getByCategory(int $categoryId): array
    {
        $connection = new Connection();
        $query = $connection->getPdo()->prepare('
            SELECT event.*, category.name FROM event
            INNER JOIN category ON category.id = event.category_id
            WHERE category_id = :categoryId
        ');

        $query->execute(['categoryId' => $categoryId]);
        $events = $query->fetchAll();

        return $events;
    }
    
    public function create(): void
    {
        // 
    }
}