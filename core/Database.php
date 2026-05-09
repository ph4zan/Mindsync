<?php

namespace Core;

use PDO;

class Database
{
    private PDO $pdo;

    public function __construct()
    {
        $config = require __DIR__ . '/../config/config.php';

        $this->pdo = new PDO(
            $config['db']['dsn'],
            $config['db']['user'],
            $config['db']['pass']
        );
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}