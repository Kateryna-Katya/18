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
                Customer Protection
            </span>
            <h1>Политика возврата средств</h1>
            
            <div class="legal-content" style="display: flex; flex-direction: column; gap: 30px;">
                <div class="policy-hero-card refund-accent" style="background: rgba(219, 39, 119, 0.05); border: 1px solid var(--accent-pink); padding: 30px; border-radius: 20px;">
                    <p style="margin: 0; line-height: 1.7; font-size: 1.1rem; color: #fff;">
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, 
                        основанная на качестве разработки AI-ассистентов и защите ваших интересов.
                    </p>
                </div>

                <h2 style="color: #fff; margin-top: 10px;">Условия для оформления возврата</h2>
                <div class="refund-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                    <div class="refund-card" style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--glass-border); padding: 25px; border-radius: 15px;">
                        <i data-lucide="file-warning" style="color: var(--accent-blue); margin-bottom: 15px;"></i>
                        <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Несоответствие ТЗ</h3>
                        <p style="color: var(--text-muted); font-size: 0.95rem;">Если итоговое решение или функционал бота существенно отличается от заявленного на <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card" style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--glass-border); padding: 25px; border-radius: 15px;">
                        <i data-lucide="settings-2" style="color: var(--accent-blue); margin-bottom: 15px;"></i>
                        <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Технические проблемы</h3>
                        <p style="color: var(--text-muted); font-size: 0.95rem;">Критические ошибки в коде на <strong><?= $fullDomain ?></strong>, которые не были устранены нашей поддержкой.</p>
                    </div>
                    <div class="refund-card" style="background: rgba(255, 255, 255, 0.03); border: 1px solid var(--glass-border); padding: 25px; border-radius: 15px;">
                        <i data-lucide="clock" style="color: var(--accent-blue); margin-bottom: 15px;"></i>
                        <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Период охлаждения</h3>
                        <p style="color: var(--text-muted); font-size: 0.95rem;">Отказ от консультационных услуг в течение 14 дней при условии минимального использования ресурсов.</p>
                    </div>
                </div>

                <div class="procedure-block" style="background: rgba(255, 255, 255, 0.02); padding: 30px; border-radius: 20px; border: 1px solid var(--glass-border);">
                    <h2 style="color: #fff; margin-top: 0;">Процедура запроса</h2>
                    <p style="color: var(--text-muted); margin-bottom: 20px;">Чтобы инициировать возврат на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-mini" style="display: flex; flex-direction: column; gap: 12px;">
                        <div style="display: flex; align-items: center; gap: 15px; color: #fff;">
                            <span style="background: var(--grad-primary); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; font-weight: bold;">1</span> 
                            Письмо на <a href="mailto:support@<?= $fullDomain ?>" style="color: var(--accent-blue);">support@<?= $fullDomain ?></a>
                        </div>
                        <div style="display: flex; align-items: center; gap: 15px; color: #fff;">
                            <span style="background: var(--grad-primary); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; font-weight: bold;">2</span> 
                            Тема: «Запрос на возврат средств — <?= $domainTitle ?>»
                        </div>
                        <div style="display: flex; align-items: center; gap: 15px; color: #fff;">
                            <span style="background: var(--grad-primary); width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; font-weight: bold;">3</span> 
                            Данные: ФИО, Email, Номер заказа/счета
                        </div>
                    </div>
                </div>

                <h2 style="color: #fff;">Сроки и способ возврата</h2>
                <p style="color: var(--text-muted); line-height: 1.7;">
                    После одобрения вашего запроса, возврат денежных средств будет произведен в течение <strong>7–14 рабочих дней</strong>. 
                    Средства возвращаются тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления 
                    зависит от регламента вашего банка в <strong>Германии</strong> или стране вашего пребывания в Европе.
                </p>

                <div class="warning-block" style="border-top: 1px solid var(--glass-border); padding-top: 30px;">
                    <h2 style="color: #fff; font-size: 1.5rem; margin-bottom: 15px;">Исключения</h2>
                    <ul class="legal-list" style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 10px; color: var(--text-muted);">
                        <li style="display: flex; gap: 10px;"><i data-lucide="x-circle" style="color: var(--accent-pink); flex-shrink: 0; width: 18px;"></i> Запрос подан по истечении 14 календарных дней с момента оплаты.</li>
                        <li style="display: flex; gap: 10px;"><i data-lucide="x-circle" style="color: var(--accent-pink); flex-shrink: 0; width: 18px;"></i> Техническое решение уже было полностью внедрено в вашу инфраструктуру.</li>
                        <li style="display: flex; gap: 10px;"><i data-lucide="x-circle" style="color: var(--accent-pink); flex-shrink: 0; width: 18px;"></i> Проблемы на стороне пользовательского ПО или интернет-соединения.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy" style="text-align: center; margin-top: 20px; padding: 30px; background: rgba(14, 165, 233, 0.05); border-radius: 20px;">
                    <h2 style="color: #fff; margin-top: 0;">Остались вопросы?</h2>
                    <p style="color: var(--text-muted); margin-bottom: 20px;">По всем вопросам, связанным с возвратом средств, обращайтесь в нашу службу поддержки:</p>
                    <a href="mailto:support@<?= $fullDomain ?>" style="color: #fff; font-weight: 700; background: var(--grad-primary); padding: 12px 30px; border-radius: 50px; display: inline-block;">support@<?= $fullDomain ?></a>
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