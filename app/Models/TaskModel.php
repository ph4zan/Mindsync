<?php

namespace App\Models;

use Core\Database;
use PDO;

class TaskModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }


    // READ ALL
    public function getByStatus(string $status): array
    {
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE status = :status ORDER BY id DESC");

        
        $stmt->execute([
            'status' => $status
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // CREATE
    public function create(string $title, string $description): array
    {
        $stmt = $this->db->prepare("
            INSERT INTO tasks (title, description) 
            VALUES (:title, :descr)
        ");

        $stmt->execute([
            'title' => $title,
            'descr' => $description
        ]);

        return [
            'id' => $this->db->lastInsertId(),
            'title' => $title,
            'description' => $description
        ];
    }


    // DELETE
    public function setStatus(int $id, string $status): bool
    {
        $stmt = $this->db->prepare("
            UPDATE tasks
            SET status = :status
            WHERE id = :id
        ");

        return $stmt->execute([
            'id' => $id,
            'status' => $status
        ]);
    }
}