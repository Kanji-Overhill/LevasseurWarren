<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Levasseur_warren
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header header-1 back-blue">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 text-center">
							<h1><?php echo single_term_title(); ?></h1>
						</div>
					</div>
				</div>
			</header><!-- .page-header -->
			<div class="container">
				<div class="col-12 mt-2">
					<?php echo bcn_display(); ?>
				</div>
				<div class="row pt-4 pb-4">
					<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content-single-category', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>	
				</div>
			</div>

	</main><!-- #main -->

<?php
get_footer();
