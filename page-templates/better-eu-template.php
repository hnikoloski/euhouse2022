<?php

/**
 * Template name: Better Europe
 */
get_header(); ?>
<header class="single-page-header page-padding-x d-flex flex-wrap">
    <h2 class="heading w-fit-content p-0">Easy steps to </h2>
    <span class="space"></span>
    <h2 class="heading yellow-bg w-fit-content">change happen.</h2>
    <?php if (get_field('subtitle')) : ?>
        <p class="subtitle w-100">
            <?= the_field('subtitle'); ?>
        </p>
    <?php endif; ?>
</header>
<main class="contact-page-main">
    <div class="container w-100 d-flex align-content-center flex-wrap justify-content-space-between align-items-center animated fadeInUp">
        <div class="content">
            <h3 class="heading"><?= the_field('content_title'); ?></h3>
            <?= the_field('description'); ?>
            <h4 class="subtitle"><?= the_field('sub_title'); ?></h4>
            <?php $cf7Form = get_field('contact_form7_shortcode');
            echo do_shortcode($cf7Form); ?>
        </div>
    </div>
    <div class="side-decoration"></div>

</main>
<?php get_footer(); ?>