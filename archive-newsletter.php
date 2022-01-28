<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

get_header();
global $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>

<header class="single-page-header page-padding-x d-flex flex-wrap">
    <h1 class="heading w-fit-content yellow-bg">Newsletter </h1>
</header>
<main id="primary" class="pos-r site-main posts-list" data-page="<?= get_query_var('paged') ? get_query_var('paged') : 1; ?>" data-max="<?= $wp_query->max_num_pages; ?>">
    <div class="archive-wrapper">
        <div class="back-decorations"></div>

        <?php
        // WP_Query arguments
        $args = array(
            'post_status'            => array('publish'),
            'post_type'              => array('newsletter'),
            'paged' => $paged,
            'posts_per_page' => 9,
        );

        // The Query
        $query = new WP_Query($args);

        // The Loop
        if ($query->have_posts()) {
            $counter = 0;
            while ($query->have_posts()) {
                $query->the_post();
                // do something
        ?>
                <div class="single-newsletter">
                    <div class="img-wrapper">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" class="full-size-img full-size-img-cover">
                    </div>
                    <div class="content">
                        <div class="date w-fit-content">
                            <p><?= get_the_date('j M'); ?></p>
                        </div>
                        <h2><?= the_title(); ?></h2>
                        <a href="<?php the_permalink(); ?>" class="btn btn-blank"><?= __('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
        <?php
                $counter++;
            }
        } else {
            // no posts found
        }

        // Restore original Post Data
        wp_reset_postdata();
        ?>

        <?php
        require('template-parts/pagination.php');
        ?>
    </div>
</main><!-- #main -->

<?php
get_footer();
