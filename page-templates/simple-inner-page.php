<?php

/**
 * Template name: Simple Inner Page
 */
get_header(); ?>
<main class="simple-inner-page-main no-gallery">
    <div class="container d-flex align-content-center flex-wrap justify-content-space-between align-items-center animated fadeInUp">
        <header class="single-page-header d-flex justify-content-space-between align-items-center align-content-center">
            <div class="text">
                <?php
                $bgColor = get_field_object('heading_bg_color');
                ?>
                <h2 class="heading w-fit-content <?php echo esc_attr($bgColor['value']) . '-bg'; ?> animated text-animation add-active fadeInUp"><?= the_field('header_title'); ?></h2>
                <p class="description animated fadeInUp" data-delay="200"><?= the_field('header_description'); ?></p>
            </div>

        </header>
        <div class="content <?= the_field('side_decoration_height'); ?>">
            <?= the_content(); ?>
        </div>
    </div>
    <div class="side-decoration <?= the_field('side_decoration_height'); ?>"></div>

</main>
<?php get_footer(); ?>