<?php

/**
 * Template name: Youth engaging events
 */
get_header(); ?>
<main class="youth-engaging-events">
    <div class="container d-flex align-content-center flex-wrap justify-content-space-between align-items-center animated fadeInUp">
        <header class="single-page-header d-flex justify-content-space-between align-items-center align-content-center page-padding-x">
            <div class="text">

                <h2 class="heading p-0 w-fit-content"><?= the_field('header_title'); ?></h2>
                <?= the_field('header_description'); ?>
            </div>
        </header>
        <div class="content d-flex align-content-center flex-wrap justify-content-space-between align-items-center animated fadeInUp">
            <div class="form-wrapper">
                <?php $cf7EventForm = get_field('event_form_short_code');
                echo do_shortcode($cf7EventForm); ?>
            </div>
            <div class="side-decoration"></div>
        </div>
    </div>
    <div class="contact-form">
        <h3 class="heading">Contact</h3>
        <?php $cf7ContactForm = get_field('contact_form_code');
        echo do_shortcode($cf7ContactForm); ?>
    </div>
</main>
<?php get_footer(); ?>