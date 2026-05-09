<?php

namespace App\Models;

use Core\Database;

class User
{
    public function all()
    {
        $db = new Database();
        $pdo = $db->getConnection();

        return $pdo->query("SELECT * FROM users")->fetchAll();
    }
}