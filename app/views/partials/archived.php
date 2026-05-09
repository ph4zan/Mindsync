<?php
/** @var array $tasks */
?>
        <div>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis harum ipsam doloremque quia officiis, aliquam doloribus enim ratione quod cumque, porro nisi eaque impedit ipsa, qui vitae aliquid mollitia dicta.
    </p>
    </div>
    
    <?php foreach($tasks as $task): ?>
        <li data-id="<?= $task['id']?>" data-status="<?= $task['status'] ?>">
        <label>
        <input type="checkbox" class="todo-check" autocomplete="off">
        <?= $task['title']; ?>
        </label>
    </li>
    <?php endforeach; ?>