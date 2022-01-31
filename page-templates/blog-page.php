<?php

/**
 * Template name: Blog Page
 */
get_header();
global $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>
<header class="single-page-header page-padding-x d-flex flex-wrap">
    <h1 class="heading w-fit-content yellow-bg"><?= the_title(); ?> </h1>
</header>
<main class="blog-archive">
    <?php
    // WP_Query arguments
    $args = array(
        'post_status'            => array('publish'),
        'post_type'              => array('post'),
        'paged' => $paged,
        'posts_per_page' => 10,
    );

    // The Query
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // do something

    ?>
            <div class="single-blog">
                <div class="img-wrapper">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?>" class="full-size-img full-size-img-cover">
                </div>
                <div class="content">
                    <div class="date w-fit-content">
                        <p><?= get_the_date('j M'); ?></p>
                    </div>
                    <h2><?= get_the_title(); ?></h2>

                    <a href="<?= get_the_permalink(); ?>" class="btn btn-blank"><?= __('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
    <?php
        }
    } else {
        // no posts found
    }

    // Restore original Post Data
    wp_reset_postdata();
    ?>

    <div class="pagination">
        <?php
        echo paginate_links(array(
            'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'total'        => $query->max_num_pages,
            'current'      => max(1, get_query_var('paged')),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 1,
            'mid_size'     => 1,
            'prev_next'    => false, // change to true if you want to indicate previous and next page
            'prev_text'    => sprintf('<i></i> %1$s', __('Newer Posts', 'text-domain')),
            'next_text'    => sprintf('%1$s <i></i>', __('Older Posts', 'text-domain')),
            'add_args'     => false,
            'add_fragment' => '',
        ));
        ?>
    </div>
</main>
<?php get_footer(); ?>