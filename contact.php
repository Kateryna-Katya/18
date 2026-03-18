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
            <span class="section-tag" style="color: var(--accent-pink); font-weight: 600; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; display: block; margin-bottom: 10px;">
                Expert Support
            </span>
            
            <h1>Контактная информация</h1>

            <p class="lead-text" style="font-size: 1.2rem; color: var(--text-muted); margin-bottom: 40px; line-height: 1.6; max-width: 800px;">
                Команда <strong><?= $domainTitle ?></strong> всегда готова к обсуждению новых проектов в сфере автоматизации и AI. 
                Нужна инновационная технология для вашего бизнеса или экспертная поддержка на всех этапах разработки бота? 
                Наши специалисты в Берлине на связи и готовы помочь вам внедрить решения, которые меняют правила игры.
            </p>

            <div class="contact-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-bottom: 50px;">
                
                <div class="contact-card" style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--glass-border); padding: 30px; border-radius: 20px; transition: 0.3s;">
                    <div class="contact-card__icon" style="color: var(--accent-blue); margin-bottom: 20px;">
                        <i data-lucide="mail" style="width: 32px; height: 32px;"></i>
                    </div>
                    <h2 style="font-size: 1.5rem; margin-bottom: 10px; color: #fff;">Пишите нам</h2>
                    <p style="margin-bottom: 20px; color: var(--text-muted);">Для запросов на разработку AI-ассистентов и предложений:</p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="contact-link" style="color: var(--accent-pink); font-weight: 600; font-size: 1.1rem; word-break: break-all;">
                        support@<?= $fullDomain ?>
                    </a>
                </div>

                <div class="contact-card" style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--glass-border); padding: 30px; border-radius: 20px; transition: 0.3s;">
                    <div class="contact-card__icon" style="color: var(--accent-blue); margin-bottom: 20px;">
                        <i data-lucide="phone-call" style="width: 32px; height: 32px;"></i>
                    </div>
                    <h2 style="font-size: 1.5rem; margin-bottom: 10px; color: #fff;">Звоните</h2>
                    <p style="margin-bottom: 20px; color: var(--text-muted);">Прямая линия для технических консультаций и поддержки:</p>
                    <a href="tel:+493018315922" class="contact-link" style="color: var(--accent-pink); font-weight: 600; font-size: 1.1rem;">
                        +49 30 18315922
                    </a>
                </div>

                <div class="contact-card" style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--glass-border); padding: 30px; border-radius: 20px; transition: 0.3s;">
                    <div class="contact-card__icon" style="color: var(--accent-blue); margin-bottom: 20px;">
                        <i data-lucide="map-pin" style="width: 32px; height: 32px;"></i>
                    </div>
                    <h2 style="font-size: 1.5rem; margin-bottom: 10px; color: #fff;">Наш офис</h2>
                    <p style="margin-bottom: 20px; color: var(--text-muted);">Центр разработки <strong><?= $domainTitle ?></strong> расположен по адресу:</p>
                    <address style="font-style: normal; color: #fff; line-height: 1.6;">
                        Friedrichstraße 68,<br>
                        10117 Berlin,<br>
                        Germany
                    </address>
                </div>
            </div>

            <div class="contact-extra" style="border-top: 1px solid var(--glass-border); padding-top: 30px; color: var(--text-muted);">
                <p>
                    Платформа уже доступна в Европе. Все входящие запросы обрабатываются в течение 24 часов. 
                    Вы также можете воспользоваться формой обратной связи на 
                    <a href="./#contact" style="color: var(--accent-blue); text-decoration: underline;">главной странице</a> для мгновенной отправки запроса.
                </p>
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