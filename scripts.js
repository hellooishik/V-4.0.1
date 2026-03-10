// UKDating Premium Theme - Interactive Script
// Enhanced micro-interactions and animations

(function() {
    'use strict';

    // === Intersection Observer for Scroll Reveal ===
    function initScrollReveal() {
        const options = {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
    }

    // === Mobile Menu Toggle ===
    function initMobileMenu() {
        const toggle = document.querySelector('.mobile-menu-toggle');
        const nav = document.querySelector('.header-nav');

        if (!toggle || !nav) return;

        toggle.addEventListener('click', () => {
            nav.classList.toggle('open');
        });

        nav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('open');
            });
        });
    }

    // === Profile Card Hover Animation ===
    function initProfileCards() {
        const cards = document.querySelectorAll('.profile-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transition = 'all 0.3s ease';
            });
        });
    }

    // === Smooth Scroll to Anchors ===
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                const target = document.querySelector(href);

                if (target) {
                    e.preventDefault();
                    const offset = 70;
                    const targetPosition = target.offsetTop - offset;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // === Button Ripple Effect ===
    function initRippleEffect() {
        const buttons = document.querySelectorAll('.primary-btn, .secondary-btn');

        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const ripple = document.createElement('span');
                ripple.style.position = 'absolute';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.style.width = '20px';
                ripple.style.height = '20px';
                ripple.style.background = 'rgba(255, 255, 255, 0.5)';
                ripple.style.borderRadius = '50%';
                ripple.style.transform = 'scale(0)';
                ripple.style.pointerEvents = 'none';
                ripple.style.animation = 'ripple-animation 0.6s ease-out';

                this.style.overflow = 'hidden';
                this.appendChild(ripple);

                setTimeout(() => ripple.remove(), 600);
            });
        });

        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple-animation {
                to { transform: scale(4); opacity: 0; }
            }
        `;
        document.head.appendChild(style);
    }

    // === Pricing Card Highlight ===
    function initPricingCards() {
        const pricingCards = document.querySelectorAll('.pricing-card');

        pricingCards.forEach(card => {
            if (card.classList.contains('featured')) {
                card.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 20px 60px rgba(214, 52, 71, 0.25)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '0 10px 40px rgba(214, 52, 71, 0.15)';
                });
            }
        });
    }

    // === Header Shadow on Scroll ===
    function initHeaderScroll() {
        const header = document.querySelector('.dark-header');
        if (!header) return;

        window.addEventListener('scroll', () => {
            if (window.scrollY > 5) {
                header.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.12)';
            } else {
                header.style.boxShadow = '0 2px 8px rgba(0,0,0,0.08)';
            }
        });
    }

    // === Initialize All on DOM Ready ===
    function init() {
        initScrollReveal();
        initMobileMenu();
        initProfileCards();
        initSmoothScroll();
        initRippleEffect();
        initPricingCards();
        initHeaderScroll();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
