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
					<h1><?php echo get_field('h1_title'); ?></h1>
				</div>
			</div>
		</div>
	</section>
	<div class="entry-content">
		<div class="container team-single">
			<div class="row align-items-start">	
				<div class="col-12 mb-4">
					<?php echo bcn_display(); ?>
				</div>	
				<div class="col-md-8">
					<h1 class="text-left"><?php the_title(); ?></h2>
					<h5 class="text-left mb-4" style="color: #5EA0C1"><?php echo get_field('position'); ?></h3>
					<h3 class="text-left mb-4"><?php echo get_field('position_2'); ?></h3>
					<p><?php echo the_field('description') ?></p>
					<?php 
						$cadena = get_field('video');
						$array = explode("be/", $cadena);

						if ($cadena != '') {
							echo '<iframe style="width: 100%; min-height: 400px" src="https://www.youtube.com/embed/'. $array[1] .'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
						}else{

						}
					?>
					<?php
					$featured_posts = get_field('testimonials');
					$count = 1;
					if( $featured_posts ): ?>
						<h2 class="text-center"><?php _e("Testimonials","levasseur-warren") ?></h2>
						<div class="row">
							<div class="col-12">
								<div class="glide">
									<div class="glide__track" data-glide-el="track">
										<div class="glide__slides">

											<?php foreach( $featured_posts as $post ): 
										        setup_postdata($post); ?>
										        <?php echo '
									        		<div class="glide__slide">
														'.get_field('description').'
													</div>
									        	';?>
										    <?php endforeach; ?>
										</div>
									</div>
									<div class="glide__arrows" data-glide-el="controls">
									    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
									    	<img src="<?php echo get_template_directory_uri();?>/resources/arrow_left.svg" alt="choaching">
									    </button>
									    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><img src="<?php echo get_template_directory_uri();?>/resources/arrow_right.svg" alt="choaching"></button>
									  </div>
								</div>
							</div>
					    </div>
					    <?php 
					    // Reset the global post object so that the rest of the page works correctly.
					    wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<div class="col-md-4">
					<img src="<?php echo get_field( 'image' ) ?>" alt="choaching" class="img-fluid">
				</div>
			</div>
		</div>
		<?php

		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
