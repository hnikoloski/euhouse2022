<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card card-search'); ?>>
	<div class="img-wrapper">
		<img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="full-size-img full-size-img-cover">
	</div>
	<div class="content">
		<h4 class="title"><?php the_title(); ?></h4>
		<a href="<?= get_post_permalink(); ?>" class="btn btn-blue blue-deco"><?php _e('View More', 'starter'); ?> <i class="fal fa-long-arrow-right"></i></a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->