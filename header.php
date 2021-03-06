<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * 
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head();
    $custom_logo_id = get_theme_mod('custom_logo');
    $logoUrl = wp_get_attachment_image_src($custom_logo_id, 'full');
    ?>

</head>

<body <?php body_class(); ?> id="ceiling">
    <?php wp_body_open(); ?>
    <a href="#ceiling" id="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <div id="preloader"></div>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <a href="<?= get_home_url(); ?>" class="logo-wrapper d-block">
                <img src="<?= $logoUrl[0]; ?>" alt="<?= get_bloginfo(); ?>" class="full-size-img full-size-img-cover">
            </a>

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'container'      => false
                )
            );

            ?>
            <form action="/" method="get">
                <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search Here..." />
                <input type="hidden" name="post_type" value="post newsletter" />
                <button class="disabled search-btn" aria-label="Search button"><i class="far fa-search"></i></button>
                <button class="search-close" aria-label="Close Search"><i class="fas fa-times"></i></button>
            </form>
        </header><!-- #masthead -->
        <aside id="social-links" class="animated fadeInRight">
            <ul>
                <?php if (get_field('facebook_link', 'option')) : ?>
                    <li class="animated fadeInRight" data-delay="100">
                        <a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank" rel="noopener noreferrer" class="fb"><span class="screen-reader-text">Facebook Link</span><i class="fab fa-facebook-f"></i></a>
                    </li>
                <?php endif; ?>

                <?php if (get_field('instagram_link', 'option')) : ?>
                    <li class="animated fadeInRight" data-delay="200">
                        <a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank" rel="noopener noreferrer" class="ig"><span class="screen-reader-text">Instagram Link</span><i class="fab fa-instagram"></i></a>
                    </li>
                <?php endif; ?>

                <?php if (get_field('twitter_link', 'option')) : ?>
                    <li class="animated fadeInRight" data-delay="300">
                        <a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank" rel="noopener noreferrer" class="tw"><span class="screen-reader-text">Twitter Link</span><i class="fab fa-twitter"></i></a>
                    </li>
                <?php endif; ?>

                <?php if (get_field('youtube_link', 'option')) : ?>
                    <li class="animated fadeInRight" data-delay="400">
                        <a href="<?php the_field('youtube_link', 'option'); ?>" target="_blank" rel="noopener noreferrer" class="yt"><span class="screen-reader-text">Youtube Link</span><i class="fab fa-youtube"></i></a>
                    </li>
                <?php endif; ?>
            </ul>
        </aside>