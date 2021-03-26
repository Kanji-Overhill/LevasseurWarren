<?php
/* Template Name: Areas of Expertise */

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
	<section class="areas-1">
		<div class="container">
			<div class="row">

				<?php echo do_shortcode("[areas_loop]"); ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer();