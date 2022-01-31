<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * 
 */

get_header();
?>
<header class="single-page-header page-padding-x">
	<div class="top-bar">
		<p class="heading red-bg w-fit-content"><?= get_the_date('j M'); ?></p>
		<a href="<?= get_post_type_archive_link(get_post_type()) ?>"><i class="fas fa-chevron-left"></i><?= __('BACK', 'starter'); ?></a>
	</div>
	<div class="the-content">
		<h2 class="heading"><?= the_title(); ?></h2>
	</div>
</header>
<main id="primary" class="site-main">
	<div class="person-info">
		<div class="left-side">
			<div class="img-wrapper">
				<img src="<?= the_field('person_image'); ?>" alt="<?= the_field('person_name'); ?>" class="full-size-img full-size-img-cover">
			</div>
			<div class="wrapper">
				<h6><?= the_field('person_title'); ?></h6>
				<h3><?= the_field('person_name'); ?></h3>
				<p><?= the_field('person_position'); ?></p>
			</div>
		</div>
		<div class="right-side">
			<?= the_field('person_letter'); ?>
		</div>
	</div>
	<div class="content-blocks-wrapper">

		<?= the_content(); ?>
	</div>
</main><!-- #main -->

<?php
get_footer();
