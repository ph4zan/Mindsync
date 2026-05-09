<?php

namespace App\Services;

class TaskService {
    private array $whitelist = ['active', 'archived', 'completed'];

    public function normalizeStatus(string $status): string
    {
        if (!in_array($status, $this->whitelist, true)) {
            return 'active';
        }

        return $status;
    }
}