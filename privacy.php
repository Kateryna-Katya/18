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
                Privacy Protection
            </span>
            <h1>Политика конфиденциальности</h1>

            <div class="legal-content" style="display: flex; flex-direction: column; gap: 30px;">
                <div class="policy-hero-card" style="background: rgba(14, 165, 233, 0.05); border: 1px solid var(--accent-blue); padding: 30px; border-radius: 20px;">
                    <p style="margin: 0; line-height: 1.7; font-size: 1.1rem; color: #fff;">
                        Политика конфиденциальности распространяется на персональные данные,
                        предоставляемые клиентами <strong><?= $domainTitle ?></strong> как для оказания услуг по 
                        разработке ботов и AI-ассистентов, так и для взаимодействия с контентом нашего блога в электронном формате.
                    </p>
                </div>

                <div class="policy-notice" style="border-left: 3px solid var(--accent-pink); padding-left: 20px; color: var(--text-muted);">
                    <p style="font-size: 0.95rem; line-height: 1.6;">
                        <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в положения Политики. Обратите внимание, что наши решения и статьи могут содержать ссылки на сторонние AI-сервисы. Предоставляя свои данные, вы даете полное согласие на их обработку способами, предусмотренными настоящей Политикой.
                    </p>
                </div>

                <h2 style="color: #fff; margin-top: 10px;">Порядок сбора, хранения и уничтожения</h2>
                <div class="storage-info" style="display: flex; gap: 30px; flex-wrap: wrap; margin-bottom: 10px;">
                    <div class="storage-item" style="display: flex; align-items: center; gap: 12px; background: rgba(255,255,255,0.02); padding: 15px 25px; border-radius: 12px; border: 1px solid var(--glass-border);">
                        <i data-lucide="history" style="color: var(--accent-blue);"></i>
                        <span>Срок хранения до <strong>75 лет</strong></span>
                    </div>
                    <div class="storage-item" style="display: flex; align-items: center; gap: 12px; background: rgba(255,255,255,0.02); padding: 15px 25px; border-radius: 12px; border: 1px solid var(--glass-border);">
                        <i data-lucide="user-check" style="color: var(--accent-pink);"></i>
                        <span>Только с вашего согласия</span>
                    </div>
                </div>
                <p style="color: var(--text-muted); line-height: 1.7;">
                    Для предотвращения утечки данных при разработке и тестировании ботов мы используем полный комплекс мер информационной безопасности. Уничтожение или блокирование данных осуществляется по запросу клиента или при достижении целей сбора.
                </p>

                <div class="data-collection-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
                    <div class="data-box" style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 20px; border: 1px solid var(--glass-border);">
                        <h3 style="color: #fff; display: flex; align-items: center; gap: 10px; margin-bottom: 20px; font-size: 1.25rem;">
                            <i data-lucide="cpu" style="color: var(--accent-blue);"></i> Техническая информация
                        </h3>
                        <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 10px; color: var(--text-muted);">
                            <li>• IP-адрес и время доступа</li>
                            <li>• Источники перехода на <strong><?= $fullDomain ?></strong></li>
                            <li>• Данные браузера и логи взаимодействия с AI</li>
                        </ul>
                    </div>
                    <div class="data-box" style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 20px; border: 1px solid var(--glass-border);">
                        <h3 style="color: #fff; display: flex; align-items: center; gap: 10px; margin-bottom: 20px; font-size: 1.25rem;">
                            <i data-lucide="contact" style="color: var(--accent-pink);"></i> Персонализация
                        </h3>
                        <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 10px; color: var(--text-muted);">
                            <li>• Имя пользователя</li>
                            <li>• E-mail и номер телефона</li>
                            <li>• Данные о заказанных AI-решениях</li>
                        </ul>
                    </div>
                </div>

                <h2 style="color: #fff; margin-top: 10px;">Цели обработки данных</h2>
                <ul class="legal-list" style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 12px; color: var(--text-muted);">
                    <li style="display: flex; gap: 10px;"><i data-lucide="check" style="color: var(--accent-blue); flex-shrink: 0;"></i> Предоставление доступа к передовой цифровой инфраструктуре блога.</li>
                    <li style="display: flex; gap: 10px;"><i data-lucide="check" style="color: var(--accent-blue); flex-shrink: 0;"></i> Учет пожеланий при разработке ботов и AI-ассистентов.</li>
                    <li style="display: flex; gap: 10px;"><i data-lucide="check" style="color: var(--accent-blue); flex-shrink: 0;"></i> Информирование об инновациях и обновлениях платформы.</li>
                </ul>

                <div class="rights-block" style="margin-top: 20px; background: var(--grad-primary); padding: 40px; border-radius: 24px; text-align: center; color: #fff;">
                    <h2 style="color: #fff; margin-top: 0;">Ваши права</h2>
                    <p style="margin-bottom: 25px; opacity: 0.9;">
                        Вы имеете право на удаление или редактирование своих данных. Свяжитесь с командой <strong><?= $domainTitle ?></strong> для реализации ваших прав:
                    </p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="contact-btn" style="display: inline-flex; align-items: center; gap: 10px; background: #fff; color: var(--accent-pink); padding: 15px 35px; border-radius: 50px; font-weight: 700; transition: 0.3s;">
                        <i data-lucide="mail"></i> support@<?= $fullDomain ?>
                    </a>
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