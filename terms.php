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
                Legal Framework
            </span>
            <h1>Условия использования</h1>

            <div class="legal-content" style="display: flex; flex-direction: column; gap: 30px;">
                <div class="policy-hero-card terms-accent" style="background: rgba(14, 165, 233, 0.05); border: 1px solid var(--accent-blue); padding: 30px; border-radius: 20px;">
                    <p style="margin: 0; line-height: 1.7; font-size: 1.1rem; color: #fff;">
                        Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                        представляют собой юридически обязывающий договор между вами (далее — «Пользователь») и администрацией <strong><?= $domainTitle ?></strong>.
                        Используя наш ресурс, вы подтверждаете свое полное согласие с данными правилами.
                    </p>
                </div>

                <div class="legal-section">
                    <h2 style="color: #fff; margin-bottom: 15px;">1. Предмет Соглашения</h2>
                    <p style="color: var(--text-muted); line-height: 1.7;">
                        Компания предоставляет Пользователю доступ к контенту сайта <strong><?= $fullDomain ?></strong>, включая: 
                        инновационные технологические решения, программный код ботов, статьи об AI-инструментах и передовую цифровую инфраструктуру для автоматизации. 
                        Настоящее Соглашение регулирует все аспекты взаимодействия с нашими сервисами в Европе.
                    </p>
                </div>

                <div class="legal-section" style="background: rgba(255, 255, 255, 0.02); padding: 25px; border-radius: 15px; border: 1px solid var(--glass-border);">
                    <h2 style="color: #fff; margin-bottom: 20px;">2. Обязанности и права Пользователя</h2>
                    <p style="color: #fff; margin-bottom: 15px;">При использовании платформы <strong><?= $domainTitle ?></strong> запрещается:</p>
                    <ul class="legal-list" style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 12px; color: var(--text-muted);">
                        <li style="display: flex; gap: 10px;"><i data-lucide="x-circle" style="color: var(--accent-pink); width: 18px; flex-shrink: 0;"></i> Публиковать или передавать незаконную или вредоносную информацию.</li>
                        <li style="display: flex; gap: 10px;"><i data-lucide="x-circle" style="color: var(--accent-pink); width: 18px; flex-shrink: 0;"></i> Предпринимать действия, нарушающие работу серверов и алгоритмов <strong><?= $domainTitle ?></strong>.</li>
                        <li style="display: flex; gap: 10px;"><i data-lucide="x-circle" style="color: var(--accent-pink); width: 18px; flex-shrink: 0;"></i> Использовать сторонние скрипты для автоматизированного сбора данных без разрешения.</li>
                        <li style="display: flex; gap: 10px;"><i data-lucide="x-circle" style="color: var(--accent-pink); width: 18px; flex-shrink: 0;"></i> Копировать проприетарный код AI-ассистентов для коммерческого переиспользования.</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2 style="color: #fff; margin-bottom: 15px;">3. Интеллектуальная собственность</h2>
                    <div class="property-block" style="display: flex; gap: 20px; align-items: flex-start; background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px;">
                        <i data-lucide="copyright" style="color: var(--accent-blue); width: 30px; height: 30px; flex-shrink: 0;"></i>
                        <p style="margin: 0; color: var(--text-muted); line-height: 1.6;">
                            Весь контент на <strong><?= $fullDomain ?></strong> (тексты, архитектура ботов, графика, логотипы) является интеллектуальной собственностью. 
                            Вам предоставляется ограниченная лицензия для личного ознакомления с целью внедрения инноваций в свои проекты. Копирование структуры сайта запрещено.
                        </p>
                    </div>
                </div>

                <div class="legal-section">
                    <h2 style="color: #fff; margin-bottom: 15px;">4. Ограничение ответственности</h2>
                    <div class="warning-block" style="background: rgba(219, 39, 119, 0.05); padding: 20px; border-radius: 12px; border: 1px solid rgba(219, 39, 119, 0.2);">
                        <p style="margin: 0; color: var(--text-main); line-height: 1.6;">
                            Услуги и доступ к блогу предоставляются по принципу <strong>«как есть» (as is)</strong>. Компания не гарантирует 100% точность ответов AI-моделей и не несет ответственности за любые убытки, возникшие в результате использования инструментов <strong><?= $domainTitle ?></strong>.
                        </p>
                    </div>
                </div>

                <div class="legal-section">
                    <h2 style="color: #fff; margin-bottom: 15px;">5. Изменения и разрешение споров</h2>
                    <p style="color: var(--text-muted); line-height: 1.7;">
                        Мы оставляем за собой право изменять Условия в любое время. Все споры будут решаться путем переговоров. В случае недостижения согласия, споры подлежат рассмотрению в соответствии с законодательством по месту регистрации Компании в <strong>Германии</strong>.
                    </p>
                </div>

                <div class="contact-footer-policy" style="text-align: center; margin-top: 20px; padding: 40px; background: var(--grad-primary); border-radius: 24px; color: #fff;">
                    <h2 style="color: #fff; margin-top: 0;">Контактная информация</h2>
                    <p style="margin-bottom: 25px; opacity: 0.9;">Если у вас возникли вопросы, связанные с настоящими Условиями, пожалуйста, свяжитесь с нами:</p>
                    <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
                        <a href="mailto:support@<?= $fullDomain ?>" style="color: #fff; font-weight: 700; text-decoration: underline; display: flex; align-items: center; gap: 8px;">
                            <i data-lucide="mail"></i> support@<?= $fullDomain ?>
                        </a>
                        <span style="display: flex; align-items: center; gap: 8px;">
                            <i data-lucide="phone"></i> +49 30 18315922
                        </span>
                    </div>
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