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
                Data Protection & GDPR
            </span>

            <div class="legal-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px; border-bottom: 1px solid var(--glass-border); padding-bottom: 20px;">
                <div style="color: var(--accent-blue); display: flex;">
                    <i data-lucide="shield-check" style="width: 40px; height: 40px;"></i>
                </div>
                <h1 style="margin: 0; font-size: clamp(1.8rem, 4vw, 2.5rem);">Политика обработки данных</h1>
            </div>

            <div class="legal-content" style="display: flex; flex-direction: column; gap: 30px;">
                
                <div class="policy-intro">
                    <h2 style="color: #fff; margin-bottom: 15px;">1. Общие положения</h2>
                    <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 15px;">
                        Настоящая политика обработки персональных данных (далее — «Политика») определяет порядок и условия обработки информации, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), направленные на обеспечение безопасности передовой цифровой инфраструктуры.
                    </p>
                    <p style="color: var(--text-muted); line-height: 1.7;">
                        1.1. Оператор считает своей важнейшей целью защиту прав и свобод человека при обработке его данных, в том числе защиту прав на неприкосновенность частной жизни и личную тайну в рамках предоставления услуг по разработке ботов и AI-ассистентов.
                    </p>
                </div>

                <div class="policy-section" style="background: rgba(255, 255, 255, 0.02); padding: 25px; border-radius: 15px; border: 1px solid var(--glass-border);">
                    <h2 style="color: #fff; margin-bottom: 20px;">2. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                        <div class="data-item" style="display: flex; align-items: flex-start; gap: 15px;">
                            <div style="color: var(--accent-pink);"><i data-lucide="user" style="width: 24px;"></i></div>
                            <div>
                                <strong style="display: block; color: #fff; margin-bottom: 5px;">Личные данные:</strong>
                                <span style="font-size: 0.95rem; color: var(--text-muted);">ФИО, Email, номер телефона пользователя.</span>
                            </div>
                        </div>
                        <div class="data-item" style="display: flex; align-items: flex-start; gap: 15px;">
                            <div style="color: var(--accent-blue);"><i data-lucide="fingerprint" style="width: 24px;"></i></div>
                            <div>
                                <strong style="display: block; color: #fff; margin-bottom: 5px;">Технические данные:</strong>
                                <span style="font-size: 0.95rem; color: var(--text-muted);">Cookies, IP-адрес, тип браузера и системная информация.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section">
                    <h2 style="color: #fff; margin-bottom: 15px;">3. Цели обработки данных</h2>
                    <p style="color: var(--text-muted); margin-bottom: 15px;">Мы используем инновационные технологии обработки для следующих целей:</p>
                    <ul class="legal-list" style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 10px;">
                        <li style="display: flex; align-items: center; gap: 10px; color: var(--text-muted);">
                            <i data-lucide="check-circle-2" style="color: var(--accent-blue); width: 18px;"></i>
                            Идентификация Пользователя для доступа к функциям AI-платформы.
                        </li>
                        <li style="display: flex; align-items: center; gap: 10px; color: var(--text-muted);">
                            <i data-lucide="check-circle-2" style="color: var(--accent-blue); width: 18px;"></i>
                            Установление обратной связи и экспертная поддержка на всех этапах.
                        </li>
                        <li style="display: flex; align-items: center; gap: 10px; color: var(--text-muted);">
                            <i data-lucide="check-circle-2" style="color: var(--accent-blue); width: 18px;"></i>
                            Улучшение качества работы алгоритмов и интерфейса блога.
                        </li>
                        <li style="display: flex; align-items: center; gap: 10px; color: var(--text-muted);">
                            <i data-lucide="check-circle-2" style="color: var(--accent-blue); width: 18px;"></i>
                            Персонализация предложений для пользователей в Германии и ЕС.
                        </li>
                    </ul>
                </div>

                <div class="policy-section" style="border-top: 1px solid var(--glass-border); padding-top: 30px;">
                    <h2 style="color: #fff; margin-bottom: 15px;">4. Правовые основания</h2>
                    <p style="color: var(--text-muted); line-height: 1.7;">
                        Оператор обрабатывает персональные данные Пользователя только в случае их заполнения и/или отправки Пользователем самостоятельно через специальные формы на сайте <strong><?= $fullDomain ?></strong>. Продолжая пользоваться сайтом, вы подтверждаете свое согласие с данной Политикой.
                    </p>
                </div>

                <div class="contact-footer-policy" style="background: var(--grad-primary); padding: 30px; border-radius: 20px; color: #fff; text-align: center;">
                    <h2 style="color: #fff; margin-top: 0;">5. Вопросы и отзывы</h2>
                    <p style="margin-bottom: 20px;">Если у вас возникли вопросы касательно защиты данных на платформе <strong><?= $domainTitle ?></strong>, свяжитесь с нами:</p>
                    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
                        <a href="mailto:support@<?= $fullDomain ?>" style="color: #fff; font-weight: 700; text-decoration: underline; display: flex; align-items: center; gap: 8px;">
                            <i data-lucide="mail" style="width: 18px;"></i> support@<?= $fullDomain ?>
                        </a>
                        <span style="display: flex; align-items: center; gap: 8px;">
                            <i data-lucide="map-pin" style="width: 18px;"></i> Friedrichstraße 68, 10117 Berlin
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