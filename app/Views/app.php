<?php
/** @var array $tasks */
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>MindSync Todo</title>
    <!-- Google Fonts для современного стиля -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <!-- Font Awesome 6 (free icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="/css/app.css">
    </head>
<body>

<div class="app">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="main-sidebar">
            <div class="sidebar-upper">
            <div class="logo">
                <i class="fas fa-check-double"></i> 
            </div>
            <button class="sidebar-toggle">
                <img src="/images/toggle-sidebar.png" class="sidebar-icon" id="toggle-icon">
            </button>
            </div>
            <nav class="menu">
                <a href="#" id='active' class="menu-item active">
                    <img src="images/active.png" class="sidebar-icon" draggable="false">
                    <span class="text">Active</span>
                </a>
                <a href="#" id='archived' class="menu-item">
                    <img src="images/archived.png" class="sidebar-icon" draggable="false">
                    <span class="text">Archived</span>
                </a>
                <a href="#" id='completed' class="menu-item">
                    <img src="images/history.png" class="sidebar-icon" draggable="false">
                    <span class="text">History</span>
            </a>
            </nav>
        </div>

        <div class="sidebar-bottom">
            <div class="account">
                <div class="avatar">P</div>
                <span class="text">Profile</span>
            </div>
          </div>
    </aside>

    <!-- MAIN -->
    <main class="content">

    <h1 class="todo-input-block hidden">Add task</h1>

    <div class="todo-input todo-input-block hidden">
    <form>
        <input type="text" name="title" placeholder="Заголовок задачи..." />
        <textarea name="description" placeholder="Описание..."></textarea>
        <button type="submit">Добавить</button>
    </form>
    </div>

    <div class="page-ui"></div>

    <ul class="todo-list">
    <?php foreach($tasks as $task): ?>
        <li data-id="<?= $task['id']?>" data-status="<?= $task['status'] ?>">
            <input type="checkbox" class="todo-check" autocomplete="off">
            <?= $task['title']; ?>
        </li>
    <?php endforeach; ?>
    </ul>

</main>

</div>

<script src="js/app.js" defer></script>

</body>
</html>