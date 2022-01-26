<div id="link-boxes">
    <div class="single-box" style="background: url('<?= the_field('events_background'); ?>');">
        <div class="content">
            <h3 class="w-fit-content">Events</h3>
            <p><?= the_field('events_description'); ?> </p>
            <a href="/events" class="btn btn-white mx-auto yellow-deco">View More <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
    <div class="single-box" style="background: url('<?= the_field('news_background'); ?>');">
        <div class="content">
            <h3 class="w-fit-content">News</h3>
            <p><?= the_field('news_description'); ?> </p>
            <a href="/blog" class="btn btn-white mx-auto yellow-deco">View More <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
    <div class="single-box" style="background: url('<?= the_field('sponsorship_background'); ?>');">
        <div class="content">
            <h3 class="w-fit-content">Sponsorship</h3>
            <p><?= the_field('sponsorship_description'); ?> </p>
            <a href="/events" class="btn btn-white mx-auto yellow-deco">View More <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
    <div class="single-box fancy blue" style="background: url('<?= the_field('culture_background'); ?>');">
        <div class="content">
            <h3 class="w-fit-content">Culture Matters</h3>
            <a href="/events" class="btn btn-blank mx-auto">View More <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
    <div class="single-box fancy yellow" style="background: url('<?= the_field('newsletter_background'); ?>');">
        <div class="content">
            <h3 class="w-fit-content">Newsletter</h3>
            <a href="/events" class="btn btn-blank mx-auto">View More <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
    <div class="single-box fancy red" style="background: url('<?= the_field('weekly_events_background'); ?>');">
        <div class="content">
            <h3 class="w-fit-content">Weekly Events</h3>
            <a href="/events" class="btn btn-blank mx-auto">View More <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>