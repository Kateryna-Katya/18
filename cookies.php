<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Технологии будущего: AI и боты</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect width='32' height='32' rx='8' fill='url(%23g)'/%3E%3Cpath d='M16 8L22 14L16 20L10 14L16 8Z' fill='white'/%3E%3Ccircle cx='16' cy='22' r='3' fill='%230EA5E9'/%3E%3Cdefs%3E%3ClinearGradient id='g' x1='0' y1='0' x2='32' y2='32' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%230EA5E9'/%3E%3Cstop offset='1' stop-color='%23DB2777'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">   
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#technologies" class="nav__link">Технологии</a></li>
                    <li><a href="./#use-cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                    <li><a href="./#faq" class="nav__link">Вопросы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--primary header__btn">
                <span>Связаться</span>
                <i data-lucide="arrow-up-right"></i>
            </a>

            <button class="burger" id="burger-menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag" style="color: var(--accent-pink); font-weight: 600; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; display: block; margin-bottom: 15px;">
                User Experience & Privacy
            </span>

            <div class="legal-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px; border-bottom: 1px solid var(--glass-border); padding-bottom: 20px;">
                <div style="color: var(--accent-blue); display: flex;">
                    <i data-lucide="cookie" style="width: 40px; height: 40px;"></i>
                </div>
                <h1 style="margin: 0; font-size: clamp(1.8rem, 4vw, 2.5rem);">Политика файлов cookie</h1>
            </div>

            <div class="legal-content" style="display: flex; flex-direction: column; gap: 25px;">
                <p class="lead-text" style="font-size: 1.15rem; color: var(--text-main); line-height: 1.7;">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы ваш путь от идеи до реализации AI-ассистента был максимально комфортным, мы используем файлы cookie. Это инновационная технология, которая позволяет нам анализировать предпочтения пользователей и оптимизировать нашу передовую цифровую инфраструктуру.
                </p>

                <div class="legal-block" style="background: rgba(255, 255, 255, 0.02); padding: 25px; border-radius: 15px; border: 1px solid var(--glass-border);">
                    <h2 style="color: #fff; font-size: 1.5rem; margin-bottom: 15px;">Что такое файлы cookie?</h2>
                    <p style="color: var(--text-muted); line-height: 1.7;">
                        Файл cookie — это небольшой фрагмент данных, который платформа <strong><?= $domainTitle ?></strong> сохраняет на вашем устройстве. Это позволяет нам "помнить" ваши действия (например, настройки языка, регион Германия) и предоставлять контент, который максимально соответствует вашим интересам в сфере разработки ботов.
                    </p>
                </div>

                <h2 style="color: #fff; font-size: 1.5rem; margin-top: 10px;">Типы используемых cookie</h2>
                <div class="cookie-types-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                    <div style="padding: 20px; border-radius: 12px; background: rgba(14, 165, 233, 0.05); border: 1px solid rgba(14, 165, 233, 0.1);">
                        <strong style="color: var(--accent-blue); display: block; margin-bottom: 8px;">Строго необходимые</strong>
                        <span style="font-size: 0.95rem; color: var(--text-muted);">Критически важны для безопасной навигации по сайту и доступа к функциям AI-блога.</span>
                    </div>
                    <div style="padding: 20px; border-radius: 12px; background: rgba(219, 39, 119, 0.05); border: 1px solid rgba(219, 39, 119, 0.1);">
                        <strong style="color: var(--accent-pink); display: block; margin-bottom: 8px;">Аналитические</strong>
                        <span style="font-size: 0.95rem; color: var(--text-muted);">Помогают нам понять, какие "решения, меняющие правила игры", наиболее интересны аудитории в Европе.</span>
                    </div>
                </div>

                <div class="legal-block">
                    <h2 style="color: #fff; font-size: 1.5rem; margin-bottom: 15px;">Ваш выбор и управление</h2>
                    <p style="color: var(--text-muted); line-height: 1.7;">
                        Вы имеете полный контроль над своими данными. Вы можете в любой момент изменить настройки cookie в браузере. Помните, что платформа уже доступна в Европе, и мы строго следуем местным стандартам защиты данных.
                    </p>
                </div>

                <div class="contact-info-block" style="margin-top: 30px; padding: 30px; background: var(--grad-primary); border-radius: 20px; color: #fff;">
                    <h2 style="margin-top: 0; color: #fff;">Остались вопросы?</h2>
                    <p style="margin-bottom: 25px; opacity: 0.9;">Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, наша поддержка по всем вопросам всегда на связи:</p>
                    <ul class="contact-data" style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 12px;">
                        <li style="display: flex; align-items: center; gap: 10px;">
                            <i data-lucide="mail" style="width: 18px;"></i>
                            <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" style="color: #fff; text-decoration: underline;">hello@<?= $fullDomain ?></a>
                        </li>
                        <li style="display: flex; align-items: center; gap: 10px;">
                            <i data-lucide="phone" style="width: 18px;"></i>
                            <strong>Телефон:</strong> <a href="tel:+493018315922" style="color: #fff; text-decoration: underline;">+49 30 18315922</a>
                        </li>
                        <li style="display: flex; align-items: center; gap: 10px;">
                            <i data-lucide="map-pin" style="width: 18px;"></i>
                            <strong>Адрес:</strong> Friedrichstraße 68, 10117 Berlin, Germany
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__col footer__col--info">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">
                    Инновационная технология разработки AI-ассистентов, которая меняет правила игры в цифровой индустрии.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#technologies">Технологии</a></li>
                    <li><a href="./#use-cases">Кейсы</a></li>
                    <li><a href="./#blog">Блог</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-list">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+493018315922">+49 30 18315922</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>Friedrichstraße 68, 10117 Berlin, Germany</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>© 2026 <?= $domainTitle ?>. Все права защищены. Платформа уже доступна в Европе.</p>
        </div>
    </footer>
    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="accept-cookies" class="btn btn--primary btn--small">Принять</button>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>