<?php
/**
 * Main Template - UKDating Premium Theme
 */
get_header();
?>

    <!-- Hero Section -->
    <section class="hero-dark">
        <div class="hero-content">
            <h1>Meet Real People, Real Connections</h1>
            <p>Stop endless swiping. UKDating connects you with verified matches through curated, in-person dates arranged just for you.</p>
            <div class="hero-buttons">
                <a href="<?php echo home_url('/join'); ?>" class="primary-btn">Get Started Now</a>
                <a href="#how-it-works" class="secondary-btn">Learn How</a>
            </div>
        </div>
    </section>

    <!-- Featured Profiles Section -->
    <section class="featured-section fade-in">
        <div class="section-header">
            <h2>Featured Matches</h2>
            <p>Real people looking for real connections. Every profile is verified.</p>
        </div>
        <div class="profiles-grid">
            <div class="profile-card">
                <div class="profile-image">
                    <div class="profile-badge"><span class="badge-icon">✓</span> Verified</div>
                </div>
                <div class="profile-info">
                    <h3 class="profile-name">Emma, 26</h3>
                    <p class="profile-desc">Creative professional, loves travel and good conversation.</p>
                </div>
            </div>

            <div class="profile-card">
                <div class="profile-image">
                    <div class="profile-badge"><span class="badge-icon">✓</span> Verified</div>
                </div>
                <div class="profile-info">
                    <h3 class="profile-name">Sophie, 29</h3>
                    <p class="profile-desc">Entrepreneur, passionate about art and meaningful connections.</p>
                </div>
            </div>

            <div class="profile-card">
                <div class="profile-image">
                    <div class="profile-badge"><span class="badge-icon">✓</span> Verified</div>
                </div>
                <div class="profile-info">
                    <h3 class="profile-name">Olivia, 27</h3>
                    <p class="profile-desc">Marketing manager, adventure seeker, genuine and outgoing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="how-it-works fade-in">
        <div class="section-header">
            <h2>How UKDating Works</h2>
            <p>Four simple steps to finding your match</p>
        </div>
        <div class="steps-container">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Create Your Profile</h3>
                <p>Sign up, verify your identity, and tell us about yourself.</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h3>We Match You</h3>
                <p>Our team carefully matches you based on compatibility and preferences.</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h3>We Arrange Your Date</h3>
                <p>We book the venue, time, and all the logistics for you.</p>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <h3>Enjoy Your Date</h3>
                <p>Meet in person, have real conversation, and see where it goes.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section fade-in">
        <div class="section-header">
            <h2>Success Stories</h2>
            <p>Real people, real relationships</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial">
                <div class="testimonial-rating">★★★★★</div>
                <p class="testimonial-text">"I was tired of swiping endlessly. UKDating's approach to curated dates actually worked. I met my partner on my third date!"</p>
                <p class="testimonial-author">— Kate & James</p>
            </div>

            <div class="testimonial">
                <div class="testimonial-rating">★★★★★</div>
                <p class="testimonial-text">"The verification process made me feel safe. Meeting someone in person rather than messaging for weeks was exactly what I needed."</p>
                <p class="testimonial-author">— Sophia</p>
            </div>

            <div class="testimonial">
                <div class="testimonial-rating">★★★★★</div>
                <p class="testimonial-text">"Great alternative to the usual dating apps. The matching algorithm actually understands what I'm looking for."</p>
                <p class="testimonial-author">— Marcus & Lily</p>
            </div>
        </div>
    </section>

    <!-- Safety & Verification Section -->
    <section class="safety-section fade-in">
        <div class="section-header">
            <h2>Your Safety Matters</h2>
            <p>Trusted, verified, and secure</p>
        </div>
        <div class="safety-grid">
            <div class="safety-badge">
                <div class="safety-icon">✓</div>
                <h3>ID Verified</h3>
                <p>Every user is verified before joining.</p>
            </div>
            <div class="safety-badge">
                <div class="safety-icon">🔒</div>
                <h3>Data Secure</h3>
                <p>Your information is encrypted and protected.</p>
            </div>
            <div class="safety-badge">
                <div class="safety-icon">👥</div>
                <h3>Real People</h3>
                <p>No bots, no fake profiles, just genuine users.</p>
            </div>
            <div class="safety-badge">
                <div class="safety-icon">📍</div>
                <h3>Vetted Venues</h3>
                <p>Dates arranged in safe, public locations.</p>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section fade-in">
        <div class="section-header">
            <h2>Choose Your Plan</h2>
            <p>Pick the plan that works for you</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3 class="pricing-name">Starter</h3>
                <div class="pricing-price">Free</div>
                <ul class="pricing-features">
                    <li>Access to core features</li>
                    <li>One match per month</li>
                    <li>Identity verification</li>
                </ul>
                <div class="pricing-cta">
                    <a href="<?php echo home_url('/join'); ?>" class="primary-btn">Get Started</a>
                </div>
            </div>

            <div class="pricing-card featured">
                <div class="pricing-badge">Most Popular</div>
                <h3 class="pricing-name">Premium</h3>
                <div class="pricing-price">£19<span>/month</span></div>
                <ul class="pricing-features">
                    <li>4 curated matches per month</li>
                    <li>Priority matching algorithm</li>
                    <li>Flexible date scheduling</li>
                    <li>24/7 customer support</li>
                </ul>
                <div class="pricing-cta">
                    <a href="<?php echo home_url('/join'); ?>" class="primary-btn">Start Now</a>
                </div>
            </div>

            <div class="pricing-card">
                <h3 class="pricing-name">Elite</h3>
                <div class="pricing-price">£49<span>/month</span></div>
                <ul class="pricing-features">
                    <li>Unlimited curated matches</li>
                    <li>VIP matching service</li>
                    <li>Concierge date planning</li>
                    <li>Premium venue access</li>
                </ul>
                <div class="pricing-cta">
                    <a href="<?php echo home_url('/join'); ?>" class="primary-btn">Go Elite</a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
