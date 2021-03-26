<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Levasseur_warren
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="header-1 header-areas" style="background-image: url(<?php echo the_field('image') ?>);">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 text-center">
					<h1><?php echo get_field('h1_title'); ?></h1>
				</div>
			</div>
		</div>
	</section>
	<div class="entry-content">
		<div class="container">
			<div class="row">
				<div class="col-12 mb-4">
					<?php echo bcn_display(); ?>
				</div>
			</div>
			<div class="row align-items-start justify-content-center">
				<div class="col-md-12">
					<p><?php echo the_field('content') ?></p>
				</div>
			</div>
		</div>
		<div class="container mt-4 border-top">
			<div class="row">
				<?php 
						$title = get_the_title();
						echo do_shortcode("[related_post categoria='".$title."']");						
					?>
			</div>
		</div>
		<?php

		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
