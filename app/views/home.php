<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>MindSync Todo — Лучший способ управлять задачами</title>
    <!-- Google Fonts для современного стиля -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
    <!-- Font Awesome 6 (free icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/css/landing.css">
    </head>
<body>
<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="/">
            <i class="fas fa-check-double"></i> 
            <span>MindSync</span>
            </a>
        </div>
        <div class="nav-links">
            <a href="#">Возможности</a>
            <a href="#">Отзывы</a>
            <a href="#">Польза</a>
        </div>
    </div>

    <!-- Hero + кнопка Начать -->
    <div class="hero">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-rocket"></i> Умный помощник
            </div>
            <h1>Порядок начинается с одного шага</h1>
            <p>Планируйте, выполняйте и наслаждайтесь результатом. Тысячи людей уже выбрали порядок — присоединяйтесь.</p>
            <a href="/tasks" class="btn-start" id="startBtn">
            <i class="fas fa-play"></i> Начать 
            <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="hero-stats">
            <div class="stars-container">
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="review-count">53 тыс.</div>
                <div class="review-label">пользователей оценили на 5 звёзд</div>
                <div class="quote">
                    <i class="fas fa-quote-left" style="margin-right: 6px; color:#6c63ff;"></i> Наконец-то я перестал забывать о важном! Всё интуитивно понятно.
                </div>
            </div>
        </div>
    </div>

    <!-- Блок преимуществ (плюсы) -->
    <div class="features">
        <h2 class="section-title">Ключевые преимущества</h2>
        <div class="section-sub">Каждая деталь создана для вашей продуктивности и спокойствия</div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                <h3>Молниеносная запись</h3>
                <p>Добавляйте задачи за секунды. Быстрый инпут и понятный интерфейс без лишних кликов.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Аналитика прогресса</h3>
                <p>Наглядная статистика выполнения помогает видеть рост и мотивирует двигаться дальше.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Синхронизация в облаке</h3>
                <p>Ваши данные всегда под защитой, доступны с любого устройства — дома или в дороге.</p>
            </div>
        </div>
    </div>

    <!-- НОВЫЙ БЛОК: ПОЛЬЗА ОТ ИСПОЛЬЗОВАНИЯ (вместо советов) -->
    <div class="benefits-section">
        <h2 class="section-title fade-item" style="font-size: 1.9rem;">✨ Реальная польза для каждого дня</h2>
        <div class="section-sub fade-item">MindSync не просто список дел — это ваш инструмент для осознанной жизни</div>
        <div class="benefits-grid">
            <div class="benefit-item">
                <div class="benefit-icon"><i class="fas fa-brain"></i></div>
                <h3>Снижает стресс</h3>
                <p>Держите все задачи в одном месте — голова разгружается, тревожность уходит.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon"><i class="fas fa-clock"></i></div>
                <h3>Экономит время</h3>
                <p>Больше не нужно держать в уме списки покупок и дедлайны — всё под рукой.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon"><i class="fas fa-trophy"></i></div>
                <h3>Повышает продуктивность</h3>
                <p>Чёткое планирование помогает выполнять на 30% больше дел без выгорания.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-icon"><i class="fas fa-heart"></i></div>
                <h3>Формирует привычки</h3>
                <p>Регулярные напоминания и прогресс помогут закрепить полезные ритуалы.</p>
            </div>
        </div>
    </div>

    <!-- НОВЫЙ БЛОК: ВДОХНОВЛЯЮЩИЕ ЦИФРЫ + ОЩУЩЕНИЕ УСПЕХА (вместо "от команды") -->
    <div class="inspire-stats">
        <div class="stat-left">
            <h3><i class="fas fa-chart-simple"></i> Ваш успех — наша миссия</h3>
            <p>Уже более 53 000 человек используют MindSync ежедневно. Присоединяйтесь к сообществу, которое ценит время и порядок.</p>
        </div>
        <div class="stat-numbers">
            <div class="stat-circle">
                <div class="big-num">+87%</div>
                <span>повышение продуктивности*</span>
            </div>
            <div class="stat-circle">
                <div class="big-num">2 млн+</div>
                <span>выполненных задач</span>
            </div>
            <div class="stat-circle">
                <div class="big-num">4.9★</div>
                <span>средний рейтинг</span>
            </div>
        </div>
    </div>

    <div class="footer">
        <p><i class="far fa-copyright"></i> 2025 MindSync — ваш баланс продуктивности. Более 53 000 довольных пользователей ★★★★★</p>
    </div>
</div>

<!-- Модальное окно с демо Todo -->
<div id="todoModal" class="modal-overlay">
    <div class="todo-modal">
        <div class="todo-header">
            <h2><i class="fas fa-list-check"></i> Мои задачи</h2>
            <button class="close-modal" id="closeModalBtn"><i class="fas fa-times"></i></button>
        </div>
        <div class="todo-input-group">
            <input type="text" id="taskInput" placeholder="Написать пост, купить книгу, сделать зарядку..." autocomplete="off">
            <button id="addTaskBtn"><i class="fas fa-plus"></i> Добавить</button>
        </div>
        <ul class="todo-list" id="todoListContainer">
            <li style="justify-content:center; color:#6c63ff; opacity:0.7;">✨ Добавьте свою первую задачу!</li>
        </ul>
        <div class="todo-stats" id="todoStats">✨ 0 задач выполнено из 0</div>
    </div>
</div>
<script src="/js/landing.js"></script>
<script src="https://unpkg.com/@studio-freight/lenis"></script>
<script src="/js/smooth.js"></script>

</body>
</html>