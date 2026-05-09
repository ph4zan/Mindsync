<?php 
namespace App\Controllers;

use App\Models\TaskModel;
use App\Services\TaskService;


class AppController {
    public function index() {
        $status = $_GET['status'] ?? 'active';
        
        $service = new TaskService();
        $status = $service->normalizeStatus($status);
        
        $model = new TaskModel();
        $tasks = $model->getByStatus($status);
    
        require "../app/views/app.php";
    }
}