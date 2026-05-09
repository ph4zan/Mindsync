<?php 
namespace App\controllers;

use App\Models\TaskModel;
use App\Services\TaskService;

class TaskApiController {

    public function index() {
        $status = $_GET['status'] ?? 'active';
        
        $service = new TaskService();
        $status = $service->normalizeStatus($status);

        $model = new TaskModel();
        $tasks = $model->getByStatus($status);
    
        header('Content-Type: application/json');
        echo json_encode($tasks);
        return;
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