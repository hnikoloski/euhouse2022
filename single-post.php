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
		<a href="/blog"><i class="fas fa-chevron-left"></i> <?= __('BACK', 'starter'); ?></a>
	</div>
	<div class="the-content">
		<h2 class="heading"><?= the_title(); ?></h2>
	</div>
	<div class="img-wrapper">
		<img src="<?= the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?>" class="full-size-img full-size-img-cover">
	</div>
</header>
<main id="primary" class="site-main">

	<?php the_content(); ?>

</main><!-- #main -->

<?php
get_footer();
