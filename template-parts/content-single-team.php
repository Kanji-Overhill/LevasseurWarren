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
					<h1><?php _e("Equipe de coaching d'affaires et gestion Montréal","levasseur-warren") ?></h1>
				</div>
			</div>
		</div>
	</section>
	<div class="entry-content">
		<div class="container team-single">
			<div class="row align-items-start">
				<div class="col-12">
					<?php
						if ( function_exists('yoast_breadcrumb') ) {
						  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
					?>
				</div>	
				<div class="col-md-8">
					<h1 class="text-left"><?php the_title(); ?></h2>
					<h5 class="text-left mb-4" style="color: #5EA0C1"><?php echo get_field('position'); ?></h3>
					<h3 class="text-left mb-4"><?php echo get_field('position_2'); ?></h3>
					<p><?php echo the_field('description') ?></p>
				</div>
				<div class="col-md-4">
					<img src="<?php echo get_field( 'image' ) ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>
		<?php

		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
