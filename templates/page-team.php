<?php
/* Template Name: Our Team */

get_header();
?>
<main>
	<section class="header-1 cover-black">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 text-center">
					<h1><?php _e("Equipe de coaching d'affaires et gestion Montréal","levasseur-warren") ?></h1>
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
						<button data-filter=".leadership"><?php _e("Leadership","levasseur-warren") ?></button>
						<button data-filter=".marketing"><?php _e("Marketing","levasseur-warren") ?></button>
						<button data-filter=".coach"><?php _e("Coach","levasseur-warren") ?></button>
						<button data-filter=".formateur"><?php _e("Formateur","levasseur-warren") ?></button>
					</div>
				</div>
			</div>
			<div class="row grid">
				<?php echo do_shortcode("[team_loop]"); ?>
			</div>
		</div>
	</section>	
</main>
<?php get_footer();