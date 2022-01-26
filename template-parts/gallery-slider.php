<section id="gallery-slider">
    <header class="d-flex align-items-center justify-content-space-between align-content-center page-padding-x">

        <div class="text">
            <h3 class="heading">Gallery</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
        <div class="slider-buttons d-flex justify-content-start align-items-center">
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev btn btn-blue btn-icon btn-squared"><i class="fas fa-chevron-left"></i></div>
            <div class="swiper-button-next btn btn-blue btn-icon btn-squared"><i class="fas fa-chevron-right"></i></div>
        </div>
    </header>
    <div class="page-padding-x">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php
                if (wp_is_mobile()) {
                    $postPerPage = '3';
                } else {
                    $postPerPage = '12';
                }
                // WP_Query arguments
                $args = array(
                    'post_type'              => array('gallery'),
                    'post_status'            => array('publish'),
                    'posts_per_page'         => $postPerPage,
                    'paged'                  => get_query_var('paged'),
                );

                // The Query
                $query = new WP_Query($args);

                // The Loop
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="img-wrapper">
                                    <div class="date">
                                        <p><?= get_the_date('j'); ?></p>
                                        <p><?= get_the_date('M'); ?></p>
                                    </div>
                                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?>" class="full-size-img full-size-img-cover">
                                </div>
                                <div class="content">
                                    <h3 class="title"><?php
                                                        $thetitle = get_the_title();
                                                        $getlength = strlen($thetitle);
                                                        $thelength = 55;
                                                        echo substr($thetitle, 0, $thelength);
                                                        if ($getlength > $thelength) echo "...";
                                                        ?></h3>
                                    <a href="<?= get_the_permalink(); ?>" class="btn btn-blank">View More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                <?php };
                } ?>
                <!-- Slides -->


            </div>
        </div>
    </div>
    <footer>
        <div class="wrapper">
            <a href="<?= get_post_type_archive_link('gallery'); ?>" class="btn btn-white mx-auto yellow-deco">View More <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </footer>
</section>