<?php
/* Template Name: Home */

get_header();
?>
<main>
	<section class="home-1 cover-black">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 text-center">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>
	<section class="home-2">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
						if (get_locale() == 'en_US') { ?>
						    <h2 class="text-center"><?php _e("A certified team adapted to your needs","levasseur-warren") ?></h2>
					<?php	}else{ ?>
							
					<?php	}
					?>
		
					<p><?php _e("Levasseur Warren has a team of certified coaches and trainers who offer coaching tailored to your needs and objectives. Whether through leadership training, sales training or individual and group business coaching, we will be able to help your managers in their daily tasks to eliminate the causes of your organizational and communication problems. Business coaches are being an important pillar in many businesses. Investing in the training of staff or the coaching of executives has proven hire retention. These days, acquiring talent is more and more difficult, this is why you see businesses employ full time professional business coaches within their organisation and continuously investing in training employees.","levasseur-warren") ?>
					</p>
					<h2 class="text-center mt-4"><?php _e("Our Business Coaching Approach","levasseur-warren") ?></h2>
					<p><?php _e("We accompany you from the beginning to the end of the process, including post-coaching feedback and analysis. We evaluate the needs and provide a free estimate of the coaching strategy to adopt in order to help your company evolve towards success.","levasseur-warren") ?>
					</p>
					<h2 class="text-center mt-4"><?php _e("Why business coaching","levasseur-warren") ?></h2>
					<p><?php _e("Business coaching is becoming a necessary pillar in many companies. Investment in employee training or executive coaching demonstrates higher employee retention. Today, talent acquisition is increasingly difficult, which is why many companies are hiring full-time professional business coaches in their organizations and investing more in ongoing business coaching. <br><br>When you are accompanied by a certified professional coach, you ensure that you are supported by high standards of competence recognized by the ICF (International Coaching Federation).  Our structured approach empowers the coachee in his or her approach, and in partnership, we identify possible solutions, blind spots and actions that will help achieve the goals set.","levasseur-warren") ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="home-3">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<h2 class="text-center"><?php _e("Our Services","levasseur-warren") ?></h2>
				</div>
				<div class="col-md-4 col-12">
					<?php
						if (get_locale() == 'en_US') {
						    echo '<a class="d-flex align-items-center" href="'.site_url('/en/area/coaching/').'">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/coaching.png" alt="choaching">
									    <p>';?> <?php echo _e("COACHING","levasseur-warren").'</p>
									</a>';
						}else{
							echo '<a class="d-flex align-items-center" href="'.site_url('/fr/area/coaching-daffaires-2/').'">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/coaching.png" alt="choaching">
									    <p>';?> <?php echo _e("COACHING","levasseur-warren").'</p>
									</a>';
						}
					?>
				</div>
				<div class="col-md-4 col-12">
					<?php
						if (get_locale() == 'en_US') {
						    echo '<a class="d-flex align-items-center">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/book.png" alt="choaching">
									    <p>';?> <?php echo _e("TRAINING","levasseur-warren").'</p>
									</a>';
						}else{
							echo '<a class="d-flex align-items-center">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/book.png" alt="choaching">
									    <p>';?> <?php echo _e("TRAINING","levasseur-warren").'</p>
									</a>';
						}
					?>	
				</div>
				<div class="col-md-4 col-12">
					<?php
						if (get_locale() == 'en_US') {
						    echo '<a class="d-flex align-items-center">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/leader.png" alt="choaching">
									    <p>';?> <?php echo _e("LEADERSHIP","levasseur-warren").'</p>
									</a>';
						}else{
							echo '<a class="d-flex align-items-center">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/leader.png" alt="choaching">
									    <p>';?> <?php echo _e("LEADERSHIP","levasseur-warren").'</p>
									</a>';
						}
					?>
				</div>
				<div class="col-md-4 col-12">
					<?php
						if (get_locale() == 'en_US') {
						    echo '<a class="d-flex align-items-center" href="'.site_url('/en/area/strategic-sales-marketing-finance-advisory/').'">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/marketing.png" alt="choaching">
									    <p>';?> <?php echo _e("MARKETING, SALES AND FINANCES","levasseur-warren").'</p>
									</a>';
						}else{
							echo '<a class="d-flex align-items-center" href="'.site_url('/fr/area/conseils-strategiques-marketing-ventes-finances/').'">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/marketing.png" alt="choaching">
									    <p>';?> <?php echo _e("MARKETING, SALES AND FINANCES","levasseur-warren").'</p>
									</a>';
						}
					?>
				</div>
				<div class="col-md-4 col-12">
					<?php
						if (get_locale() == 'en_US') {
						    echo '<a href="'.site_url('/en/area/hr-consulting-advisory-service/').'" class="d-flex align-items-center">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/lw_ressources_humaines.png" alt="choaching">
									    <p>';?> <?php echo _e("HUMAN RESOURCES","levasseur-warren").'</p>
									</a>';
						}else{
							echo '<a href="'.site_url('/fr/area/conseils-ressources-humaines/').'" class="d-flex align-items-center">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/lw_ressources_humaines.png" alt="choaching">
									    <p>';?> <?php echo _e("HUMAN RESOURCES","levasseur-warren").'</p>
									</a>';
						}
					?>
				</div>
				<div class="col-md-4 col-12">
					<?php
						if (get_locale() == 'en_US') {
						    echo '<a href="'.site_url('/en/advisory-board-services/').'" class="d-flex align-items-center">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/hr.png" alt="choaching">
									    <p>';?> <?php echo _e("ADVISORY BOARD","levasseur-warren").'</p>
									</a>';
						}else{
							echo '<a href="'.site_url('/fr/services-conseil-consultatif/').'" class="d-flex align-items-center">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/hr.png" alt="choaching">
									    <p>';?> <?php echo _e("ADVISORY BOARD","levasseur-warren").'</p>
									</a>';
						}
					?>
				</div>
				<div class="col-md-4 col-12">
					<?php
						if (get_locale() == 'en_US') {
						    echo '<a href="'.site_url('/en/area/telework/').'" class="d-flex align-items-center">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/lw_teletravail.png" alt="choaching">
									    <p>';?> <?php echo _e("TELEWORK","levasseur-warren").'</p>
									</a>';
						}else{
							echo '<a href="'.site_url('/fr/area/teletravail/').'" class="d-flex align-items-center">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/lw_teletravail.png" alt="choaching">
									    <p>';?> <?php echo _e("TELEWORK","levasseur-warren").'</p>
									</a>';
						}
					?>
				</div>
				<div class="col-md-4 col-12">
					<?php
						if (get_locale() == 'en_US') {
						    echo '<a href="'.site_url('/en/area/digital-transformation/').'" class="d-flex align-items-center">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/lw_trasnformation_numerique.png" alt="choaching">
									    <p>';?> <?php echo _e("DIGITAL TRANSFORMATION","levasseur-warren").'</p>
									</a>';
						}else{
							echo '<a href="'.site_url('/fr/area/transformation-numerique/').'" class="d-flex align-items-center">
										<img class="img-fluid" src="'.get_template_directory_uri().'/resources/lw_trasnformation_numerique.png" alt="choaching">
									    <p>';?> <?php echo _e("DIGITAL TRANSFORMATION","levasseur-warren").'</p>
									</a>';
						}
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="home-4">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center"><?php _e("Our Team","levasseur-warren") ?></h2>
				</div>
				<div class="col-md-4 col-12 text-center">
					<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/resources/group.png" alt="choaching">
					<p><?php _e("24 Coaches","levasseur-warren") ?></p>
				</div>
				<div class="col-md-4 col-12 text-center">
					<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/resources/car.png" alt="choaching">
					<p><?php _e("12 Trainers","levasseur-warren") ?></p>
				</div>
				<div class="col-md-4 col-12 text-center">
					<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/resources/network.png" alt="choaching">
					<p><?php _e("34 Disciplines","levasseur-warren") ?></p>
				</div>
				<div class="col-12 text-center">
					<?php
						if (get_locale() == 'en_US') {
						    echo '<a href="'.site_url('/en/business-coach-team-montreal/').'">KNOW OUR TEAM</a>';
						}else{
							echo '<a href="'.site_url('/fr/equipe-coaching-affaires-montreal/').'">CONNAISSEZ NOTRE ÉQUIPE</a>';
						}
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="home-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<h2 class="text-center"><?php _e("Members Of","levasseur-warren") ?></h2>
				</div>
				<div class="col-md-3 col-12 mb-4 d-flex align-items-center justify-content-center">
					<a href="https://www.cpmt.gouv.qc.ca/" target="_blank">
						<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/resources/cpmt-02.png" alt="choaching">
					</a>
				</div>
				<div class="col-md-3 col-12 mb-4 d-flex align-items-center justify-content-center">
					<a href="https://www.ccmm.ca/" target="_blank">
						<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/resources/ccmm-fr.png" alt="choaching">
					</a>
				</div>
				<div class="col-md-3 col-9 mb-4 d-flex align-items-center justify-content-center">
					<a href="https://coachingfederation.org/" target="_blank">
						<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/resources/international-coach-federation.png" alt="choaching">
					</a>
				</div>
				<div class="col-md-3 col-10 mb-4 d-flex align-items-center justify-content-center">
					<a href="https://groupement.ca/" target="_blank">
						<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/resources/groupement.png" alt="choaching">
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="home-6">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center"><?php _e("Testimonials","levasseur-warren") ?></h2>
				</div>
				<div class="col-12">
					<div class="glide">
						<div class="glide__track" data-glide-el="track">
							<div class="glide__slides">
								<?php echo do_shortcode("[testimonial_slide]"); ?>
								
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
				<div class="col-12 text-center">
					<?php
						if (get_locale() == 'en_US') {
						    echo '<a href="'.site_url('/en/business-coaching-success-cases-in-montreal/').'">LEARN MORE</a>';
						}else{
							echo '<a href="'.site_url('/fr/temoignages-succes-coaching-montreal/').'">APPRENDRE ENCORE PLUS</a>';
						}
					?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer();