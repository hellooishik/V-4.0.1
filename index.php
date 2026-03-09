<?php
/**
 * Main Template - Starry Night Theme
 */
get_header();
?>

    <!-- Clean Bright Hero Section -->
    <section class="hero-section bumble-hero">
        <div class="hero-container">
            <div class="hero-content">
                <div class="logo-wrapper">
                    <div class="logo-heart">♥</div>
                </div>
                <h1>Find your person.</h1>
                <p>We set up users on blind dates. No endless swiping. No ghosting. Just genuine face-to-face connections based on your availability and location.</p>
                <div class="hero-buttons">
                    <a href="<?php echo home_url('/join'); ?>" class="cta-btn primary-btn bumble-btn">Join the club</a>
                    <a href="#mission" class="cta-btn secondary-btn outline-btn">How it works</a>
                </div>
            </div>
            
            <div class="hero-visual">
                <!-- Move canvas here so it's a specific object rather than a background -->
                <canvas id="canvas-stars"></canvas>
                <div class="glow-orb"></div>
            </div>
        </div>
    </section>

    <!-- Simple Friendly Features -->
    <section class="features-section bumble-features">
        <div class="feature-row">
            <div class="feature-text">
                <h2>Verified real people</h2>
                <p>We believe in genuine human connection, not digital personas. Every user is verified to ensure you meet real people, not curated or fake profiles.</p>
            </div>
            <div class="feature-image soft-card">
                <div class="feature-icon large-icon">🌍</div>
            </div>
        </div>
        
        <div class="feature-row reverse">
            <div class="feature-text">
                <h2>Meaningful conversations</h2>
                <p>Skip the endless messaging. Have meaningful conversations face-to-face where real chemistry happens naturally.</p>
            </div>
            <div class="feature-image soft-card">
                <div class="feature-icon large-icon">💬</div>
            </div>
        </div>

        <div class="feature-row">
            <div class="feature-text">
                <h2>Dates arranged for you</h2>
                <p>Forget the superficial left-right game. We provide curated introductions based on deep compatibility, and we set up the time and place.</p>
            </div>
            <div class="feature-image soft-card">
                <div class="feature-icon large-icon">📅</div>
            </div>
        </div>
    </section>

    <!-- Removed Bento Box since Bumble style doesn't fit the dark complex grid. Replaced with simple value props -->
    
    <!-- Bold Statement Mission Section -->
    <section id="mission" class="mission-section bumble-mission">
        <div class="mission-content">
            <h2>Make the first move in real life.</h2>
            <div class="mission-statement">
                <p>We are ending online dating inequality. For women, it means getting rid of catfish and dangerous subscriptions. For men, it means actually getting dates and growing confidence in the real world.</p>
                <p>Grounded in reality. Meet people, have real conversations, and grow as a person.</p>
            </div>
            
            <div class="mission-buttons">
                <a href="<?php echo home_url('/join'); ?>" class="cta-btn primary-btn bumble-btn">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Simple Blog Section -->
    <section id="blog" class="blog-section bumble-blog">
        <div class="blog-header">
            <h2>Dating Insights</h2>
        </div>
        
        <div class="blog-scroller">
            <div class="blog-track">
                <article class="blog-card plain-card">
                    <div class="blog-image light-bg">📝</div>
                    <div class="blog-content">
                        <h3>Why In-Person Dating Works Better</h3>
                        <p class="blog-meta">March 5, 2026</p>
                        <a href="#" class="blog-link">Read article</a>
                    </div>
                </article>

                <article class="blog-card plain-card">
                    <div class="blog-image light-bg">💭</div>
                    <div class="blog-content">
                        <h3>The Impact of Digital Dating</h3>
                        <p class="blog-meta">February 28, 2026</p>
                        <a href="#" class="blog-link">Read article</a>
                    </div>
                </article>

                <article class="blog-card plain-card">
                    <div class="blog-image light-bg">❤️</div>
                    <div class="blog-content">
                        <h3>Finding Your Perfect Match IRL</h3>
                        <p class="blog-meta">February 20, 2026</p>
                        <a href="#" class="blog-link">Read article</a>
                    </div>
                </article>

                <article class="blog-card plain-card">
                    <div class="blog-image light-bg">⭐</div>
                    <div class="blog-content">
                        <h3>Success Stories: Love in the Real World</h3>
                        <p class="blog-meta">February 15, 2026</p>
                        <a href="#" class="blog-link">Read article</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <script>
        const canvas = document.getElementById('canvas-stars');
        const ctx = canvas.getContext('2d');
        let width, height;
        
        // Globe settings
        let points = [];
        const numPoints = 150;
        let rotation = 0;
        let globeRadius;
        
        function init() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
            globeRadius = Math.min(width, height) * 0.4;
            points = [];
            
            // Golden ratio for even distribution on sphere
            const phi = Math.PI * (3 - Math.sqrt(5));
            
            for (let i = 0; i < numPoints; i++) {
                const y = 1 - (i / (numPoints - 1)) * 2; 
                const radiusAtY = Math.sqrt(1 - y * y);
                const theta = phi * i;
                
                const x = Math.cos(theta) * radiusAtY;
                const z = Math.sin(theta) * radiusAtY;
                
                const isActiveMatch = Math.random() > 0.8;
                
                points.push({
                    x: x, y: y, z: z,
                    isActive: isActiveMatch,
                    pulsePhase: Math.random() * Math.PI * 2
                });
            }
        }
        
        function draw() {
            ctx.clearRect(0, 0, width, height);
            
            rotation += 0.002;
            const cosR = Math.cos(rotation);
            const sinR = Math.sin(rotation);
            
            const centerX = width / 2;
            const centerY = height / 2;
            
            // Rotate and project
            const projectedPoints = points.map(p => {
                const xRot = p.x * cosR - p.z * sinR;
                const zRot = p.x * sinR + p.z * cosR;
                
                const fov = 800;
                const scale = fov / (fov + zRot * globeRadius);
                
                return {
                    ...p,
                    projX: centerX + xRot * globeRadius * scale,
                    projY: centerY + p.y * globeRadius * scale,
                    scale: scale,
                    zRot: zRot,
                    pulseP: p.pulsePhase + rotation * 5
                };
            });
            
            projectedPoints.sort((a, b) => b.zRot - a.zRot);
            
            ctx.globalCompositeOperation = 'screen';
            const activePoints = projectedPoints.filter(p => p.isActive && p.zRot > -0.2);
            
            ctx.lineWidth = 1.5;
            for (let i = 0; i < activePoints.length; i++) {
                for (let j = i + 1; j < activePoints.length; j++) {
                    const p1 = activePoints[i];
                    const p2 = activePoints[j];
                    const dist = Math.hypot(p1.projX - p2.projX, p1.projY - p2.projY);
                    
                    if (dist < 180) {
                        const intensity = 1 - (dist / 180);
                        ctx.strokeStyle = `rgba(255, 198, 41, ${intensity * 0.6 * p1.scale})`; // Yellow connection line
                        ctx.beginPath();
                        ctx.moveTo(p1.projX, p1.projY);
                        ctx.lineTo(p2.projX, p2.projY);
                        ctx.stroke();
                    }
                }
            }
            
            ctx.globalCompositeOperation = 'source-over';
            projectedPoints.forEach(p => {
                const alpha = p.zRot > 0 ? 0.7 : 0.15;
                const radius = p.isActive ? (2.5 + Math.sin(p.pulseP) * 1) * p.scale : 1.5 * p.scale;
                
                ctx.beginPath();
                ctx.arc(p.projX, p.projY, radius, 0, Math.PI * 2);
                
                if (p.isActive) {
                    const pulse = Math.sin(p.pulseP) * 0.2 + 0.3; // Adjusted pulse for better visibility
                    ctx.fillStyle = `rgba(255, 198, 41, ${alpha + pulse})`; // Bumble Yellow
                    ctx.shadowColor = `rgba(255, 198, 41, ${alpha})`;
                    ctx.shadowBlur = 15; // Kept original blur value
                } else {
                    ctx.fillStyle = `rgba(156, 163, 175, ${alpha * 0.5})`; // Soft gray
                    ctx.shadowBlur = 0;
                }
                ctx.fill();
            });
            
            ctx.shadowBlur = 0;
            requestAnimationFrame(draw);
        }
        
        window.addEventListener('resize', init);
        init();
        draw();
    </script>

<?php get_footer();
