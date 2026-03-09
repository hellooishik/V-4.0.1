<?php
/**
 * Main Template - Starry Night Theme
 */
get_header();
?>

    <!-- Modern Split Hero Section -->
    <section class="hero-section modern-hero">
        <div class="hero-container">
            <div class="hero-content">
                <div class="logo-wrapper">
                    <div class="logo-heart">♥</div>
                </div>
                <h1>UKDating</h1>
                <p>We set up users on blind dates, matching people based on their availability, sexual orientation, and location. Experience the next generation of genuine connection.</p>
                <div class="hero-buttons">
                    <a href="<?php echo home_url('/join'); ?>" class="cta-btn primary-btn">Join the Revolution</a>
                    <a href="#mission" class="cta-btn secondary-btn glass-btn">Our Mission</a>
                </div>
                <div class="hero-stats">
                    <div class="stat"><strong>50k+</strong> <span>Connections</span></div>
                    <div class="stat"><strong>120+</strong> <span>Cities</span></div>
                </div>
            </div>
            
            <div class="hero-visual">
                <!-- Move canvas here so it's a specific object rather than a background -->
                <canvas id="canvas-stars"></canvas>
                <div class="glow-orb"></div>
            </div>
        </div>
    </section>

    <!-- Alternating Zig-Zag Features -->
    <section class="features-section modern-features">
        <div class="feature-row">
            <div class="feature-text fade-in-scroll">
                <div class="feature-icon">🌍</div>
                <h2>Verified Real Profiles</h2>
                <p>We believe in genuine human connection, not digital personas. Every user is verified to ensure you meet real people, not curated or fake profiles.</p>
            </div>
            <div class="feature-image glass-panel fade-in-scroll">
                <div class="mock-ui">
                    <div class="mock-header"></div>
                    <div class="mock-body mock-verified"></div>
                </div>
            </div>
        </div>
        
        <div class="feature-row reverse">
            <div class="feature-text fade-in-scroll">
                <div class="feature-icon">💬</div>
                <h2>Meaningful Conversations</h2>
                <p>Skip the endless messaging. Have meaningful conversations face-to-face where real chemistry happens organically and naturally.</p>
            </div>
            <div class="feature-image glass-panel fade-in-scroll">
                <div class="mock-ui">
                    <div class="mock-bubbles">
                        <div class="mock-bubble left"></div>
                        <div class="mock-bubble right"></div>
                        <div class="mock-bubble left"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="feature-row">
            <div class="feature-text fade-in-scroll">
                <div class="feature-icon">⚙️</div>
                <h2>Intelligent Matching</h2>
                <p>Forget the superficial left-right game. We provide curated introductions based on deep compatibility, availability, and shared values.</p>
            </div>
            <div class="feature-image glass-panel fade-in-scroll">
                <div class="mock-ui">
                    <div class="mock-radar"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bento Box Pillars Section -->
    <section class="bento-section">
        <div class="bento-header">
            <h2>The UKDating Difference</h2>
            <p>Our core philosophy for modern romance</p>
        </div>
        
        <div class="bento-grid">
            <div class="bento-box bento-large glass-panel">
                <div class="bento-content">
                    <div class="bento-icon">👥</div>
                    <h3>No Curated Profiles</h3>
                    <p>Meet real people, exactly as they are. We strip away the digital filters to bring you genuine face-to-face connections from day one.</p>
                </div>
            </div>
            
            <div class="bento-box bento-tall glass-panel">
                <div class="bento-content">
                    <div class="bento-icon">📅</div>
                    <h3>Curated Blind<br>Dates</h3>
                    <p>We do the heavy lifting. Tell us your availability, and we set up the venue and time.</p>
                </div>
            </div>
            
            <div class="bento-box glass-panel">
                <div class="bento-content">
                    <div class="bento-icon">💬</div>
                    <h3>Zero Texting</h3>
                    <p>Skip the small talk and ghosting.</p>
                </div>
            </div>
            
            <div class="bento-box glass-panel">
                <div class="bento-content">
                    <div class="bento-icon">👋</div>
                    <h3>No Swiping</h3>
                    <p>Quality over endless quantity.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Immersive Mission Section -->
    <section id="mission" class="mission-section immersive-mission">
        <div class="mission-parallax-bg"></div>
        <div class="mission-overlay-content">
            <h2 class="fade-in-scroll">Our Mission</h2>
            <div class="mission-statement fade-in-scroll">
                <h3>Bring Back Spontaneity</h3>
                <p>We are ending the online dating inequality. For women, it means getting rid of criminal catfish and dangerous subscriptions. For men, it means actually getting dates and growing confidence in the real world.</p>
                <p>Grounded in reality. Meet people, have real conversations, and grow as a person without the pressure of finding the "perfect" digital match.</p>
            </div>
            
            <div class="mission-buttons fade-in-scroll">
                <a href="<?php echo home_url('/join'); ?>" class="btn-primary">Join the Movement</a>
            </div>
        </div>
    </section>

    <!-- Horizontal Blog Section -->
    <section id="blog" class="blog-section modern-blog">
        <div class="blog-header">
            <h2>UKDating Insights</h2>
            <p>Knowledge for the modern dating world</p>
        </div>
        
        <div class="blog-scroller">
            <div class="blog-track">
                <article class="blog-card glass-panel">
                    <div class="blog-image">📝</div>
                    <div class="blog-content">
                        <h3>Why In-Person Dating Works Better</h3>
                        <p class="blog-meta">March 5, 2026</p>
                        <p>Discover the science behind face-to-face connections.</p>
                        <a href="#" class="blog-link">Read More →</a>
                    </div>
                </article>

                <article class="blog-card glass-panel">
                    <div class="blog-image">💭</div>
                    <div class="blog-content">
                        <h3>The Impact of Digital Dating</h3>
                        <p class="blog-meta">February 28, 2026</p>
                        <p>Exploring how apps have changed dating culture.</p>
                        <a href="#" class="blog-link">Read More →</a>
                    </div>
                </article>

                <article class="blog-card glass-panel">
                    <div class="blog-image">❤️</div>
                    <div class="blog-content">
                        <h3>Finding Your Perfect Match IRL</h3>
                        <p class="blog-meta">February 20, 2026</p>
                        <p>Learn how UKDating uses intelligent matching.</p>
                        <a href="#" class="blog-link">Read More →</a>
                    </div>
                </article>

                <article class="blog-card glass-panel">
                    <div class="blog-image">⭐</div>
                    <div class="blog-content">
                        <h3>Success Stories: Love in the Real World</h3>
                        <p class="blog-meta">February 15, 2026</p>
                        <p>Inspiring stories from couples who found each other.</p>
                        <a href="#" class="blog-link">Read More →</a>
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
                        ctx.strokeStyle = `rgba(255, 65, 108, ${intensity * 0.6 * p1.scale})`;
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
                    ctx.fillStyle = `rgba(255, 75, 43, ${alpha})`;
                    ctx.shadowBlur = 15;
                    ctx.shadowColor = '#ff416c';
                } else {
                    ctx.fillStyle = `rgba(200, 200, 255, ${alpha * 0.4})`;
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
