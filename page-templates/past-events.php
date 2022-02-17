<?php

/*Template Name: Past Events */

get_header(); ?>

<header class="single-page-header page-padding-x d-flex flex-wrap">
    <h2 class="heading blue-bg w-fit-content"><?php _e('Past Events', 'starter'); ?></h2>
</header>
<main id="primary" class="site-main page-padding-x">
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
                    'terms'     => 'past-events',
                )
            )
        );
        // The Query
        $query = new WP_Query($args);

        // The Loop
        if ($query->have_posts()) {
        ?>
            <div class="row">
                <div class="col col-title">
                    <h3><?php _e('Title', 'starter'); ?></h3>
                </div>
                <div class="col col-date">
                    <h3><?php _e('Date', 'starter'); ?></h3>
                </div>
                <div class="col col-img">
                    <h3><?php _e('Poster', 'starter'); ?></h3>
                </div>
                <div class="col col-btn">
                    <h3><?php _e('Event Info', 'starter'); ?></h3>
                </div>
            </div>
            <?php
            while ($query->have_posts()) {
                $query->the_post();
            ?>
                <div class="row" data-link="<?php the_permalink(); ?>">
                    <div class="col col-title">
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <div class="col col-date">
                        <h5><?php
                            if (get_field('event_date')) {
                                $theDate = get_field('event_date');
                                echo date('M j, Y', strtotime($theDate));
                            } else {
                                echo 'TBD';
                            }
                            ?>
                        </h5>
                    </div>
                    <div class="col col-img">
                        <div class="img-wrapper">
                            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="full-size-img full-size-img-cover">
                        </div>
                    </div>
                    <div class="col col-btn">
                        <a href="<?php the_permalink(); ?>" class="btn btn-blank mx-auto"><?php _e('View More', 'starter'); ?><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="row">
                <div class="col col-full">
                    <h4><?php _e('No events history at the moment.', 'starter'); ?></h4>
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
