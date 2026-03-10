<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <canvas id="canvas-particles"></canvas>
    <header class="site-header dark-header">
        <div class="header-container">
            <div class="site-logo">
                <a href="<?php echo home_url('/'); ?>">UKDating</a>
            </div>

            <nav class="header-nav">
                <a href="<?php echo home_url('/'); ?>" class="nav-link">Home</a>
                <a href="<?php echo home_url('/join'); ?>" class="nav-link primary-btn">Join</a>
                <a href="<?php echo home_url('/about'); ?>" class="nav-link">About</a>
                <a href="<?php echo home_url('/contact'); ?>" class="nav-link">Contact</a>
            </nav>

            <button class="mobile-menu-toggle" aria-label="Toggle menu">☰</button>
        </div>
    </header>

    <script src="<?php echo get_template_directory_uri(); ?>/scripts.js" defer></script>
