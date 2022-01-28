<div class="hero hero-home page-padding-x d-flex justify-content-start align-items-center" style="background: url(<?= the_field('hero_bg'); ?>);">
    <div class="content">
        <?php
        $featured_posts = get_field('hero_post');
        if ($featured_posts) : ?>
            <?php foreach ($featured_posts as $featured_post) :
                $permalink = get_permalink($featured_post->ID);
                $title = get_the_title($featured_post->ID);
                $post_tags = get_the_tags($featured_post->ID);

            ?>
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
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>