<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

get_header();
?>

<header class="single-page-header page-padding-x d-flex flex-wrap">
    <h2 class="heading red-bg w-fit-content"><?php _e('Upcoming Events', 'starter'); ?></h2>
</header>
<main id="primary" class="site-main">
    <div class="container">
        <?php
        // WP_Query arguments
        $args = array(
            'post_type'              => array('events'),
            'post_status'            => array('publish'),
            'tax_query' => array(
                array(
                    'taxonomy'  => 'event_category',
                    'field'     => 'slug',
                    'terms'     => 'upcoming-events',
                )
            )
        );
        // The Query
        $query = new WP_Query($args);

        // The Loop
        if ($query->have_posts()) {
        ?>

            <?php
            while ($query->have_posts()) {
                $query->the_post();
            ?>
                <div class="row">
                    <div class="col col-date">
                        <p class="day">
                            <?php
                            $event_date = get_field('event_date');
                            $event_date = new DateTime($event_date);
                            echo $event_date->format('D');
                            ?>
                        </p>
                        <p class="day-num">
                            <?php
                            $event_date = get_field('event_date');
                            $event_date = new DateTime($event_date);
                            echo $event_date->format('d');
                            ?>
                        </p>
                    </div>
                    <div class="col col-content">
                        <?php if (get_field('event_time')) : ?>
                            <p class="time">
                                <i class="far fa-light fa-clock"></i> <?php the_field('event_time'); ?>
                            </p>
                        <?php endif; ?>
                        <h3 class="heading"><?php the_title(); ?></h3>
                        <p>
                            <?php
                            echo wp_trim_words(get_the_excerpt(), 55);
                            ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-blank"><?php _e('View More'); ?> <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                    <div class="col col-img">
                        <div class="img-wrapper">
                            <img src="<?php the_post_thumbnail_url(); ?>" class="full-size-img full-size-img-cover">
                        </div>
                    </div>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="row">
                <div class="col col-full">
                    <h4><?php _e('No upcoming events', 'starter'); ?></h4>
                </div>
            </div>
        <?php
        }

        // Restore original Post Data
        wp_reset_postdata();

        ?>
    </div>
</main><!-- #main -->

<?php
get_footer();
