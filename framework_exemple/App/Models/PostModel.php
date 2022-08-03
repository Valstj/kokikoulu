<?php

namespace App\Models;

use Library\Database\Connection;

class PostModel
{
    public function getAll(): array
    {
        $connection = new Connection();
        $query = $connection->getPdo()->prepare('SELECT * FROM posts');
        $query->execute();
        $posts = $query->fetchAll();
        
        return $posts;
    }
    
    public function getOne(int $id): array
    {
        $connection = new Connection();
        $query = $connection->getPdo()->prepare('SELECT * FROM posts WHERE id = :id');
        $query->execute(['id' => $id]);
        $post = $query->fetch();
        
        return $post;
    }
    
    public function create(): void
    {
        // 
    }
}