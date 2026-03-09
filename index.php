<?php
/**
 * Main Template - Starry Night Theme
 */
get_header();
?>

<canvas id="canvas-stars"></canvas>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="content-overlay">
            
            <div class="logo-wrapper">
                <div class="logo-heart">♥</div>
            </div>

            <h1>UKDating</h1>
            <p>We set up users on blind dates, matching people based on their availability, sexual orientation and location.</p>
            
            <a href="<?php echo home_url('/join'); ?>" class="cta-btn">Join the next dating revolution</a>
            
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="features-container">
            <div class="feature-item fade-in">
                <div class="feature-icon">🌍</div>
                <p>Verified Profiles</p>
            </div>
            <div class="feature-item fade-in">
                <div class="feature-icon">💬</div>
                <p>Real Conversations</p>
            </div>
            <div class="feature-item fade-in">
                <div class="feature-icon">⚙️</div>
                <p>Smart Matching</p>
            </div>
            <div class="feature-item fade-in">
                <div class="feature-icon">📍</div>
                <p>Location Based</p>
            </div>
            <div class="feature-item fade-in">
                <div class="feature-icon">🔒</div>
                <p>Secure & Private</p>
            </div>
        </div>
    </section>

    <!-- Three Pillars Section -->
    <section class="pillars-section">
        <h2>Our Core Pillars</h2>
        <p class="pillars-subtitle">What sets us apart</p>
        
        <div class="pillars-container">
            <div class="pillar pillar-zoom">
                <div class="pillar-icon">👥</div>
                <h3>No Profiles</h3>
                <p>We believe in genuine human connection, not digital personas. Meet real people, not curated profiles.</p>
            </div>
            <div class="pillar pillar-zoom">
                <div class="pillar-icon">💬</div>
                <h3>No Texting</h3>
                <p>Skip the endless messaging. Have meaningful conversations face-to-face where real chemistry happens.</p>
            </div>
            <div class="pillar pillar-zoom">
                <div class="pillar-icon">👋</div>
                <h3>No Swiping</h3>
                <p>Forget the superficial left-right game. Curated introductions based on compatibility and values.</p>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <div class="mission-content">
            <h2>Mission</h2>
            <ol class="mission-list">
                <li>Get young people back to real life, meeting people and growing as a person</li>
                <li>Create an app for personal growth through meeting others, not finding the "perfect match"</li>
                <li>End the online dating inequality</li>
                <li>Verify people using the app with proper ID checks</li>
                <li>Encourage meaningful conversations instead of using apps</li>
                <li><strong>So, why not remove these elements and bring back spontaneity through UKDating</strong>
                    <ul>
                        <li><strong>For women:</strong> To get rid of the criminal catfish and criminal subscription<br>The "better than" status isn't what men as they are "the better man" online. A grounded subscription gets rid of that, the IRL connection.</li>
                        <li><strong>For men:</strong> To get dates, and grow their confidence.<br>To get out of the criminal subscription</li>
                    </ul>
                </li>
            </ol>
            
            <div class="mission-buttons">
                <a href="<?php echo home_url('/join'); ?>" class="btn-primary">Get Started Today</a>
                <a href="#blog" class="btn-secondary">Learn More</a>
            </div>
        </div>
        <div class="mission-image">
            <div class="image-placeholder">📸</div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="blog-section">
        <h2>Popular Articles</h2>
        <p class="blog-subtitle">Latest insights from UKDating</p>
        
        <div class="blog-container">
            <article class="blog-card blog-fade-in">
                <div class="blog-image">📝</div>
                <div class="blog-content">
                    <h3>Why In-Person Dating Works Better</h3>
                    <p class="blog-meta">March 5, 2026</p>
                    <p>Discover the science behind face-to-face connections and why they lead to more meaningful relationships.</p>
                    <a href="#" class="blog-link">Read More →</a>
                </div>
            </article>

            <article class="blog-card blog-fade-in">
                <div class="blog-image">💭</div>
                <div class="blog-content">
                    <h3>The Impact of Digital Dating</h3>
                    <p class="blog-meta">February 28, 2026</p>
                    <p>Exploring how apps have changed dating culture and why people are seeking alternatives for authentic connections.</p>
                    <a href="#" class="blog-link">Read More →</a>
                </div>
            </article>

            <article class="blog-card blog-fade-in">
                <div class="blog-image">❤️</div>
                <div class="blog-content">
                    <h3>Finding Your Perfect Match IRL</h3>
                    <p class="blog-meta">February 20, 2026</p>
                    <p>Learn how UKDating uses intelligent matching to find compatible partners in your area.</p>
                    <a href="#" class="blog-link">Read More →</a>
                </div>
            </article>

            <article class="blog-card blog-fade-in">
                <div class="blog-image">⭐</div>
                <div class="blog-content">
                    <h3>Success Stories: Love in the Real World</h3>
                    <p class="blog-meta">February 15, 2026</p>
                    <p>Read inspiring stories from couples who found each other through UKDating and built lasting relationships.</p>
                    <a href="#" class="blog-link">Read More →</a>
                </div>
            </article>

            <article class="blog-card blog-fade-in">
                <div class="blog-image">💡</div>
                <div class="blog-content">
                    <h3>Dating Tips for the Modern Age</h3>
                    <p class="blog-meta">February 10, 2026</p>
                    <p>Practical advice on how to navigate the dating world and make genuine connections with intention.</p>
                    <a href="#" class="blog-link">Read More →</a>
                </div>
            </article>

            <article class="blog-card blog-fade-in">
                <div class="blog-image">🎯</div>
                <div class="blog-content">
                    <h3>Our Mission for Real Connections</h3>
                    <p class="blog-meta">February 5, 2026</p>
                    <p>Understand why we created UKDating and how it's revolutionizing the way people meet.</p>
                    <a href="#" class="blog-link">Read More →</a>
                </div>
            </article>
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
