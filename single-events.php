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
		<h2 class="heading red-bg w-fit-content"><?= the_title(); ?></h2>
		<a href="<?= get_post_type_archive_link(get_post_type()) ?>"><i class="fas fa-chevron-left"></i><?= __('BACK', 'starter'); ?></a>
	</div>

</header>
<main id="primary" class="site-main page-padding-x">
	<div class="event-meta">
		<h4><?php _e('Date and time:'); ?> <?php the_field('event_date'); ?></h4>
		<?php if (get_field('link_to_event')) : ?>
			<a href="<?php the_field('link_to_event'); ?>" target="_blank" rel="noopener noreferrer"><?php _e('View More', 'starter'); ?> <i class="far fa-external-link"></i></a>
		<?php endif; ?>
	</div>
	<?php the_content(); ?>

</main><!-- #main -->

<?php
get_footer();
