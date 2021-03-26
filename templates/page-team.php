<?php
/* Template Name: Our Team */

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
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="button-group filter-button-group">
						<button class="active" data-filter="*"><?php _e("Show All","levasseur-warren") ?></button>
						<button data-filter=".consultants"><?php _e("Consultants","levasseur-warren") ?></button>
						<button data-filter=".marketing"><?php _e("Marketing","levasseur-warren") ?></button>
						<button data-filter=".coaches"><?php _e("Coaches","levasseur-warren") ?></button>
						<button data-filter=".trainers"><?php _e("Trainers","levasseur-warren") ?></button>
						<button data-filter=".human_resources"><?php _e("Human Resources","levasseur-warren") ?></button>
					</div>
				</div>
			</div>
			<div class="row grid align-items-stretch">
				<?php echo do_shortcode("[team_loop]"); ?>
			</div>
		</div>
	</section>	
</main>
<?php get_footer();