<?php
/* Template Name: Testimonials */

get_header();
?>
<main>
	<section class="header-1 cover-black">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 text-center">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>
	<section class="testimonials-1">
		<div class="container">
			<div class="row">

				<div class="col-md-3">
					<?php echo do_shortcode("[team_buttons]"); ?>
				</div>
				<div class="col-md-9">
					<div class="row grid">
						<?php echo do_shortcode("[testimonial_loop]"); ?>	
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();