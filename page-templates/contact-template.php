<?php

/**
 * Template name: Contact
 */
get_header(); ?>
<header class="single-page-header page-padding-x">
    <h2 class="heading red-bg w-fit-content"><?= get_the_title(); ?></h2>
</header>
<main class="contact-page-main">
    <div class="container d-flex align-content-center flex-wrap justify-content-space-between align-items-center animated fadeInUp">
        <div class="content">
            <?= the_content(); ?>
        </div>
        <?= do_shortcode('[contact-form-7 id="82" title="Contact form 1"]'); ?>
        <?php if (have_rows('locations')) :
            $counter = 1; ?>
            <div class="locations">
                <?php while (have_rows('locations')) : the_row(); ?>
                    <div class="single-location animated fadeInUp" data-delay="<?= $counter * 100; ?>">
                        <h3 class="title"><?= the_sub_field('title'); ?></h3>
                        <ul>
                            <li>
                                <a href="tel:<?= the_sub_field('phone_num'); ?>"><i class="fas fa-phone"></i><?= the_sub_field('phone_num'); ?></a>
                            </li>
                            <li>
                                <a href="mailto:<?= the_sub_field('email'); ?>"><i class="fas fa-envelope"></i><?= the_sub_field('email'); ?></a>
                            </li>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i><?= the_sub_field('address'); ?></p>
                            </li>
                        </ul>

                        <?= the_sub_field('iframe_link'); ?>
                    </div>
                <?php $counter++;
                endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="side-decoration"></div>

</main>
<?php get_footer(); ?>