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
	<section class="header-1 back-blue">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 text-center">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>
	<div class="entry-content">
		<div class="container">
			<div class="row align-items-start">	
				<div class="col-md-8">
					<?php the_post_thumbnail('full'); ?>
					<?php echo the_content(); ?>
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->
</article>
