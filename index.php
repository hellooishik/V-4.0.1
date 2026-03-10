<?php
/**
 * Main Template - Starry Night Theme
 */
get_header();
?>

    <!-- Dark Animated Hero -->
    <section class="hero-dark">
        <div class="hero-content">
            <h1 class="fade-in">Find real connections.</h1>
            <p class="fade-in">No swiping, no ghosting—just curated, face‑to‑face dates arranged for you.</p>
            <div class="hero-buttons fade-in">
                <a href="<?php echo home_url('/join'); ?>" class="primary-btn">Get started</a>
                <a href="#mission" class="nav-link">Learn more</a>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="features-section">
        <div class="feature-row fade-in">
            <div class="feature-text">
                <h2>Verified real people</h2>
                <p>Every profile you meet is a real human; no bots, no ghost accounts.</p>
            </div>
            <div class="feature-image">
                <div class="feature-icon">🌍</div>
            </div>
        </div>

        <div class="feature-row fade-in">
            <div class="feature-text">
                <h2>Meaningful conversations</h2>
                <p>We set the scene for you to actually talk, not type endlessly.</p>
            </div>
            <div class="feature-image">
                <div class="feature-icon">💬</div>
            </div>
        </div>

        <div class="feature-row fade-in">
            <div class="feature-text">
                <h2>Dates arranged for you</h2>
                <p>We do the matchmaking and logistic work so you just show up.</p>
            </div>
            <div class="feature-image">
                <div class="feature-icon">📅</div>
            </div>
        </div>
    </section>

    
    <!-- Mission Section -->
    <section id="mission" class="mission-section fade-in">
        <div class="mission-content">
            <h2>Make the first move in real life.</h2>
            <div class="mission-statement">
                <p>We’re breaking the cycle of endless scrolling by putting people in the same room.</p>
                <p>Be bold. Be present. Let us do the rest.</p>
            </div>
            
            <div class="mission-buttons">
                <a href="<?php echo home_url('/join'); ?>" class="primary-btn">Get started</a>
            </div>
        </div>
    </section>

    


<?php get_footer();
