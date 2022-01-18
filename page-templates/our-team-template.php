<?php

/**
 * Template name: Our Team 
 */
get_header(); ?>
<main class="our-team-page">
    <header class="single-page-header page-padding-x">
        <h2 class="heading w-fit-content p-0"><?= the_field('header_title'); ?></h2>
        <p class="description">
            <?= the_field('header_description'); ?>
        </p>
    </header>
    <div class="content page-padding-x">
        <?php if (have_rows('team_members_sk')) : ?>
            <div class="team-header">
                <h3 class="animated fadeInLeft text-animation add-active"><?= the_field('team_title_sk'); ?></h3>
                <div class="separator"></div>
            </div>

            <div class="team-grid">
                <?php
                $counter = 1;
                while (have_rows('team_members_sk')) : the_row(); ?>
                    <div class="col animated fadeInUp" data-delay="<?= $counter * 100; ?>">
                        <div class="person-card">
                            <div class="img-wrapper">
                                <img src="<?= the_sub_field('image') ?>" alt="<?= the_sub_field('name'); ?>" class="full-size-img full-size-img-cover">
                            </div>
                            <h4><?= the_sub_field('name'); ?></h4>
                            <p><?= the_sub_field('person_title'); ?></p>
                        </div>
                    </div>
                <?php
                    $counter++;
                endwhile; ?>
            </div>
        <?php endif; ?>
        <?php if (have_rows('team_members_st')) : ?>
            <div class="team-header">
                <h3 class="animated fadeInLeft text-animation add-active"><?= the_field('team_title_st'); ?></h3>
                <div class="separator"></div>
            </div>

            <div class="team-grid">
                <?php
                $counter = 1;
                while (have_rows('team_members_st')) : the_row(); ?>
                    <div class="col animated fadeInUp" data-delay="<?= $counter * 100; ?>">
                        <div class="person-card">
                            <div class="img-wrapper">
                                <img src="<?= the_sub_field('image_st') ?>" alt="<?= the_sub_field('name'); ?>" class="full-size-img full-size-img-cover">
                            </div>
                            <h4><?= the_sub_field('name'); ?></h4>
                            <p><?= the_sub_field('person_title'); ?></p>
                        </div>
                    </div>
                <?php
                    $counter++;
                endwhile; ?>
            </div>
        <?php endif; ?>
        <?php if (have_rows('team_members_kp')) : ?>
            <div class="team-header">
                <h3 class="animated fadeInLeft text-animation add-active"><?= the_field('team_title_kp'); ?></h3>
                <div class="separator"></div>
            </div>

            <div class="team-grid">
                <?php
                $counter = 1;
                while (have_rows('team_members_kp')) : the_row(); ?>
                    <div class="col animated fadeInUp" data-delay="<?= $counter * 100; ?>">
                        <div class="person-card">
                            <div class="img-wrapper">
                                <img src="<?= the_sub_field('image_kp') ?>" alt="<?= the_sub_field('name'); ?>" class="full-size-img full-size-img-cover">
                            </div>
                            <h4><?= the_sub_field('name'); ?></h4>
                            <p><?= the_sub_field('person_title'); ?></p>
                        </div>
                    </div>
                <?php
                    $counter++;
                endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>