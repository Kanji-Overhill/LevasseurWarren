<?php
/* Template Name: Testimonials */

get_header();
?>
<main>
	<section class="header-1 cover-black">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 text-center">
					<h1><?php _e("Business Coach Success Cases","levasseur-warren") ?></h1>
				</div>
			</div>
		</div>
	</section>
	<section class="testimonials-1">
		<div class="container">
			<div class="row">
				<?php echo do_shortcode("[testimonial_loop]"); ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer();