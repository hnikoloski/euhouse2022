<?php

/**
 * Template name: Simple Inner With Gallery
 */
get_header(); ?>
<main class="simple-inner-page-main">
    <div class="container d-flex align-content-center flex-wrap justify-content-space-between align-items-center animated fadeInUp">
        <header class="single-page-header d-flex justify-content-space-between align-items-center align-content-center">
            <div class="text">
                <h2 class="heading w-fit-content blue-bg animated text-animation add-active fadeInUp"><?= the_field('header_main_heading'); ?></h2>
                <h3 class="heading p-0 animated fadeInUp" data-delay="200"><?= the_field('header_heading'); ?></h3>
                <p class="description animated fadeInUp" data-delay="300"><?= the_field('header_description'); ?></p>
            </div>
            <div class="img-wrapper animated fadeInRight">
                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" class="full-size-img full-size-img-cover">
            </div>
        </header>
        <div class="content">
            <?= the_content(); ?>
        </div>
    </div>
    <div class="side-decoration"></div>
    <div class="gallery w-100">
        <div class="top-bar d-flex align-items-end justify-content-space-between flex-wrap align-content-center">
            <div class="text">
                <h2 class="heading"><?= the_field('gallery_title'); ?></h2>
                <h3 class="heading"><?= the_field('gallery_sub-title'); ?></h3>
            </div>
            <div class="swiper-btns-wrapper d-flex">
                <div class="swiper-button swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                <div class="swiper-button swiper-button-next"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>
        <div class="swiper single-gallery-slider">
            <div class="swiper-wrapper">
                <?php
                $images = get_field('gallery_images');
                if ($images) : ?>

                    <?php foreach ($images as $image) : ?>
                        <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery" class="single-slide swiper-slide">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="full-size-img full-size-img-cover" />
                        </a>
                        <p><?php echo esc_html($image['caption']); ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</main>
<?php get_footer(); ?>