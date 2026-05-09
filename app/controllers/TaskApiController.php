<?php 
namespace App\controllers;

use App\Models\TaskModel;

class TaskApiController {

    public function index() {
        $whitelist = ['active', 'archived', 'completed'];
    
        $status = $_GET['status'] ?? 'active';
    
        if (!in_array($status, $whitelist)) {
            $status = 'active';
        }
    
        $model = new TaskModel();
        $tasks = $model->getByStatus($status);
    
        // если это fetch-запрос
        if (isset($_GET['status'])) {
            header('Content-Type: application/json');
            echo json_encode($tasks);
            return;
        }
    }
}