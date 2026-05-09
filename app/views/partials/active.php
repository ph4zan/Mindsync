<?php
/** @var array $tasks */
?>
    <h1>Add task</h1>

<div class="todo-input">
    <form>
        <input type="text" name="title" placeholder="Заголовок задачи..." />
        <textarea name="description" placeholder="Описание..."></textarea>
        <button type="submit">Добавить</button>
    </form>
</div>
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

