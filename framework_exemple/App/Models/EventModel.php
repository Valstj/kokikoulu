<?php

namespace App\Models;

use Library\Database\Connection;

class EventModel
{
    public function getAll(): array
    {
        $connection = new Connection();
        $query = $connection->getPdo()->prepare('SELECT * FROM category');
        $query->execute();
        $events = $query->fetchAll();
        
        return $events;
    }
    
    public function getOne(int $id): array
    {
        $connection = new Connection();
        $query = $connection->getPdo()->prepare('SELECT * FROM category WHERE id = :id');
        $query->execute(['id' => $id]);
        $event = $query->fetch();
        
        return $event;
    }
    
    public function create(): void
    {
        // 
    }
}