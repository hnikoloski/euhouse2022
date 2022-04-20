<div class="hero hero-home page-padding-x swiper hero-home-slider" style="background: url(<?= the_field('hero_bg'); ?>);">
    <div class="swiper-wrapper">
        <?php
        $featured_posts = get_field('hero_post');
        if ($featured_posts) : ?>
            <?php foreach ($featured_posts as $featured_post) :
                $permalink = get_permalink($featured_post->ID);
                $title = get_the_title($featured_post->ID);
                $post_tags = get_the_tags($featured_post->ID);
                $post_image = get_the_post_thumbnail_url($featured_post->ID);
            ?>
                <div class="swiper-slide" style="background: url(<?= $post_image ?>); background-size:cover; background-position:center; background-repeat:no-repeat;">
                    <div class="content">

                        <div class="date w-fit-content">
                            <p><i class="fas fa-calendar-alt"></i> <?= get_the_date('j M'); ?></p>
                        </div>
                        <?php
                        if ($post_tags) {
                        ?>
                            <div class="tag w-fit-content">
                                <p><?= $post_tags[0]->name; ?></p>
                            </div>
                        <?php } ?>
                        <h2 class="heading w-fit-content"><?= $title; ?></h2>
                        <a href="<?= $permalink; ?>" class="btn btn-blue"><?= __('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
                    </div>

                </div>
            <?php endforeach; ?>
            <div class="swiper-pagination"></div>

        <?php endif; ?>
    </div>
</div>