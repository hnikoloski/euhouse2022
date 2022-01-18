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
		<a href="<?= get_post_type_archive_link(get_post_type()) ?>"><i class="fas fa-chevron-left"></i>BACK</a>
	</div>
	<div class="the-content">
		<h2 class="heading"><?= the_title(); ?></h2>
		<?= the_content(); ?>
	</div>
</header>
<main id="primary" class="site-main">

	<div class="gallery w-100">
		<div class="swiper single-gallery-slider">
			<div class="swiper-wrapper">
				<?php
				$images = get_field('images');
				if ($images) : ?>

					<?php foreach ($images as $image) : ?>
						<a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery" class="single-slide swiper-slide">
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="full-size-img full-size-img-cover" />
						</a>
						<p><?php echo esc_html($image['caption']); ?></p>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

		</div>
		<div class="swiper-btns-wrapper">
			<div class="swiper-button swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
			<div class="swiper-button swiper-button-next"><i class="fas fa-chevron-right"></i></div>
		</div>
	</div>

</main><!-- #main -->

<?php
get_footer();
