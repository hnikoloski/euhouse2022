<section id="virtual-rooms">
    <div class="section-wrapper">
        <header>
            <h2 class="heading">Virtual Rooms</h2>
            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </header>
        <div class="cards-wrapper">
            <?php
            // WP_Query arguments
            $args = array(
                'post_type'              => array('virtual_rooms'),
                'post_status'            => array('publish'),
                'posts_per_page'         => '3',
                'paged'                  => get_query_var('paged'),
                'order'                  => 'ASC',
            );

            // The Query
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) {
                $counter = 1;
                while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <div class="card card-room animated fadeInUp" data-delay="<?= $counter * 100; ?>">
                        <div class="img-wrapper">
                            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" class="full-size-img full-size-img-cover">
                        </div>
                        <div class="top">
                            <h3 class="title"><?= get_the_title(); ?></h3>
                            <a href="<?= the_field('link_to_vr'); ?>" target="_blank" rel="noreferrer nofollow">
                                <span class="screen-reader-text"><?= get_the_title(); ?> Virtual Room link</span>
                                <i class="icon icon-360"></i>
                            </a>
                        </div>
                        <p> <?= the_field('short_info'); ?></p>
                        <a href="<?= the_field('link_to_vr'); ?>" target="_blank" rel="noreferrer nofollow" class="btn btn-blue blue-deco"><?= __('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
                    </div>
            <?php
                    $counter++;
                };
            } ?>

        </div>
    </div>
</section>