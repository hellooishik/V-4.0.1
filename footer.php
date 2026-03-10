    <!-- Footer -->
    <footer class="site-footer dark-footer">
        <div class="footer-content">

            <div class="footer-columns">
                <div class="footer-column">
                    <h3>UKDating</h3>
                    <p>Your real‑world connection starts here.</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon twitter" title="Twitter">𝕏</a>
                        <a href="#" class="social-icon linkedin" title="LinkedIn">in</a>
                        <a href="#" class="social-icon instagram" title="Instagram">📷</a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>Navigate</h3>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                        <li><a href="<?php echo home_url('/join'); ?>">Join</a></li>
                        <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Stay in touch</h3>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Email address" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 UKDating | All rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
