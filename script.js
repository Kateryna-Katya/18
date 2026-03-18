document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок
    lucide.createIcons();

    // 2. AOS (Анимации при скролле)
    AOS.init({ once: true, duration: 1000 });

    // 3. Мобильное меню
    const burger = document.getElementById('burger-menu');
    const nav = document.getElementById('nav-menu');
    const navLinks = document.querySelectorAll('.nav__link');

    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
        nav.classList.toggle('active');
        document.body.classList.toggle('no-scroll');
    });

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            burger.classList.remove('active');
            nav.classList.remove('active');
            document.body.classList.remove('no-scroll');
        });
    });

    // 4. Header scroll эффект
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('header--scrolled', window.scrollY > 50);
    });

    // 5. Canvas Hero Animation (Particles)
    const canvas = document.getElementById('hero-canvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let width, height, particles = [];
        const resize = () => {
            width = window.innerWidth; height = window.innerHeight;
            canvas.width = width; canvas.height = height;
        };
        window.addEventListener('resize', resize); resize();

        class P {
            constructor() {
                this.x = Math.random() * width; this.y = Math.random() * height;
                this.vx = (Math.random() - 0.5) * 0.5; this.vy = (Math.random() - 0.5) * 0.5;
                this.r = Math.random() * 2;
            }
            update() {
                this.x += this.vx; this.y += this.vy;
                if (this.x<0||this.x>width) this.vx*=-1; if (this.y<0||this.y>height) this.vy*=-1;
            }
            draw() {
                ctx.beginPath(); ctx.arc(this.x, this.y, this.r, 0, Math.PI*2);
                ctx.fillStyle = '#db2777'; ctx.fill();
            }
        }
        for(let i=0; i<80; i++) particles.push(new P());
        function anim() {
            ctx.clearRect(0,0,width,height);
            particles.forEach(p => { p.update(); p.draw(); });
            requestAnimationFrame(anim);
        }
        anim();
    }

    // 6. FAQ Accordion
    const accordionHeaders = document.querySelectorAll('.accordion__header');
    accordionHeaders.forEach(h => {
        h.addEventListener('click', () => {
            const item = h.parentElement;
            const wasActive = item.classList.contains('active');
            document.querySelectorAll('.accordion__item').forEach(i => i.classList.remove('active'));
            if (!wasActive) item.classList.add('active');
        });
    });

    // 7. Контактная форма: Капча и Валидация
    const form = document.getElementById('contact-form');
    const phoneInput = document.getElementById('phone-input');
    const captchaLabel = document.getElementById('captcha-label');
    const captchaInput = document.getElementById('captcha-input');
    const formMsg = document.getElementById('form-message');

    let num1 = Math.floor(Math.random() * 10);
    let num2 = Math.floor(Math.random() * 10);
    let captchaSum = num1 + num2;
    if (captchaLabel) captchaLabel.textContent = `Сколько будет ${num1} + ${num2}?`;

    phoneInput?.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '');
    });

    form?.addEventListener('submit', (e) => {
        e.preventDefault();
        if (parseInt(captchaInput.value) !== captchaSum) {
            formMsg.textContent = "Неверный ответ капчи!";
            formMsg.className = "form__message error";
            return;
        }

        formMsg.textContent = "Отправка...";
        formMsg.className = "form__message success";

        // Симуляция AJAX
        setTimeout(() => {
            formMsg.textContent = "Спасибо! Ваша заявка успешно отправлена.";
            form.reset();
            // Обновляем капчу
            num1 = Math.floor(Math.random() * 10); num2 = Math.floor(Math.random() * 10);
            captchaSum = num1 + num2; captchaLabel.textContent = `Сколько будет ${num1} + ${num2}?`;
        }, 1500);
    });

    // 8. Cookie Popup
    const cookiePopup = document.getElementById('cookie-popup');
    const acceptBtn = document.getElementById('accept-cookies');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => cookiePopup.classList.add('active'), 2000);
    }

    acceptBtn?.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup.classList.remove('active');
    });
});