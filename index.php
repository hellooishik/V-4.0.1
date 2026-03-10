<?php
/**
 * Main Template - UKDating Cloned Design
 */
get_header();
?>

<!-- Hero + search -->
<section class="hero-section">
    <div class="hero-content">
        <h1>New Places, Unforgettable Dating.</h1>
        <p>Still looking for your significant other? UKDating is the place for you! Join us now to meet single men and women across the world.</p>
    </div>
    <div class="hero-image"></div>
    <div class="search-box fade-in">
        <form class="search-form">
            <div class="field">
                <label for="iam">I am</label>
                <select id="iam">
                    <option>Man</option>
                    <option>Woman</option>
                </select>
            </div>
            <div class="field">
                <label for="looking">Looking for</label>
                <select id="looking">
                    <option>Woman</option>
                    <option>Man</option>
                </select>
            </div>
            <div class="field age">
                <label>Age</label>
                <select><option>18</option></select> &ndash; <select><option>30</option></select>
            </div>
            <div class="field country">
                <label for="country">Country</label>
                <select id="country"><option>Choose your country</option></select>
            </div>
            <button type="submit" class="primary-btn">Find Your Partner</button>
        </form>
    </div>
</section>

<!-- Profiles grid -->
<section class="profiles-section fade-in">
    <h2 class="section-title">Only True People</h2>
    <p class="section-subtitle">Every user registered on UKDating is verified via photo and mobile phone so you don't have to worry how real or fake anyone is.</p>
    <div class="profiles-grid">
        <?php for ($i = 1; $i <= 6; $i++): ?>
        <div class="profile-card">
            <div class="profile-img" style="background-image:url('https://source.unsplash.com/collection/891/300x300?sig=<?php echo $i; ?>');"></div>
            <div class="profile-info">
                <h3>Sample Name</h3>
                <span class="active">active <?php echo rand(1,10); ?> days ago</span>
            </div>
        </div>
        <?php endfor; ?>
    </div>
    <div class="center"><a href="#" class="secondary-btn">View More</a></div>
</section>

<!-- Why Choose -->
<section class="why-section fade-in">
    <div class="why-content">
        <div class="why-text">
            <h2>Why Choose GO</h2>
            <div class="features">
                <div class="feature">
                    <div class="icon">👤</div>
                    <h4>Simple to Use</h4>
                    <p>Join in one step: select your and your partner's gender, age, and location, and you're all set!</p>
                </div>
                <div class="feature">
                    <div class="icon">❤️</div>
                    <h4>Smart Matching</h4>
                    <p>Our matching system is based on geolocation and interests, it helps you find the best people to meet or spend time with.</p>
                </div>
                <div class="feature">
                    <div class="icon">💬</div>
                    <h4>Cool Community</h4>
                    <p>Besides being a dating service, we have a supportive and understanding community that's always ready to help.</p>
                </div>
            </div>
        </div>
        <div class="why-image">
            <img src="https://source.unsplash.com/collection/896/600x500" alt="Couple">
            <div class="play-button">▶</div>
        </div>
    </div>
</section>

<!-- Locations -->
<section class="locations-section fade-in">
    <div class="locations-grid">
        <?php $cities = ['Amsterdam','London','Barcelona','New York','Paris'];
        foreach ($cities as $city): ?>
        <div class="location-card" style="background-image:url('https://source.unsplash.com/400x300/?<?php echo urlencode($city); ?>');">
            <span><?php echo $city; ?></span>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="locations-text">
        <h2>Meet Singles in Your Area</h2>
        <p>If you want to meet local singles for dating, companionship, friendship or even more, you have come to the right place.</p>
        <a href="#" class="primary-btn">Find Your Partner</a>
    </div>
</section>

<!-- Membership banner -->
<section class="membership-banner fade-in">
    <div class="banner-content">
        <h2>Premium Membership</h2>
        <p>Enjoy the benefits of our dating service's membership! Use the psychological matching to find the best people and experience other great bonuses.</p>
        <a href="#" class="secondary-btn">View All Options</a>
        <span class="trial">14 days for free</span>
    </div>
</section>

<!-- Articles -->
<section class="articles-section fade-in">
    <h2>Dating Tips & Advice</h2>
    <p>Here are some of our latest dating articles written by our staff. We hope these tips will help you get more confident and find what you are looking for on UKDating.</p>
    <div class="articles-grid">
        <?php for ($i=1; $i<=4; $i++): ?>
        <div class="article-card">
            <div class="article-img" style="background-image:url('https://source.unsplash.com/400x300/?couple,<?php echo $i; ?>');"></div>
            <h4>Sample Article Title</h4>
            <span class="date">April 24, 2019</span>
        </div>
        <?php endfor; ?>
    </div>
</section>

<?php get_footer();
