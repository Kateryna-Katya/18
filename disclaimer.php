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
                Legal Notice & Risk Disclosure
            </span>

            <div class="legal-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px; border-bottom: 1px solid var(--glass-border); padding-bottom: 20px;">
                <div style="color: var(--accent-blue); display: flex;">
                    <i data-lucide="alert-triangle" style="width: 40px; height: 40px;"></i>
                </div>
                <h1 style="margin: 0; font-size: clamp(1.8rem, 4vw, 2.5rem);">Отказ от ответственности</h1>
            </div>

            <div class="legal-content" style="display: flex; flex-direction: column; gap: 25px;">
                
                <div class="legal-block" style="background: rgba(255, 255, 255, 0.02); padding: 25px; border-radius: 15px; border-left: 4px solid var(--accent-blue);">
                    <p style="margin: 0; line-height: 1.7;">
                        <strong>Общая информация:</strong> Все материалы, технические статьи и программные решения, 
                        опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно 
                        информационно-ознакомительный характер. Они представляют собой 
                        инновационные технологии и передовую цифровую инфраструктуру, но не являются 
                        персональной рекомендацией по внедрению, юридическим советом или гарантированным бизнес-планом.
                    </p>
                </div>

                <div class="legal-block">
                    <p style="line-height: 1.7; color: var(--text-muted);">
                        <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает прямых гарантий 
                        относительно точности алгоритмов или стабильности сторонних AI-инструментов, упомянутых в блоге. 
                        Любые кейсы, демонстрирующие "решения, которые меняют правила игры", основаны на частных результатах. 
                        Эффективность ваших AI-ассистентов и автоматизации зависит от множества факторов, включая настройки и 
                        качество входных данных, и может отличаться от приведенных примеров.
                    </p>
                </div>

                <div class="legal-block">
                    <p style="line-height: 1.7; color: var(--text-muted);">
                        <strong>Ограничение ответственности:</strong> Администрация <strong><?= $fullDomain ?></strong> 
                        и её аффилированные лица не несут ответственности за возможные сбои в работе ботов, потерю данных или 
                        финансовые убытки, возникшие в результате использования представленных методологий. 
                        Вся ответственность за интеграцию технологий и возможные последствия лежит исключительно на пользователе. 
                        Платформа работает на базе данных, которые считаются актуальными на момент публикации.
                    </p>
                </div>

                <div class="legal-block risk-warning" style="background: rgba(219, 39, 119, 0.05); padding: 25px; border-radius: 15px; border: 1px dashed var(--accent-pink);">
                    <p style="margin: 0; line-height: 1.7;">
                        <strong>Предупреждение о рисках:</strong> Любая деятельность, связанная с автоматизацией бизнес-процессов 
                        и внедрением AI, сопряжена с определенным техническим риском. Перед принятием важных решений 
                        мы рекомендуем провести собственное исследование. Предложение и услуги платформы 
                        активны только в странах ЕС.
                    </p>
                </div>

                <div class="legal-block agreement" style="margin-top: 20px; font-size: 0.95rem; border-top: 1px solid var(--glass-border); padding-top: 20px;">
                    <p style="color: var(--text-main);">
                        <strong>Подтверждение пользователя:</strong> Продолжая использовать 
                        ресурс <strong><?= $domainTitle ?></strong>, вы подтверждаете, что полностью осознаете 
                        и принимаете условия данного Дисклеймера, действуете по собственной воле и осознаете 
                        все риски, связанные с высокими технологиями.
                    </p>
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