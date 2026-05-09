<?php
/** @var array $tasks */
?>
    
    <ul class="todo-list">
    <?php foreach($tasks as $task): ?>
        <li data-id="<?= $task['id']?>" data-status="<?= $task['status'] ?>">
        <label>
        <input type="checkbox" class="todo-check" autocomplete="off">
        <?= $task['title']; ?>
        </label>
    </li>
    <?php endforeach; ?>
</ul>