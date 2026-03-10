// Main interactive scripts for dark animated theme
// 1. Particle background (simple canvas dots moving)
// 2. IntersectionObserver for fade-in elements
// 3. Typewriter effect for hero heading
// 4. Mobile menu toggle

(function() {
    // particle canvas setup
    const canvas = document.getElementById('canvas-particles');
    if(canvas) {
        const ctx = canvas.getContext('2d');
        let particles = [];
        const num = 100;
        let w, h;
        function resize() {
            w = canvas.width = window.innerWidth;
            h = canvas.height = window.innerHeight;
        }
        function init() {
            particles = [];
            for(let i=0;i<num;i++) {
                particles.push({
                    x: Math.random()*w,
                    y: Math.random()*h,
                    vx: (Math.random()-0.5)*0.5,
                    vy: (Math.random()-0.5)*0.5,
                    r: Math.random()*2+1
                });
            }
        }
        function draw() {
            ctx.clearRect(0,0,w,h);
            ctx.fillStyle = 'rgba(255,255,255,0.2)';
            particles.forEach(p=>{
                ctx.beginPath();
                ctx.arc(p.x,p.y,p.r,0,Math.PI*2);
                ctx.fill();
                p.x += p.vx;
                p.y += p.vy;
                if(p.x<0)p.x=w;
                if(p.x>w)p.x=0;
                if(p.y<0)p.y=h;
                if(p.y>h)p.y=0;
            });
            requestAnimationFrame(draw);
        }
        window.addEventListener('resize', () => { resize(); init(); });
        resize(); init(); draw();
    }

    // scroll reveal
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(ent => {
            if(ent.isIntersecting) {
                ent.target.classList.add('visible');
            }
        });
    }, {threshold:0.2});
    document.querySelectorAll('.fade-in').forEach(el=>observer.observe(el));

    // typewriter effect is handled via CSS animation in our case

    // mobile menu toggle
    const toggle = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.header-nav');
    if(toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('open');
        });
    }
})();