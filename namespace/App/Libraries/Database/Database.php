<?php

namespace App\Libraries\Database;

use PDO;

class Database
{
    protected PDO $pdo;
    
    public function __construct(string $host, string $dbname, string $user, string $password)
    {
        $this->pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=UTF8", 
            $user, 
            $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    }
}