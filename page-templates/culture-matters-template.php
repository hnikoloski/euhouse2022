<?php

/**
 * Template name: Culture matters
 */
get_header(); ?>
<header class="single-page-header page-padding-x d-flex flex-wrap">
    <h2 class="heading w-fit-content p-0"><?= __('CULTURE', 'starter'); ?> </h2>
    <span class="space"></span>
    <h2 class="heading yellow-bg w-fit-content"> <?= __('MATTERS SERIES', 'starter'); ?></h2>
    <?php if (get_field('header_subtitle')) : ?>
        <p class="subtitle w-100">
            <?= the_field('header_subtitle'); ?>
        </p>
    <?php endif; ?>
</header>
<main>
    <div class="single-card blog" style="background: url(<?= the_field('blog_box_background'); ?>); background-size:cover; background-repeat:no-repeat; background-position:center;">
        <i class="card-icon"></i>
        <div class="content">
            <h3><?= __('BLOG', 'starter'); ?></h3>
            <a href="/blog" class="btn btn-white"><?= __('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
    <div class="single-card podcast" style="background: url(<?= the_field('podcast_box_background'); ?>); background-size:cover; background-repeat:no-repeat; background-position:center;">
        <i class="card-icon"></i>
        <div class="content">
            <h3><?= __('PODCAST', 'starter'); ?></h3>
            <a href="/podcast" class="btn btn-white"><?= __('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
</main>
<?php get_footer(); ?>