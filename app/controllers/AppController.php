<?php 
namespace App\controllers;

use App\Models\TaskModel;
class AppController {
    public function index() {
        $whitelist = ['active', 'archived', 'completed'];
    
        $status = $_GET['status'] ?? 'active';
    
        if (!in_array($status, $whitelist)) {
            $status = 'active';
        }
    
        $model = new TaskModel();
        $tasks = $model->getByStatus($status);
    
        // если это fetch-запрос
        if (
            isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'
        ) {
            header('Content-Type: application/json');
            echo json_encode($tasks);
            return;
        }
    
        // первый заход (страница)
        require "../app/views/app.php";
    }

    public function create() {
        header('Content-Type: application/json');
    
        $data = json_decode(file_get_contents("php://input"), true);
    
        if (!$data) {
            http_response_code(400);
            echo json_encode(["error" => "Invalid JSON"]);
            return;
        }

        if (trim($data['title'] ?? '') === '') {
            http_response_code(400);
            echo json_encode(["error" => "Title cannot be empty"]);
            return;
        }
    
        $model = new TaskModel();
        $task = $model->create(
            $data['title'],
            $data['description']
        );
    
        echo json_encode($task);
    }

    public function updateStatus() {
        header('Content-Type: application/json');
    
        $data = json_decode(file_get_contents("php://input"), true);
    
        if (!is_array($data) || empty($data['id'])) {
            http_response_code(400);
            echo json_encode(["error" => "Invalid JSON or missing id"]);
            return;
        }

        if (empty($data['status'])) {
            http_response_code(400);
            echo json_encode(["error" => "Invalid JSON or missing status"]);
            return;
        }
    
        $model = new TaskModel();
        $success = $model->setStatus((int)$data['id'], $data['status']);

        echo json_encode([
            "success" => true
        ]);
    }
}