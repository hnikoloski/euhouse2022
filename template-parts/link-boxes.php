<div id="link-boxes">
    <div class="single-box" style="background: url('<?= the_field('events_background'); ?>');">
        <div class="content">
            <h3 class="w-fit-content"><?= __('Events', 'starter'); ?></h3>
            <p><?= the_field('events_description'); ?> </p>
            <a href="<?= the_field('events_link'); ?>" class="btn btn-white mx-auto yellow-deco"><?= __('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
    <div class="single-box" style="background: url('<?= the_field('news_background'); ?>');">
        <div class="content">
            <h3 class="w-fit-content"><?= __('News', 'starter'); ?></h3>
            <p><?= the_field('news_description'); ?> </p>
            <a href="<?= the_field('news_link'); ?>" class="btn btn-white mx-auto yellow-deco"><?= __('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
    <div class="single-box" style="background: url('<?= the_field('sponsorship_background'); ?>');">
        <div class="content">
            <h3 class="w-fit-content"><?= __('Sponsorship', 'starter'); ?></h3>
            <p><?= the_field('sponsorship_description'); ?> </p>
            <a href="<?= the_field('sponsorship_link'); ?>" class="btn btn-white mx-auto yellow-deco"><?= __('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
    <div class="single-box fancy blue" style="background: url('<?= the_field('culture_background'); ?>');">
        <div class="content">
            <h3 class="w-fit-content"><?= __('Culture Matters', 'starter'); ?></h3>
            <a href="<?= the_field('culture_link'); ?>" class="btn btn-blank mx-auto"><?= __('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
    <div class="single-box fancy yellow" style="background: url('<?= the_field('newsletter_background'); ?>');">
        <div class="content">
            <h3 class="w-fit-content"><?= __('Newsletter', 'starter'); ?></h3>
            <a href="<?= the_field('newsletter_link'); ?>" class="btn btn-blank mx-auto"><?= __('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
    <div class="single-box fancy red" style="background: url('<?= the_field('weekly_events_background'); ?>');">
        <div class="content">
            <h3 class="w-fit-content"><?= __('Weekly Events', 'starter'); ?></h3>
            <a href="<?= the_field('weekly_events_link'); ?>" class="btn btn-blank mx-auto"><?= __('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>